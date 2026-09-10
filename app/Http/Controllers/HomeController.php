<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homeSections = \App\Models\HomeSection::where('is_active', true)->orderBy('sort_order')->get();
        foreach ($homeSections as $section) {
            if ($section->layout_style === 'product_filter' && !empty($section->category_ids) && is_array($section->category_ids)) {
                $section->products = \App\Models\Product::with('category')->whereIn('category_id', $section->category_ids)->where('is_active', true)->get();
            } elseif (!empty($section->product_ids) && is_array($section->product_ids)) {
                $products = \App\Models\Product::whereIn('id', $section->product_ids)->where('is_active', true)->get();
                // Maintain the sorting order specified by admin
                $section->products = $products->sortBy(function($model) use ($section) {
                    return array_search($model->id, $section->product_ids);
                })->values();
            } else {
                $section->products = collect();
            }
        }
        $categories = \App\Models\Category::where('is_active', true)->whereNull('parent_id')->get();
        $banners = \App\Models\Banner::where('is_active', true)->orderBy('sort_order')->get();
        return view('website.home', compact('homeSections', 'categories', 'banners'));
    }
    
    public function product()
    {
        $products = \App\Models\Product::where('is_active', true)->get();
        $categories = \App\Models\Category::where('is_active', true)->whereNull('parent_id')->get();
        return view('website.product', compact('products', 'categories'));
    }
    
    public function notify()
    {
        $notifications = \App\Models\SiteNotification::where('is_active', true)->latest()->get();
        return view('website.notify', compact('notifications'));
    }
    
    public function single_product($slug = null)
    {
        $product = $slug ? \App\Models\Product::where('slug', $slug)->firstOrFail() : \App\Models\Product::first();
        $categoryIds = collect();
        if ($product->category) {
            $sectionCategory = $product->category;
            while ($sectionCategory && $sectionCategory->parent && $sectionCategory->parent->parent) {
                $sectionCategory = $sectionCategory->parent;
            }
            
            $categoryIds->push($sectionCategory->id);
            foreach ($sectionCategory->children as $child) {
                $categoryIds->push($child->id);
                foreach ($child->children as $grandChild) {
                    $categoryIds->push($grandChild->id);
                }
            }
        }

        $relatedProducts = \App\Models\Product::where('is_active', true)
                                              ->where('id', '!=', $product->id);
                                              
        if ($categoryIds->isNotEmpty()) {
            $relatedProducts = $relatedProducts->whereIn('category_id', $categoryIds->unique());
        }
        
        $relatedProducts = $relatedProducts->inRandomOrder()
                                           ->take(10)
                                           ->get();
        return view('website.single-product', compact('product', 'relatedProducts'));
    }
    
    public function cart()
    {
        $cartItems = session('cart', []);
        
        if (empty($cartItems)) {
            return view('website.empty-cart');
        }
        
        $relatedProducts = \App\Models\Product::where('is_active', true)
                                           ->inRandomOrder()
                                           ->take(6)
                                           ->get();
                                           
        return view('website.cart', compact('cartItems', 'relatedProducts'));
    }
    
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'size' => 'required|string',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = \App\Models\Product::findOrFail($request->product_id);
        
        $cart = session()->get('cart', []);
        
        // Use a composite key for the same product with different sizes
        $cartKey = $product->id . '_' . $request->size;
        
        if(isset($cart[$cartKey])) {
            $cart[$cartKey]['quantity'] += $request->quantity;
        } else {
            $cart[$cartKey] = [
                "product_id" => $product->id,
                "name" => $product->name,
                "quantity" => $request->quantity,
                "price" => $product->price,
                "old_price" => $product->old_price,
                "size" => $request->size,
                "image" => $product->images && count($product->images) > 0 ? $product->images[0] : null,
                "category" => $product->category ? $product->category->name : 'Uncategorized'
            ];
        }
        
        session()->put('cart', $cart);
        
        return response()->json(['success' => true, 'message' => 'Item added to cart successfully!', 'cart_count' => count($cart)]);
    }
    
    public function removeFromCart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return response()->json(['success' => true, 'cart_count' => count((array)$cart)]);
        }
        return response()->json(['success' => false]);
    }

    public function checkout()
    {
        $cartItems = session()->get('cart', []);
        
        $grandTotal = 0;
        foreach($cartItems as $item) {
            $grandTotal += $item['price'] * $item['quantity'];
        }

        return view('website.checkout', compact('cartItems', 'grandTotal'));
    }
    
    public function trackOrder()
    {
        $session_id = session()->getId();
        $orders = \App\Models\Order::with('items.product')
            ->where(function($query) use ($session_id) {
                if(auth()->check()) {
                    $query->where('user_id', auth()->id());
                } else {
                    $query->where('session_id', $session_id);
                }
            })
            ->orderBy('id', 'desc')
            ->get();

        return view('website.track', compact('orders'));
    }
    
    public function placeOrder(Request $request)
    {
        $request->validate([
            'shipping_name' => 'required|string|max:255',
            'shipping_phone' => 'required|string|max:20',
            'shipping_address' => 'required|string',
            'shipping_pincode' => 'required|string|max:10',
            'payment_method' => 'required|string'
        ]);

        $cartItems = session()->get('cart', []);
        
        if(empty($cartItems)) {
            return redirect()->route(\App\Constants\RouteNames::CART)->with('error', 'Your cart is empty!');
        }

        $grandTotal = 0;
        foreach($cartItems as $item) {
            $grandTotal += $item['price'] * $item['quantity'];
        }

        $order = \App\Models\Order::create([
            'user_id' => auth()->id(),
            'session_id' => session()->getId(),
            'total_amount' => $grandTotal,
            'status' => 'pending',
            'payment_method' => $request->payment_method,
            'shipping_name' => $request->shipping_name,
            'shipping_phone' => $request->shipping_phone,
            'shipping_address' => $request->shipping_address,
            'shipping_pincode' => $request->shipping_pincode,
        ]);

        foreach($cartItems as $item) {
            \App\Models\OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price']
            ]);
        }

        session()->forget('cart');

        return redirect()->route(\App\Constants\RouteNames::HOME_INDEX)->with('success', 'Order placed successfully!');
    }
    
    public function wishlist()
    {
        $wishlistItems = session('wishlist', []);
        return view('website.wishlist', compact('wishlistItems'));
    }
    
    public function addToWishlist(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        $product = \App\Models\Product::findOrFail($request->product_id);
        
        $wishlist = session()->get('wishlist', []);
        $wishlistKey = $product->id;
        
        if(!isset($wishlist[$wishlistKey])) {
            $wishlist[$wishlistKey] = [
                "product_id" => $product->id,
                "name" => $product->name,
                "price" => $product->price,
                "old_price" => $product->old_price,
                "image" => $product->images && count($product->images) > 0 ? $product->images[0] : null,
                "category" => $product->category ? $product->category->name : 'Uncategorized',
                "slug" => $product->slug
            ];
            $action = 'added';
            $message = 'Item added to wishlist successfully!';
        } else {
            unset($wishlist[$wishlistKey]);
            $action = 'removed';
            $message = 'Item removed from wishlist!';
        }
        
        session()->put('wishlist', $wishlist);
        
        return response()->json(['success' => true, 'action' => $action, 'message' => $message, 'wishlist_count' => count($wishlist)]);
    }

    public function dbhost(){
        \Artisan::call('config:clear');
        return "Config cache cleared.";
    }
}

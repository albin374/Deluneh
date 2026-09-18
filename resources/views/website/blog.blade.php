@include('website.header')
@include('website.nav')

<style>
    .main--wrapper {
        margin-top: 80px !important;
        min-height: 50vh;
    }
    .navigation {
        display: none;
    }
    .highlated-sale.top-highlated.d-lg-block.d-none{
       display:none!important; 
    }
</style>

<main class="main--wrapper">
    <div class="container py-2 mt-0">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-5" style="font-family: 'Montserrat', sans-serif; color: #ff0043; font-weight: 700;">DE LUNEH stories</h1>
            </div>
        </div>
        
        @if($blogs->isEmpty())
            <div class="text-center">
                <p class="lead text-muted">Check back soon for exciting updates, styling tips, and news!</p>
            </div>
        @else
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    @foreach($blogs as $blog)
                        <div class="blog-card mb-5 p-4 p-md-5" style="border: 1px solid #eaeaea; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.03); background-color: #fff;">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 border-bottom pb-3">
                                <h2 style="font-weight: 600; color: #111;">{{ $blog->heading }}</h2>
                                @if($blog->date)
                                    @php
                                        $parsedDate = \Carbon\Carbon::parse($blog->date)->startOfDay();
                                        $today = \Carbon\Carbon::now()->startOfDay();
                                        $diff = $parsedDate->diffInDays($today);
                                        
                                        if ($parsedDate->isToday()) {
                                            $dateDisplay = 'Today';
                                        } elseif ($parsedDate->isYesterday()) {
                                            $dateDisplay = '1 day ago';
                                        } elseif ($parsedDate->isFuture()) {
                                            $dateDisplay = $parsedDate->format('M d, Y');
                                        } else {
                                            $dateDisplay = $diff . ' days ago';
                                        }
                                    @endphp
                                    <span class="text-muted mt-2 mt-md-0" style="font-size: 0.95rem; font-weight: 500;">
                                        <i class="fa-regular fa-calendar-alt me-1"></i> {{ $dateDisplay }}
                                    </span>
                                @endif
                            </div>
                            
                            @if($blog->image)
                                <div class="blog-image mb-4 text-center">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->heading }}" class="img-fluid rounded" style="max-height: 600px; width: 100%; object-fit: cover;">
                                </div>
                            @endif
                            
                            <div class="mt-4 text-center text-md-start">
                                <a href="{{ route('blog.show', $blog->id) }}" class="btn px-4 py-2" style="border-radius: 30px; font-weight: 500; background-color: #ff0043; color: #fff; border: none;">
                                    Continue reading <i class="fa-solid fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</main>

@include('website.footer')

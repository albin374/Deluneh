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
        
        <div class="row justify-content-center">
            <div class="col-lg-9">
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
                    
                    @if($blog->description)
                        <div class="blog-description mb-5" style="color: #444; line-height: 1.7; font-size: 1.05rem;">
                            {!! $blog->description !!}
                        </div>
                    @endif
                    
                    @if($blog->points && is_array($blog->points))
                        <div class="blog-points mt-5">
                            @foreach($blog->points as $point)
                                <div class="point-item mb-5 pb-4" style="border-bottom: 1px dashed #e2e2e2;">
                                    @if(!empty($point['image']))
                                        <div class="mb-4 text-center">
                                            <img src="{{ asset('storage/' . $point['image']) }}" alt="{{ $point['heading'] ?? 'Blog feature' }}" class="img-fluid rounded" style="max-height: 500px; width: 100%; object-fit: cover;">
                                        </div>
                                    @endif
                                    @if(!empty($point['heading']))
                                        <h4 class="mb-3" style="color: #222; font-weight: 600;">{{ $point['heading'] }}</h4>
                                    @endif
                                    @if(!empty($point['description']))
                                        <div style="color: #555; line-height: 1.6;">{!! nl2br(e($point['description'])) !!}</div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                    
                    <div class="mt-4 text-center">
                        <a href="{{ route('blog') }}" class="btn btn-outline-dark px-4 py-2" style="border-radius: 30px;">
                            <i class="fa-solid fa-arrow-left me-2"></i> Back to all stories
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('website.footer')

@include('website.header')
@include('website.nav')

<style>
    .notify-container {
        max-width: 500px;
        margin: 40px auto;
        padding: 0 15px;
    }
    .notify-card {
        background: #fff;
        border: 1px solid #eaeaea;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.02);
    }
    .notify-card img {
        width: 100%;
        max-height: 400px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 15px;
    }
    .notify-text {
        font-size: 16px;
        color: #333;
        line-height: 1.5;
    }
    .notify-date {
        font-size: 12px;
        color: #999;
        margin-bottom: 10px;
    }
    .empty-state {
        text-align: center;
        padding: 50px 0;
        color: #666;
    }
</style>

<div class="notify-container">
    <h2 class="mb-4" style="font-weight: 700;">Notifications</h2>
    
    @if(isset($notifications) && $notifications->count() > 0)
        @foreach($notifications as $notification)
            <div class="notify-card">
                <div class="notify-date">
                    {{ $notification->created_at->format('M d, Y h:i A') }}
                </div>
                
                @if($notification->image)
                    <img src="{{ asset('storage/' . $notification->image) }}" alt="Notification Image">
                @endif
                
                @if($notification->text)
                    <div class="notify-text">
                        {!! nl2br(e($notification->text)) !!}
                    </div>
                @endif
            </div>
        @endforeach
    @else
        <div class="empty-state">
            <h4>No new notifications at the moment! 📭</h4>
        </div>
    @endif
</div>

@include('website.footer')

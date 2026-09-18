@include('website.header')
@include('website.nav')

<style>
    .notify-container {
        max-width: 900px;
        margin: 50px auto;
        padding: 0 15px;
        font-family: 'Inter', sans-serif; /* Fallback */
    }
    .notify-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }
    .notify-header h2 {
        font-weight: 700;
        color: #111;
        margin-bottom: 5px;
        font-size: 28px;
    }
    .notify-header p {
        color: #666;
        margin: 0;
        font-size: 15px;
    }
    
    .notify-card {
        background: #fff;
        border: 1px solid #f0f0f0;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        transition: 0.3s;
        box-shadow: 0 1px 4px rgba(0,0,0,0.02);
    }
    
    /* Unread state example (can apply conditionally) */
    .notify-card.unread {
        background: #fdf5f5;
        border-color: #fcebeb;
        border-left: 4px solid #e53935;
    }
    
    .notify-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #fcebeb;
        color: #e53935;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
        margin-right: 20px;
    }
    
    .notify-content {
        flex-grow: 1;
        padding-right: 20px;
    }
    
    .notify-title {
        font-weight: 700;
        font-size: 16px;
        color: #222;
        margin-bottom: 5px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .notify-badge {
        background-color: #e53935;
        color: white;
        font-size: 11px;
        padding: 2px 8px;
        border-radius: 10px;
        font-weight: 600;
    }
    
    .notify-text {
        font-size: 14px;
        color: #777;
        margin: 0;
        line-height: 1.4;
    }
    
    .notify-image {
        width: 120px;
        height: 70px;
        border-radius: 8px;
        object-fit: cover;
        flex-shrink: 0;
        margin-right: 20px;
        border: 1px solid #f0f0f0;
    }
    
    .notify-meta {
        text-align: right;
        min-width: 100px;
        display: flex;
        align-items: center;
        gap: 15px;
        flex-shrink: 0;
    }
    
    .notify-datetime {
        font-size: 13px;
        color: #666;
        line-height: 1.5;
    }
    
    .notify-status-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: #ccc; /* read */
    }
    .unread .notify-status-dot {
        background-color: #e53935; /* unread */
    }

    .empty-state {
        text-align: center;
        padding: 60px 0;
        color: #888;
        background: #f9f9f9;
        border-radius: 12px;
    }
    
    @media (max-width: 768px) {
        .notify-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }
        .notify-card {
            flex-wrap: wrap;
        }
        .notify-image {
            margin: 15px 0 0 70px;
            width: calc(100% - 70px);
            height: 120px;
        }
        .notify-meta {
            width: 100%;
            margin-top: 15px;
            justify-content: space-between;
            padding-left: 70px;
        }
    }
</style>

<div class="notify-container">
    <div class="notify-header">
        <div>
            <h2>Notifications</h2>
            <p>Stay updated with the latest news, offers and updates.</p>
        </div>
    </div>
    
    @if(isset($notifications) && $notifications->count() > 0)
        @foreach($notifications as $index => $notification)
            @php
                // Since we only have 'text' in the DB, we can try to extract a title if there's a newline
                $parts = explode("\n", $notification->text, 2);
                $title = trim($parts[0]);
                $subtext = isset($parts[1]) ? trim($parts[1]) : '';
                
                // For demonstration, make the first item look "unread" as per design
                $isUnread = $index === 0;
            @endphp
            
            <div class="notify-card {{ $isUnread ? 'unread' : '' }}">
                <div class="notify-icon">
                    @if(stripos($title, 'offer') !== false || stripos($title, 'discount') !== false || stripos($title, 'sale') !== false)
                        <i class="fa fa-bullhorn"></i>
                    @elseif(stripos($title, 'order') !== false || stripos($title, 'shipped') !== false)
                        <i class="fa fa-truck"></i>
                    @elseif(stripos($title, 'collection') !== false)
                        <i class="fa fa-calendar"></i>
                    @elseif(stripos($title, 'account') !== false)
                        <i class="fa fa-file-text-o"></i>
                    @elseif(stripos($title, 'rate') !== false || stripos($title, 'feedback') !== false)
                        <i class="fa fa-star-o"></i>
                    @else
                        <i class="fa fa-bell-o"></i>
                    @endif
                </div>
                
                <div class="notify-content">
                    <div class="notify-title">
                        {{ $title }}
                        @if($isUnread)
                            <span class="notify-badge">New</span>
                        @endif
                    </div>
                    @if($subtext)
                        <p class="notify-text">{{ $subtext }}</p>
                    @endif
                </div>
                
                @if($notification->image)
                    <img src="{{ asset('storage/' . $notification->image) }}" class="notify-image" alt="Notification">
                @endif
                
                <div class="notify-meta">
                    <div class="notify-datetime">
                        <div>{{ $notification->created_at->format('M d, Y') }}</div>
                        <div>{{ $notification->created_at->format('h:i A') }}</div>
                    </div>
                    <div class="notify-status-dot"></div>
                </div>
            </div>
        @endforeach
    @else
        <div class="empty-state">
            <h4>No new notifications at the moment! 📭</h4>
        </div>
    @endif
</div>

@include('website.footer')

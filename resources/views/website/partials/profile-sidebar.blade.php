<div class="profile-sidebar">
    <div class="profile-user-info mb-4 p-3 bg-light rounded">
        @if(auth()->check())
            <h5 class="mb-1" style="font-weight: 600;">{{ auth()->user()->name }} <i class="fa-solid fa-chevron-right fs-6 ms-2"></i></h5>
            <p class="text-muted mb-2" style="font-size: 14px;">{{ auth()->user()->email }}</p>
            <a href="#" class="text-danger" style="font-size: 12px; font-weight: 500; text-decoration: none;">Get Membership Now</a>
        @else
            <h5 class="mb-1" style="font-weight: 600;">Guest <i class="fa-solid fa-chevron-right fs-6 ms-2"></i></h5>
            <p class="text-muted mb-2" style="font-size: 14px;">guest@example.com</p>
        @endif
    </div>

    <div class="list-group profile-nav-list border mb-4">
        <a href="{{ route('track.order') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {{ request()->routeIs('track.order') ? 'active-profile-tab' : '' }}">
            Orders
            <span class="text-muted" style="font-size: 12px;">(Track your order here)</span>
        </a>
        
        <a href="{{ route('profile.saved-address') }}" class="list-group-item list-group-item-action {{ request()->routeIs('profile.saved-address') ? 'active-profile-tab text-teal' : '' }}">
            Saved Address
        </a>

        <a href="{{ route('gift-vouchers') }}" class="list-group-item list-group-item-action {{ request()->routeIs('gift-vouchers') ? 'active-profile-tab' : '' }}">
            Gift Vouchers
        </a>

        <a href="#" class="list-group-item list-group-item-action">
            TSS Money <span class="text-teal" style="font-size: 11px;">(TSS Money Balance: ₹ 0.00)</span>
        </a>

        <a href="#" class="list-group-item list-group-item-action">
            TSS Points <span class="text-teal" style="font-size: 11px;">(Active TSS Points: 0.00)</span>
        </a>

        <a href="{{ route('faq') }}" class="list-group-item list-group-item-action border-bottom-0 {{ request()->routeIs('faq') ? 'active-profile-tab' : '' }}">
            FAQs
        </a>
    </div>

    <div class="mt-4 mb-3">
        <a href="#" class="btn btn-outline-danger w-100 py-2 rounded-0 fw-bold" style="font-size: 14px;">DELETE MY ACCOUNT</a>
    </div>
    
    <div class="mb-3">
        <form action="{{ route('logout') }}" method="POST" class="d-inline w-100">
            @csrf
            <button type="submit" class="btn btn-outline-danger w-100 py-2 rounded-0 fw-bold" style="font-size: 14px;">LOGOUT</button>
        </form>
    </div>
</div>

<style>
    .profile-sidebar .bg-light {
        background-color: #f6f6f6 !important;
    }
    .profile-nav-list {
        border-radius: 0;
    }
    .profile-nav-list .list-group-item {
        border: none;
        border-bottom: 1px solid #f0f0f0;
        padding: 15px 20px;
        font-size: 15px;
        color: #555;
    }
    .profile-nav-list .list-group-item:last-child {
        border-bottom: none !important;
    }
    .profile-nav-list .list-group-item:hover, .profile-nav-list .active-profile-tab {
        background-color: transparent;
    }
    .text-teal {
        color: #008080 !important;
    }
    .profile-nav-list .active-profile-tab {
        font-weight: 500;
        color: #008080;
    }
</style>

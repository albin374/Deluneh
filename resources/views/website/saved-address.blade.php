@include('website.header')
@include('website.nav')

<style>
.navigation {
    display: none;
}
.highlated-sale.top-highlated.d-lg-block.d-none{
   display:none!important; 
}
</style>

<div class="container mt-5 mb-5 profile-content">
    <div class="row">
        <!-- Sidebar (User Info Only) -->
        <div class="col-md-4 col-lg-3">
            <div class="profile-user-info mb-4 p-4 bg-light rounded shadow-sm" style="background-color: #f6f6f6 !important;">
                @if(auth()->check())
                    <h5 class="mb-1" style="font-weight: 700; color: #1a2b49;">{{ auth()->user()->name }} <i class="fa-solid fa-chevron-right fs-6 ms-2 text-muted"></i></h5>
                    <p class="mb-3" style="font-size: 13px; color: #0077b6;">{{ auth()->user()->email }}</p>
                    <a href="#" class="text-danger mt-3 d-block" style="font-size: 11px; font-weight: 600; text-decoration: none;">Get Membership Now</a>
                @else
                    <h5 class="mb-1" style="font-weight: 700; color: #1a2b49;">Guest <i class="fa-solid fa-chevron-right fs-6 ms-2 text-muted"></i></h5>
                    <p class="mb-3" style="font-size: 13px; color: #0077b6;">guest@example.com</p>
                @endif
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="col-md-8 col-lg-9">
            
            <div class="d-flex justify-content-between align-items-center border p-3 bg-white mb-4 shadow-sm" style="cursor: pointer; color: #008080;" onclick="toggleAddressForm()">
                <div class="d-flex align-items-center fw-bold">
                    <i class="fa-solid fa-plus me-2"></i> Add New Address
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success rounded-0">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card border-0 shadow-sm rounded-0 bg-white d-none mb-4" id="addressFormCard">
                <div class="card-body p-4">
                    <h5 class="mb-4">Add New Address</h5>
                    <form action="{{ route('profile.saved-address') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label text-muted fw-bold" style="font-size: 13px;">Full Name</label>
                            <input type="text" name="address_full_name" class="form-control rounded-0 p-2" value="{{ auth()->check() ? auth()->user()->address_full_name : '' }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-bold" style="font-size: 13px;">Mobile Number</label>
                            <input type="text" name="address_mobile_number" class="form-control rounded-0 p-2" value="{{ auth()->check() ? auth()->user()->address_mobile_number : '' }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-bold" style="font-size: 13px;">Address</label>
                            <textarea name="address" class="form-control rounded-0 p-2" rows="3" required>{{ auth()->check() ? auth()->user()->address : '' }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-muted fw-bold" style="font-size: 13px;">Pincode</label>
                            <input type="text" name="pincode" class="form-control rounded-0 p-2" value="{{ auth()->check() ? auth()->user()->pincode : '' }}" required>
                        </div>
                        <button type="submit" class="btn text-white rounded-0 py-2 px-4 fw-bold shadow-sm w-100" style="background-color: #d8262f;">SAVE</button>
                    </form>
                </div>
            </div>

            @if(auth()->check() && auth()->user()->address)
                <h6 class="mb-3 text-muted text-uppercase mt-4" style="font-size: 13px;">Saved Address</h6>
                <div class="card border shadow-sm rounded-0">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-bold mb-2">{{ auth()->user()->address_full_name }} <span class="badge bg-light text-dark ms-2 fw-normal border">Default</span></h6>
                        </div>
                        <p class="mb-1 text-muted" style="font-size: 14px;">{{ auth()->user()->address }}</p>
                        <p class="mb-1 text-muted" style="font-size: 14px;">{{ auth()->user()->pincode }}</p>
                        <p class="mb-0 text-muted mt-2" style="font-size: 14px;">Mobile: <span class="fw-semibold">{{ auth()->user()->address_mobile_number }}</span></p>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>

<script>
    function toggleAddressForm() {
        const formCard = document.getElementById('addressFormCard');
        if (formCard.classList.contains('d-none')) {
            formCard.classList.remove('d-none');
        } else {
            formCard.classList.add('d-none');
        }
    }
    
    // Check if there are errors or if it's explicitly set to open
    @if(session('openForm') || $errors->any())
        document.getElementById('addressFormCard').classList.remove('d-none');
    @endif
</script>

@include('website.footer')

@include('website.header')
@include('website.nav')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap');

    /* Hide the secondary navigation row and sale banner specifically on the login page */
    nav.navigation, .top-highlated, #home-none {
        display: none !important;
    }

    /* Adjust the margin to account for the hidden navigation row */
    .main--wrapper {
        margin-top: 125px !important;
    }
    
    @media screen and (max-width: 992px) {
        .main--wrapper {
            margin-top: 60px !important;
        }
    }

    .login-page-container {
        --primary: #facc15;
        --text-main: #333333;
        --text-muted: #a0a0a0;
        --border: #d6d6d6;
        --bg-light: #ffffff;
        font-family: 'Montserrat', sans-serif;
        background: #ffffff;
    }

    .login-page-container .main-content {
        display: flex;
        width: 100%;
        background: #ffffff;
        min-height: calc(100vh - 100px);
        align-items: stretch;
    }

    .login-page-container .login-wrapper {
        display: flex;
        width: 100%;
        max-width: 100%;
        background: #fff;
    }

    .login-page-container .image-column {
        flex: 0 0 50%;
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .login-page-container .image-column img {
        width: 100%;
        height: auto;
        display: block;
    }

    .login-page-container .image-overlay {
        position: relative;
        z-index: 1;
        padding: 5rem 4rem;
        height: 100%;
        display: flex;
        flex-direction: column;
        background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.5));
    }

    .login-page-container .brand-badge {
        background: #facc15;
        color: #000;
        display: inline-block;
        padding: 0.6rem 1.2rem;
        font-weight: 800;
        font-size: 1.8rem;
        margin-bottom: 1rem;
        align-self: flex-start;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .login-page-container .image-overlay h1 {
        color: #ffffff;
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: auto;
        text-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .login-page-container .form-column {
        flex: 0 0 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: #ffffff;
    }

    .login-page-container .form-container {
        width: 100%;
        max-width: 500px;
        padding: 2rem;
    }

    .login-page-container .form-container h2 {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 8px;
        color: #111111;
        letter-spacing: -0.5px;
    }

    .login-page-container .form-container p.subtitle {
        color: #888888;
        font-size: 13px;
        font-weight: 500;
        margin-bottom: 65px; /* Increased spacing to match reference */
    }

    .login-page-container .mobile-input-group {
        display: flex;
        align-items: center;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        transition: border-color 0.3s;
    }

    .login-page-container .mobile-input-group:focus-within {
        border-color: #42a2a2;
    }

    .login-page-container .country-code {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 14px 10px 14px 15px;
        font-weight: 500;
        color: #333;
        font-size: 14px;
        background: transparent;
    }

    .login-page-container .country-code img {
        width: 20px;
        height: auto;
    }

    .login-page-container .form-control {
        width: 100%;
        padding: 14px 15px 14px 5px;
        background: transparent;
        border: none;
        font-size: 14px;
        font-weight: 500;
        color: var(--text-main);
        outline: none;
    }

    .login-page-container .form-control::placeholder {
        color: #9ca3af;
    }

    .login-page-container .btn-continue {
        width: 100%;
        padding: 15px;
        background: #e5e7eb;
        color: #9ca3af;
        border: none;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 700;
        margin-top: 5px;
        transition: all 0.3s;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .login-page-container form:valid .btn-continue {
        background: #42a2a2;
        color: #ffffff;
        cursor: pointer;
    }
    
    .login-page-container form:valid .btn-continue:hover {
        background: #388e8e;
    }

    .login-page-container .divider {
        display: flex;
        align-items: center;
        text-align: center;
        margin: 30px 0;
        color: var(--text-muted);
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .login-page-container .divider::before,
    .login-page-container .divider::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid #e5e7eb;
    }

    .login-page-container .divider span {
        padding: 0 1rem;
        color: #000000;
    }

    .login-page-container .social-login {
        display: flex;
        gap: 1rem;
        margin-bottom: 3rem;
    }

    .login-page-container .btn-social {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.6rem;
        padding: 12px;
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 500;
        color: #374151;
        cursor: pointer;
        transition: all 0.2s;
    }

    .login-page-container .btn-social:hover {
        background: var(--bg-light);
        border-color: #d1d5db;
    }

    .login-page-container .btn-social img {
        width: 18px;
        height: 18px;
    }

    .login-page-container .terms {
        text-align: center;
        font-size: 13px;
        color: #111111;
        line-height: 1.6;
        font-weight: 400;
    }

    .login-page-container .terms a {
        color: #0ea5e9;
        text-decoration: none;
        font-weight: 600;
    }
    
    .login-page-container .terms a:hover {
        text-decoration: underline;
    }

    .login-page-container .error-message {
        color: #dc2626;
        font-size: 14px;
        margin-bottom: 1.5rem;
        background: #fef2f2;
        padding: 1rem;
        border-radius: 4px;
        border: 1px solid #fee2e2;
    }

    /* Responsive */
    @media (max-width: 900px) {
        .login-page-container .login-wrapper {
            flex-direction: column;
        }
        .login-page-container .image-column {
            flex: none;
            height: 380px;
            min-height: 380px;
            position: relative;
        }
        .login-page-container .image-column img {
            height: 100%;
            object-fit: cover;
            object-position: center top;
        }
        .login-page-container .form-column {
            flex: none;
            padding: 3rem 1.5rem;
            margin-top: -40px;
            border-radius: 30px 30px 0 0;
            background: #ffffff;
            position: relative;
            z-index: 10;
            box-shadow: 0 -5px 15px rgba(0,0,0,0.05); /* subtle shadow to emphasize overlap */
        }
    }
</style>

<div class="login-page-container">
    <main class="main-content">
        <div class="login-wrapper">
            
            <!-- Left Side Image -->
            <div class="image-column">
                <img src="{{ asset('images/loginecommerce.png') }}" alt="Fashion Models">
            </div>

            <!-- Right Side Form -->
            <div class="form-column">
                <div class="form-container">
                    <h2>Login / Signup</h2>
                    <p class="subtitle">Join us now to be a part of DE LUNEH family.</p>

                    @if ($errors->any())
                        <div class="error-message">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Login Form -->
                    <form id="login-form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mobile-input-group">
                            <input class="form-control" type="email" name="email" placeholder="Enter Email Address" required autofocus style="padding-left: 15px;">
                        </div>
                        <div class="mobile-input-group" style="margin-bottom: 1rem;">
                            <input class="form-control" type="password" name="password" placeholder="Enter Password" required style="padding-left: 15px;">
                        </div>
                        <div style="text-align: center; margin-bottom: 1.5rem;">
                            <a href="javascript:void(0)" onclick="toggleForm('signup')" style="font-size: 13px; color: #42a2a2; font-weight: 600; text-decoration: none;">Don't have an account? Sign up</a>
                        </div>
                        
                        <button type="submit" class="btn-continue">LOGIN</button>
                    </form>

                    <!-- Signup Form -->
                    <form id="signup-form" action="{{ route('register') }}" method="POST" style="display: none;">
                        @csrf
                        <div class="mobile-input-group">
                            <input class="form-control" type="text" name="full_name" placeholder="Full Name" required style="padding-left: 15px;" value="{{ old('full_name') }}">
                        </div>
                        <div class="mobile-input-group">
                            <input class="form-control" type="email" name="email" placeholder="Enter Email Address" required style="padding-left: 15px;" value="{{ old('email') }}">
                        </div>
                        <div class="mobile-input-group">
                            <input class="form-control" type="password" name="password" placeholder="Enter Password" required style="padding-left: 15px;">
                        </div>
                        <div class="mobile-input-group" style="margin-bottom: 1rem;">
                            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required style="padding-left: 15px;">
                        </div>
                        <div style="display:none;"><input type="checkbox" name="terms" checked></div>
                        <div style="text-align: center; margin-bottom: 1.5rem;">
                            <a href="javascript:void(0)" onclick="toggleForm('login')" style="font-size: 13px; color: #42a2a2; font-weight: 600; text-decoration: none;">Already have an account? Login</a>
                        </div>
                        
                        <button type="submit" class="btn-continue">SIGN UP</button>
                    </form>

                    <script>
                        function toggleForm(formName) {
                            if (formName === 'signup') {
                                document.getElementById('login-form').style.display = 'none';
                                document.getElementById('signup-form').style.display = 'block';
                                document.querySelector('.form-container h2').innerText = 'Signup';
                            } else {
                                document.getElementById('login-form').style.display = 'block';
                                document.getElementById('signup-form').style.display = 'none';
                                document.querySelector('.form-container h2').innerText = 'Login';
                            }
                        }

                        // If there are validation errors from registration, keep the signup form open
                        @if ($errors->has('full_name') || $errors->has('password_confirmation') || ($errors->any() && old('full_name')))
                            toggleForm('signup');
                        @endif
                    </script>

                    <div class="divider">
                        <span>OR</span>
                    </div>

                    <div class="social-login">
                        <button type="button" class="btn-social">
                            <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google"> Google
                        </button>
                        <button type="button" class="btn-social">
                            <img src="https://www.svgrepo.com/show/475647/facebook-color.svg" alt="Facebook"> Facebook
                        </button>
                    </div>

                    <p class="terms">
                        By creating an account or logging in, you agree with DE LUNEH's <br>
                        <a href="#">T&C</a> and <a href="#">Privacy Policy</a>
                    </p>
                </div>
            </div>

        </div>
    </main>
</div>

@include('website.footer')

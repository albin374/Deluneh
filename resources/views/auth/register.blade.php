<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Create an Account</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4F46E5;
            --primary-hover: #4338CA;
            --background: #f8fafc;
            --surface: #ffffff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --border: #e2e8f0;
            --error-bg: #fef2f2;
            --error-border: #fecaca;
            --error-text: #991b1b;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        body {
            background-color: var(--background);
            color: var(--text-main);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 2rem 1rem;
            background-image: linear-gradient(rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.8)), url('{{ asset("images/register page.png") }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .auth-container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid #ffffff;
            padding: 3rem;
            border-radius: 24px;
            width: 100%;
            max-width: 700px;
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.08);
            animation: slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        @keyframes slideUp {
            to { opacity: 1; transform: translateY(0); }
        }

        .auth-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .auth-header h2 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--text-main);
        }

        .grid-row {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .grid-row-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        @media (max-width: 640px) {
            .grid-row, .grid-row-2 {
                grid-template-columns: 1fr;
            }
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-main);
        }

        .form-control {
            width: 100%;
            padding: 0.85rem 1.2rem;
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 12px;
            color: var(--text-main);
            font-size: 1rem;
            transition: all 0.3s ease;
            outline: none;
            box-shadow: 0 1px 2px rgba(0,0,0,0.02) inset;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin: 1.5rem 0 2rem;
        }

        .checkbox-group input {
            width: 20px;
            height: 20px;
            accent-color: var(--primary);
            margin-right: 12px;
            cursor: pointer;
        }

        .btn-submit {
            width: 100%;
            padding: 1.1rem;
            background: linear-gradient(135deg, var(--primary), #6366f1);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px 0 rgba(79, 70, 229, 0.25);
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(79, 70, 229, 0.35);
            background: linear-gradient(135deg, var(--primary-hover), var(--primary));
        }

        .auth-footer {
            margin-top: 2rem;
            text-align: center;
            color: var(--text-muted);
        }

        .auth-footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }

        .error-box {
            background-color: var(--error-bg);
            border: 1px solid var(--error-border);
            color: var(--error-text);
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="auth-header">
            <h2>Create an Account</h2>
        </div>
        
        @if ($errors->any())
            <div class="error-box">
                <ul style="padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            
            <div class="grid-row">
                <div class="form-group">
                    <label>First Name *</label>
                    <input class="form-control" type="text" name="first_name" value="{{ old('first_name') }}" required>
                </div>
                <div class="form-group">
                    <label>Middle Name</label>
                    <input class="form-control" type="text" name="middle_name" value="{{ old('middle_name') }}">
                </div>
                <div class="form-group">
                    <label>Last Name *</label>
                    <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}" required>
                </div>
            </div>

            <div class="grid-row-2">
                <div class="form-group">
                    <label>Phone Number *</label>
                    <input class="form-control" type="tel" name="phone_number" value="{{ old('phone_number') }}" required>
                </div>
                <div class="form-group">
                    <label>Email Address *</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" required>
                </div>
            </div>

            <div class="form-group">
                <label>Password *</label>
                <input class="form-control" type="password" name="password" required>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms" style="color: var(--text-main);">I agree to the <a href="#" style="color: var(--primary);">Terms and Conditions</a> *</label>
            </div>

            <button class="btn-submit" type="submit">Register & Send OTP</button>
        </form>

        <div class="auth-footer">
            Already have an account? <a href="{{ route('login') }}">Sign in</a>
        </div>
    </div>
</body>
</html>

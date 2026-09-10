<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #10b981;
            --primary-hover: #059669;
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
            background-image: linear-gradient(rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.8)), url('{{ asset("images/login-bg.jpg") }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .auth-container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(16px);
            border: 1px solid #ffffff;
            padding: 3rem;
            border-radius: 24px;
            width: 100%;
            max-width: 440px;
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.08);
            text-align: center;
            animation: slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .auth-header h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-main);
        }

        .auth-header p {
            color: var(--text-muted);
            margin-bottom: 2.5rem;
            line-height: 1.5;
        }

        .otp-input {
            width: 100%;
            padding: 1rem;
            font-size: 2rem;
            letter-spacing: 12px;
            text-align: center;
            background: #ffffff;
            border: 2px solid var(--border);
            border-radius: 12px;
            color: var(--text-main);
            outline: none;
            transition: all 0.3s;
            margin-bottom: 2rem;
            box-shadow: 0 1px 2px rgba(0,0,0,0.02) inset;
        }

        .otp-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.1);
        }

        .btn-submit {
            width: 100%;
            padding: 1.1rem;
            background: linear-gradient(135deg, var(--primary), #34d399);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px 0 rgba(16, 185, 129, 0.25);
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.35);
            background: linear-gradient(135deg, var(--primary-hover), var(--primary));
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
            <h2>Email Verification</h2>
            <p>We've sent a 6-digit OTP code to your email. Please enter it below to verify your account.</p>
        </div>
        
        @if ($errors->any())
            <div class="error-box">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('otp.verify') }}" method="POST">
            @csrf
            <input class="otp-input" type="text" name="otp" maxlength="6" placeholder="------" required autofocus>
            <button class="btn-submit" type="submit">Verify OTP</button>
        </form>
    </div>
</body>
</html>

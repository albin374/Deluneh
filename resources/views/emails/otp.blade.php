<!DOCTYPE html>
<html>
<head>
    <title>Your OTP Code</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center; padding: 40px;">
    <h2>Welcome to Our Platform!</h2>
    <p>Please use the following OTP code to verify your email address:</p>
    <div style="font-size: 24px; font-weight: bold; padding: 20px; background-color: #f3f4f6; display: inline-block; border-radius: 8px; margin: 20px 0;">
        {{ $otp }}
    </div>
    <p>This code will expire in 10 minutes.</p>
    <p>If you did not request this, please ignore this email.</p>
</body>
</html>

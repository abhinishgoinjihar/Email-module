<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful Login to {{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f0f4ff, #e6e9ff);
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(90deg, #007bff, #6610f2);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 1.8rem;
            font-weight: 600;
            animation: fadeIn 1s ease-in;
        }

        .content {
            padding: 30px;
            color: #333;
        }

        .content p {
            margin-bottom: 1.5rem;
            font-size: 1rem;
        }

        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            background: linear-gradient(90deg, #007bff, #6610f2);
            color: white !important;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #0056b3, #520dc2);
            transform: translateY(-2px);
        }

        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 0.9rem;
            color: #666;
            border-top: 1px solid #e9ecef;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
            font-weight: 600;
        }

        .footer a:hover {
            color: #0056b3;
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            .header h1 {
                font-size: 1.5rem;
            }

            .content {
                padding: 20px;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Hello, {{ $name }}!</h1>
        </div>
        <div class="content">
            <p class="lead">You have successfully logged in to your
                <strong>{{ config('app.name', 'Laravel') }}</strong> account!</p>
            <p>We're excited to have you back. Dive into your dashboard to explore new features, manage your settings,
                or continue where you left off.</p>
            <p class="text-center">
                <a href="{{ route('dashboard') }}" class="btn-primary">Go to Dashboard</a>
            </p>
            <p>If you didn't initiate this login or suspect any unauthorized activity, please contact our support team
                immediately.</p>
        </div>
        <div class="footer">
            <p>Best regards,<br>Your {{ config('app.name', 'Laravel') }} Team</p>
            <p><a href="mailto:support@{{ config('app.name', 'laravel') }}.com">Contact Support</a> | <a
                    href="{{ route('welcome') }}">Visit Our Website</a></p>
        </div>
    </div>
</body>

</html>

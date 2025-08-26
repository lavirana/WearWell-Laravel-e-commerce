<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }
        .success-card {
            max-width: 500px;
            margin: 100px auto;
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            text-align: center;
            padding: 40px;
            background: #fff;
        }
        .success-icon {
            font-size: 70px;
            color: #28a745;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="success-card">
    <div class="success-icon">✅</div>
    <h2 class="text-success">Order Placed Successfully!</h2>
    <p class="text-muted mt-2">
        Thank you for your purchase. Your items will be shipped soon.  
        A confirmation email has been sent to your inbox 📩.
    </p>

    <div class="mt-4">
        <a href="{{ url('/') }}" class="btn btn-primary rounded-pill px-4">🏠 Back to Home</a>
        <a href="{{ route('checkout') }}" class="btn btn-outline-success rounded-pill px-4">🛒 Shop More</a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

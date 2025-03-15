<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }
        .login-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-primary {
            border-radius: 20px;
            background-color: #667eea;
            border: none;
        }
        .btn-primary:hover {
            background-color: #5563c1;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .social-icons a {
            display: inline-block;
            margin: 0 10px;
            font-size: 18px;
            color: #667eea;
            transition: 0.3s;
        }
        .social-icons a:hover {
            color: #764ba2;
        }
    </style>
</head>
<body>

<div class="login-container">
    <!-- <img src="{{ asset('images/educationtoday.webp') }}" alt="Admin Logo" class="img-fluid mb-3" width="100"> -->
    <h2>Admin Login</h2>

    @if ($errors->any())
        <p class="error-message">{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Admin Email" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>

    <!-- <div class="social-icons mt-3">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-google"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div> -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>










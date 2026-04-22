<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .user-info {
            background: #e3f2fd;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: #2196F3;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            margin-right: 10px;
        }

        .btn:hover {
            background: #1976D2;
        }

        .logout {
            background: #f44336;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Selamat Datang di Dashboard, {{ Auth::user()->name }}!</h1>

        <div class="user-info">
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        </div>

        <a href="{{ route('products.index') }}" class="btn">Kelola Produk</a>

        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn logout" onclick="return confirm('Yakin logout?')">Logout</button>
        </form>
    </div>
</body>

</html>
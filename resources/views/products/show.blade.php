<!DOCTYPE html>
<html>

<head>
    <title>Detail Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
        }

        .detail {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            margin-right: 10px;
            border-radius: 4px;
        }

        .btn-edit {
            background: #4CAF50;
            color: white;
        }

        .btn-delete {
            background: #f44336;
            color: white;
        }

        .btn-back {
            background: #2196F3;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Detail Produk</h1>

    <div class="detail">
        <p><span class="label">Nama:</span> {{ $product->nama_produk }}</p>
        <p><span class="label">Kode:</span> {{ $product->kode_produk }}</p>
        <p><span class="label">Stok:</span> {{ $product->stok }}</p>
        <p><span class="label">Harga:</span> Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
        <p><span class="label">Dibuat:</span> {{ $product->created_at->format('d/m/Y H:i') }}</p>
    </div>

    <a href="{{ route('products.edit', $product) }}" class="btn btn-edit">Edit</a>
    <a href="{{ route('products.index') }}" class="btn btn-back">Kembali</a>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 20px auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: #45a049;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <h1>Edit Produk</h1>

    @if ($errors->any())
    <div style="color: red; background: #f8d7da; padding: 10px; margin-bottom: 20px;">
        @foreach ($errors->all() as $error)
        <p class="error">{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" value="{{ old('nama_produk', $product->nama_produk) }}" required>
        </div>
        <div class="form-group">
            <label>Kode Produk</label>
            <input type="text" name="kode_produk" value="{{ old('kode_produk', $product->kode_produk) }}" required>
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" value="{{ old('stok', $product->stok) }}" required>
        </div>
        <div class="form-group">
            <label>Harga (Rp)</label>
            <input type="number" name="harga" value="{{ old('harga', $product->harga) }}" required>
        </div>
        <button type="submit">Update</button>
        <a href="{{ route('products.index') }}" style="margin-left: 10px; text-decoration: none; color: #666;">Batal</a>
    </form>
</body>

</html>
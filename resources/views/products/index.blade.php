<!DOCTYPE html>
<html>
<head>
    <title>Data Product</title>
</head>
<body>

    <h1>Data Product</h1>

    <a href="{{ route('products.create') }}">+ Tambah Product</a>

    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>

        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
            <td>{{ $product->stock }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queen Gadget Galeri</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #ffe4e1;
        }
        h1 {
            color: #d5006d;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #f4a6b7;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #ff6f91;
            color: white;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #ffeef8;
        }
        tr:hover {
            background-color: #ffccdf;
        }
        .success-message {
            color: #d5006d;
            text-align: center;
            margin-bottom: 20px;
        }
        .no-products {
            text-align: center;
            color: #888;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Queen Gadget Galeri</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Create</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @if ($Products->isEmpty())
                <tr>
                    <td colspan="7" class="no-products">No products found</td>
                </tr>
            @else
                @foreach ($Products as $Product)
                <tr>
                    <td>{{ $Product->id }}</td>
                    <td>{{ $Product->nama }}</td>
                    <td>{{ $Product->harga }}</td>
                    <td>{{ $Product->stok }}</td>
                    <td>{{ $Product->deskripsi }}</td>
                    <td>{{ $Product->created_at }}</td>
                    <td>{{ $Product->updated_at }}</td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>

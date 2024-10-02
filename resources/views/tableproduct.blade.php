<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #ffe6f2;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #d5006d;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #d5006d;
        }

        th {
            background-color: #ff80ab;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        tr:nth-child(even) {
            background-color: #f8bbd0;
        }

        tr:hover {
            background-color: #df6fa9;
        }

        button {
            background-color: #d5006d;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #c51162;
            transform: translateY(-2px);

        .action-buttons {
            display: flex;
            gap: 5px; }
        }
    </style>
</head>
<body>

    <h2>Daftar Produk</h2>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Products as $Product)
            <tr>
                <td>{{ $Product->nama }}</td>
                <td>{{ $Product->harga }}</td>
                <td>{{ $Product->stok }}</td>
                <td>{{ $Product->deskripsi }}</td>
                <td class="action-buttons">
                    <form action="/products/{{ $Product->id }}/edit" method="GET" style="display:inline;">
                        <button type="submit">Edit</button>
                    </form>
                    <form action="/products/{{ $Product->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

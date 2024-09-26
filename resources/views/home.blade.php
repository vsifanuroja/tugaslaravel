<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUEEN</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f2;
            font-family: 'Quicksand', sans-serif; /* Menggunakan font Quicksand */
        }

        #arunika {
            color: #ff69b4;
            text-align: center;
            margin-top: 50px;
            font-size: 2.5em;
        }

        .nayanika {
            color: #fff;
            font-size: 20px;
            background-color: #d692b6;
            border-radius: 10px;
            padding: 20px;
            width: 60%;
            margin: 20px auto;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        a[target] {
            color: #ffffff;
            text-decoration: underline;
        }

        table {
            width: 80%;
            margin: 40px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: center;
            transition: background-color 0.3s;
        }

        th {
            background-color: #ff69b4;
            color: white;
            font-size: 1.2em;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ffccf2;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #d692b6;
            color: white;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <h1 id="arunika">WELCOME TO MY WORLD</h1>

    <div class="nayanika">
        <p>Dalam senja yang sunyi, temukan keindahan yang tak terduga dalam keheningan yang mendalam. <a
                href="https://www.instagram.com/racarnation" target="_blank">racarnation.com</a>
        </p>
    </div>

    <table id="booksTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['author'] }}</td>
                    <td>{{ $book['year'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <footer>
        <p>&copy; 2024 vera sifa nuroja. All rights reserved.</p>
        <p>Follow us on <a href="https://www.instagram.com/racarnation" target="_blank" style="color: white; text-decoration: underline;">Instagram</a></p>
    </footer>

</body>

</html>

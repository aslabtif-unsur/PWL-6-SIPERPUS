<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Buku</title>
</head>

<body>
    <h1 style="text-align: center;">Data Buku</h1>
    <p style="text-align: center;">Laporan Data Buku Tahun 2024</p>
    <br />
    <table border="1" style="border-collapse: collapse; align-content: center;">
        <thead>
            <tr>
                <th>NO</th>
                <th>JUDUL</th>
                <th>PENULIS</th>
                <th>TAHUN</th>
                <th>PENERBIT</th>
                <th>COVER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>
                        @if ($book->cover !== null)
                            <img src="{{ public_path('storage/cover_buku/' . $book->cover) }}" width="80px" />
                        @else
                            [Gambar tidak tersedia]
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
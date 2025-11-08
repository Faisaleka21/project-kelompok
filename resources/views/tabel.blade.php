<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba Tabel</title>
</head>
<body>
    <h1>Coba Tabel</h1>
    <form action="/biodata" method="post">
        @csrf
        <p>Masukkan Nama : </p><input type="text" name="nama" placeholder="Nama">
        <p>Masukkan Alamat : </p><input type="text" name="alamat" placeholder="Alamat">
        <button type="submit">Tambah</button>
    </form>

    
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
    @foreach ($biodata as $bio => $value)
        <tr>
            <td>{{ $bio + 1 }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->alamat }}</td>
        </tr>   
    @endforeach
    </table>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Kelas</h1>
    <form action="{{url('mahasiswa/store')}}" method='POST'>
    @csrf
        <input type="text" name="nama" placeholder="Nama"><br>
        <input type="text" name="nim" placeholder="NIM"><br>
        <input type="text" name="no_telp" placeholder="No Telp"><br>
        <button type="submit">TAMBAH</button>
    </form>
</body>
</html>
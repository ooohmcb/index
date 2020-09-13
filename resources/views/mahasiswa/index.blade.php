<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>tes</h1>
    <a href="{{url('mahasiswa/create')}}">Form Kelas</a>
    <table>
    @foreach($mahasiswa as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nim}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->no_telp}}</td>
            <td>
                <form action="{{url('mahasiswa/delete/'.$item->id)}}" method='POST'>
                @csrf
                @method('delete')
                <button type="submit">HAPUS</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
</body>
</html>
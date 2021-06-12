<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rak Buku</title>
    <style>
        table{
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 2px solid #6435c0;
        }
        thead{
            background-color: black;
            color:white;
        }
        th, td{
            text-align: left;
            padding: 10px;
        }
        tr:nth-child(even) {background-color: darkgrey}
        
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($rak_buku as $r)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$r->judul}}</td>
                <td>{{$r->jenis_buku}}</td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3>
        <a href="">Tambah Data</a>
    </h3>
</body>
</html>
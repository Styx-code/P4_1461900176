<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Aktivitas 4</title>
    <style>
        body{
            background-color: #f2f2f2;
        }
        h1,h2,h3{
            text-align: center;
        }
        .tombol{
            margin-right: 5%;
            background-color: black;
            color: aliceblue;
            padding: 12px 20px;
            border-radius: 20px;
            cursor: pointer;
            display: inline-block;
            align-items: center;
            justify-content: center;
            
        }
        .tombol:hover{
            background-color: darkslategrey;
            color: black;
            text-decoration: none;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    
    <h1>Tugas Aktivitas 4</h1>
    <h2>PTW-Pagi</h2>
    <h3>Adistya Oktaviano - 1461900176</h3>
        <hr>
    <div class="tombol">
        <a href="{{url('/buku0176')}}">Data Buku</a>
    </div>
    <div class="tombol">
        <a href="{{url('/jenis0176')}}">Kategori Buku</a>
    </div>
    <div class="tombol">
        <a href="{{url('/rak0176')}}">Rak Buku</a>
    </div>
    <div class="tombol">
        <a href="{{url('/user0176')}}">Data User</a>
    </div>
</body>
</html>
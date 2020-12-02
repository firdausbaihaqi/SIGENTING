<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Selamat datang {{ $auth->nama }} 
    <br>
    Nama Anak anda: 
    <ol> 
        @foreach($anak as $item) 
            <li> {{ $item->nama }} <a href="{{route('ibu.data.anak', $item->id)}} ">Detail</a> </li> 
        @endforeach 
    </ol>
</body>
</html>
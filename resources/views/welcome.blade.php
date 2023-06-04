<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Daftar Makanan</h1>

    <ul>
        @foreach($makanan as $makanan)
        <img src="{{$makanan->gambar}}" width="100" />
        <li>{{ $makanan->nama }} - Rp. {{ number_format($makanan->hharga) }}</li>
        @endforeach
    </ul>
</body>
</html>
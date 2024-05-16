<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        4 trang giong nhau
    </header>
    <main>
    4 maine khách nhau -Product-detail {{$slug}}
    @foreach ( $danhsach as $item )
    <h2>{{$item}}</h2>

    @endforeach
    </main>
    <footer> 4 trang giong nhau</footer>
</body>
</html>
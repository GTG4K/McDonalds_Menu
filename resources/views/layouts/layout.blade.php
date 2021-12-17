<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/layout.css">
    @yield('css')
    <title>Document</title>
</head>
<body>
    <header>
        <a class="homebtn" href="/">Home</a>
        <img src="/img/mcdoooonalds.png" alt="">
        <a class="adminbtn" href="/products/create">Admin</a>
    </header>

    @yield('content')

    <footer>
        <p><b> ©2020 McDonald's. ყველა უფლება დაცულია, მემგონი.</b></p> 
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>WebApp</title>
</head>
<style>
    body {
        font-size: 14pt;
        font-family: Verdana, sans-serif;;
        margin: 0;
        padding: 0;
        background-color: #DDD;
    }
    .container {
        margin: 30px;
    }
</style>
<body>
    @include('layouts.header')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.footer')
</body>
</html>
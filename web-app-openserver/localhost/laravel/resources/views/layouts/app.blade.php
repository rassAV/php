<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>WebApp</title>
</head>
<body>
    @include('layouts.header')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.footer')
</body>
</html>
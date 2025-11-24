<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Load tailwind --}}
    
</head>
<body>
    
    {{-- Header --}}
    @include('layouts.header')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
     @include('layouts.footer')
</body>
</html>
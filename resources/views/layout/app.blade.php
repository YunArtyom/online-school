<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('projectRoot/assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="@yield('css')">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Vela+Sans+GX:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('projectRoot/assets/css/poopUP/poopUp1.css') }}">
    <link rel="stylesheet" href="{{ asset('projectRoot/assets/css/poopUP/poopUp2.css') }}">
    <link rel="stylesheet" href="{{ asset('projectRoot/assets/css/poopUP/poopUp3.css') }}">
    <link rel="stylesheet" href="{{ asset('projectRoot/assets/css/performance.css') }}">
</head>

<body>
    @yield('content')
    <script src="{{ asset('projectRoot/assets/js/sidebar.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>

    <title>
        @yield('title','Verano')
    </title>

    @livewireStyles


</head>

<body>

    @livewire('navigation')

    @yield('content')

    @stack('css')
    @yield('css')

    @stack('js')
    @yield('js')

    @livewireScripts

</body>

</html>

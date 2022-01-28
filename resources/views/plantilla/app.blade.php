<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @livewireStyles

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>


    <title>
        @yield('title','Verano')
    </title>



</head>

<body>

    @livewire('navigation')

    @yield('content')

    @stack('css')
    @yield('css')

    @livewireScripts
    @stack('js')
    @yield('js')

</body>

</html>

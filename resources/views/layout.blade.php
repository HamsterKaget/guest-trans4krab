<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register TransForKr4b</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
    @stack('css')

</head>
<body class="dark bg-[#000d25] bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
    @yield('content')


    <script src="/init.js"></script>
    @stack('js')
</body>
</html>

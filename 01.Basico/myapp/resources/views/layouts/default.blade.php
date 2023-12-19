<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
    <title>@yield('title', 'Meu Título')</title>
</head>
<body>
    @section('sidebar')
        <div>
            <nav>
                Sidebar
            </nav>
        </div>
    @show

    @yield('content')

    <script scr="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
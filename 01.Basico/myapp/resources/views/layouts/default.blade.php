<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu Título')</title>
</head>
<body>
    <h1>Meu layout</h1>

    @section('sidebar')
        <div>
            <nav>
                Sidebar
            </nav>
        </div>
    @show

    @yield('content')
</body>
</html>
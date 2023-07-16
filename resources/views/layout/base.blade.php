<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>url_shortner</title>

    <!-- le chemin pour acceder un ficher css qui se trouve dans le dossier public -->
    
    <link rel="stylesheet"  href="{{ asset('css/style.css')}}">
</head>
<body>
    <div class="wraper">    <h1>Url Shortner!!!!!!!! </h1>
        @yield('content')
    </div>
</body>
</html>
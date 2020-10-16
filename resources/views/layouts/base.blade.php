<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="@yield('style')">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/add">Ajout</a></li>
            <li><a href="/show">Liste</a></li>
        </ul>
        <h1>The Statues</h1>
    </header> 
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Copyright © GuARdIaN</p>
    </footer>
</body>

</html>
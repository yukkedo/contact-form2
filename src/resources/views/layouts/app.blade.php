<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    @yield('css')
</head>

<body>
    <header class="header">
        <h1 class="header__title">FashionablyLate</h1>
        @yield('link')
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>
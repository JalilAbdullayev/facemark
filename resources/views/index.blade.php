<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <meta name="author" content="@yield('author')"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:image" content="@yield('image')"/>
    <meta property="og:site_name" content=""/>
    <meta name="twitter:title" content="@yield('title')"/>
    <meta name="twitter:description" content="@yield('description')"/>
    <meta name="twitter:image" content="@yield('image')"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:image:alt" content=""/>
    <title>
        @yield('title', 'Facemark')
    </title>
    @vite(['node_modules/flyonui/flyonui.js', 'resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
</body>
</html>

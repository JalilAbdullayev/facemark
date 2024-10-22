<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="keywords" content="@yield('keywords', $settings->keywords)"/>
    <meta name="description" content="@yield('description', $settings->description)"/>
    <meta name="author" content="@yield('author', $settings->author)"/>
    <meta property="og:title" content="@yield('title', $settings->title)"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:image" content="@yield('image', asset('storage/' . $settings->logo))"/>
    <meta property="og:site_name" content="{{ $settings->title }}"/>
    <meta name="twitter:title" content="@yield('title', $settings->title)"/>
    <meta name="twitter:description" content="@yield('description', $settings->description)"/>
    <meta name="twitter:image" content="@yield('image', asset('storage/' . $settings->logo))"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:image:alt" content="{{ $settings->title }}"/>
    <title>
        @yield('title', $settings->title)
    </title>
    @vite(['node_modules/flyonui/flyonui.js', 'resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
@yield('content')
</body>
</html>

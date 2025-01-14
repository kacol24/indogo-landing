<!DOCTYPE html>
<html lang="{{ $page->language ?? 'id' }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    @stack('after_styles')
</head>
<body class="antialiased font-gotham-rounded">
<header class="fixed top-0 start-0 w-full p-4 md:py-14 md:px-24 z-10">
    <a href="/" class="inline-block">
        <img src="/assets/images/babygo/logo-babygo-outline.png" alt="logo babygo" class="h-auto max-w-full">
    </a>
</header>
@yield('content')

<script src="{{ mix('js/main.js', 'assets/build') }}"></script>
@stack('after_scripts')
</body>
</html>

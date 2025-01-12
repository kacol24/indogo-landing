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
<body class="antialiased">
@yield('content')

<script src="{{ mix('js/main.js', 'assets/build') }}"></script>
@stack('after_scripts')
</body>
</html>

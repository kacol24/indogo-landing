<!DOCTYPE html>
<html lang="{{ $page->language ?? 'id' }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="favicon.svg"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
    <meta name="apple-mobile-web-app-title" content="Diaper Bag | BabyGo"/>
    <link rel="manifest" href="site.webmanifest"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.2.4/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css">
    <link rel="stylesheet" href="../{{ mix('/css/main.css', 'assets/build') }}">
    @stack('after_styles')
    <base href="{{ $page->baseUrl }}">
</head>
<body class="antialiased font-gotham-rounded text-body">
@yield('content')
<div class="fixed z-30 bottom-4 right-4">
    <a href="https://wa.me/{{ $page->whatsapp_no }}" target="_blank">
        <img src="assets/images/icons/icon-whatsapp-opaque.png" alt="icon whatsapp" class="w-12">
    </a>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11.2.4/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.js"></script>
<script>
    AOS.init();
</script>
@stack('after_scripts')
</body>
</html>

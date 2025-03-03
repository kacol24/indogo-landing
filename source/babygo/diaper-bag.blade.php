@extends('_layouts.master')

@section('content')
    <section class="gradient-decoration">
        <img src="/assets/images/babygo/diaper-bag/hero-banner-mobile.jpeg" alt="hero banner"
             class="block h-auto w-full max-w-full md:hidden">
        <img src="/assets/images/babygo/diaper-bag/hero-banner.jpeg" alt="hero banner"
             class="hidden h-auto w-full max-w-full md:block">
    </section>
    <section id="intro" title="Intro" class="mt-10 md:mt-20">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="mb-2 text-3xl font-bold font-gotham-rounded text-stroke md:md-6 md:text-8xl">
                    Diaper Bag Premium
                </h1>
                <div class="text-lg font-bold text-body md:text-5xl">
                    Solusi Kebutuhan Orang Tua Modern
                </div>
                <div class="relative mt-10 flex items-center justify-center text-center line-decoration md:mt-14">
                    <div class="relative z-10 mx-auto inline-block whitespace-nowrap rounded-full px-4 py-2 text-xl font-bold uppercase text-white shadow bg-gradient md:text-6xl">
                        Komitmen Babygo
                    </div>
                </div>
                <div class="mt-6 text-xl font-bold uppercase text-primary md:mt-8 md:text-6xl">
                    "Making Parent's Life Easier"
                </div>
                <div class="mx-auto mt-2 text-base max-w-[800px] text-body md:mt-3 md:text-4xl">
                    babyGo hadir dengan produk-produk
                    yang memudahkan kegiatan orang tua
                    sehari-hari dengan si Kecil.
                </div>
            </div>
        </div>
    </section>
    <section id="features" title="Features" class="mt-4 mb-20">
        <div class="container mx-auto px-4">
            <div class="gap-10 md:columns-3">
                <div class="mb-4 rounded-lg p-4 shadow-lg md:mb-0">
                    <img src="/assets/images/babygo/diaper-bag/feature-strong.jpeg" alt=""
                         class="h-auto max-w-full rounded-lg w-100">
                    <div class="mt-4 text-center">
                        <div class="flex items-center justify-center">
                            <img src="/assets/images/babygo/icons/icon-strong.png" alt="" class="max-w-full h-auto w-8">
                            <div class="text-2xl font-bold uppercase text-primary md:text-3xl ml-2">
                                Strong
                            </div>
                        </div>
                        <div>
                            Material yang kuat & tahan lama
                        </div>
                    </div>
                </div>
                <div class="mb-4 rounded-lg p-4 shadow-lg md:mb-0">
                    <img src="/assets/images/babygo/diaper-bag/feature-smart.jpeg" alt=""
                         class="h-auto max-w-full rounded-lg w-100">
                    <div class="mt-4 text-center">
                        <div class="flex items-center justify-center">
                            <img src="/assets/images/babygo/icons/icon-smart.png" alt="" class="max-w-full h-auto w-8">
                            <div class="text-2xl font-bold uppercase text-primary md:text-3xl ml-2">
                                Smart
                            </div>
                        </div>
                        <div>
                            Fitur yang memudahkan orang tua ketika bepergian
                        </div>
                    </div>
                </div>
                <div class="rounded-lg p-4 shadow-lg">
                    <img src="/assets/images/babygo/diaper-bag/feature-simple.jpeg" alt=""
                         class="h-auto max-w-full rounded-lg w-100">
                    <div class="mt-4 text-center">
                        <div class="text-xl font-bold uppercase text-primary md:text-2xl">
                            Simple
                        </div>
                        <div>
                            Unisex: Dapat dipakai Ibu maupun Ayah
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-8 md:mt-32 mb-20">
        <div class="container mx-auto px-4">
            <div class="relative flex items-center justify-center text-center md:mt-14 mb-4">
                <h2 class="relative z-10 mx-auto inline-block rounded-full px-4 py-2 text-lg font-bold uppercase text-white shadow bg-gradient md:text-6xl">
                    Koleksi BabyGo Diaper Bag
                </h2>
            </div>
            <div>
                <div class="swiper" id="product-swiper" style="--swiper-theme-color: var(--bbg-primary)">
                    <div class="swiper-wrapper">
                        @foreach($page->products as $product)
                            <div class="swiper-slide">
                                <div class="m-4 rounded-lg border p-3 shadow-lg border-primary">
                                    <div class="grid gap-x-20 md:grid-cols-2">
                                        <img src="{{ $product->featured_image }}" alt="{{ $product->title }}"
                                             class="h-auto w-full max-w-full rounded-lg">
                                        <div class="md:px-8 text-center mt-4">
                                            <h2 class="mb-4 font-bold text-3xl text-primary md:text-6xl">
                                                {!! $product->title !!}
                                            </h2>
                                            <div class="my-4 rounded-full px-2 bg-[#444f57] text-white inline-block font-medium md:text-xl text-base">
                                                {{ $product->dimension }}
                                            </div>
                                            @if($product->bonus)
                                                <div class="mt-4 text-center">
                                                    <img src="{{ $product->bonus->image }}"
                                                         alt="{{ $product->bonus->title }}" class="max-w-full h-auto w-80 mx-auto">
                                                </div>
                                            @endif
                                            <div class="flex items-center gap-x-8 flex-col md:flex-row mt-4">
                                                <div class="px-8 md:px-0">
                                                    <img src="{{ $product->image }}"
                                                         alt="thumbnail {{ $product->title }}"
                                                         class="h-auto w-full max-w-full">
                                                </div>
                                                <div class="flex flex-col justify-center text-lg font-gotham-book mt-2 md:mt-0">
                                                    Available in:
                                                    <div class="flex justify-center gap-x-4 mt-4">
                                                        @foreach($product->colors as $color)
                                                            <div class="size-8 md:size-12 rounded-full"
                                                                 style="background-color:{{ $color }};"></div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <section title="Testimonials" id="testimonials" class="mb-10">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="text-center line-decoration">
                    <div class="relative mx-auto inline-block whitespace-nowrap px-4 text-xl font-bold uppercase text-primary md:px-8 md:text-6xl">
                        What They Say
                        <div class="text-lg md:text-5xl">
                            About BabyGo
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper py-20 md:py-40" id="testimonial-swiper" style="--swiper-theme-color: var(--bbg-primary)">
                <div class="swiper-wrapper">
                    @foreach($page->testimonials as $testimony)
                        <div class="swiper-slide">
                            <div class="m-4 rounded-lg bg-white p-4 shadow-lg">
                                <div class="relative">
                                    <img src="{{ $testimony->image }}" alt="{{ $testimony->name }} dengan BabyGo"
                                         class="z-0 h-auto w-full max-w-full">
                                    <div class="absolute bottom-0 left-0 z-10 flex w-full items-end justify-center -mb-1">
                                        <div class="rounded-lg rounded-br-none rounded-bl-none bg-white px-4 py-1 text-sm font-bold text-primary md:text-xl">
                                            {{ $testimony->name }}
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center text-xs font-gotham-book md:text-lg mt-4">
                                    "{!! $testimony->message !!}"
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section title="Produk Lainnya" class="mb-20">
        <div class="container mx-auto px-4">
            <div class="text-center line-decoration">
                <div class="relative mx-auto inline-block whitespace-nowrap px-4 text-lg font-bold uppercase text-primary md:px-8 md:text-5xl">
                    Temukan Produk
                    <div class="text-xl md:text-6xl">
                        BabyGo Lainnya
                    </div>
                </div>
            </div>
            <div class="-mx-4 mt-10">
                <div class="flex flex-wrap justify-center gap-y-4 md:gap-y-8">
                    <div class="w-1/2 px-4 md:w-1/4">
                        <div class="flex flex-col justify-center">
                            <div class="rounded-full border-4 border-primary">
                                <img src="/assets/images/babygo/diaper-bag/products/diaper-bag.jpeg" alt=""
                                     class="h-auto w-full max-w-full rounded-full">
                            </div>
                            <div class="-mt-4 text-center">
                                <div class="inline-block rounded-full px-4 py-1 text-lg font-bold text-white bg-gradient md:text-2xl">
                                    Diaper Bag
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 px-4 md:w-1/4">
                        <div class="flex flex-col justify-center">
                            <div class="rounded-full border-4 border-primary">
                                <img src="/assets/images/babygo/diaper-bag/products/cooler-bag.jpeg" alt=""
                                     class="h-auto w-full max-w-full rounded-full">
                            </div>
                            <div class="-mt-4 text-center">
                                <div class="inline-block rounded-full px-4 py-1 text-lg font-bold text-white bg-gradient md:text-2xl">
                                    Cooler Bag
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 px-4 md:w-1/4">
                        <div class="flex flex-col justify-center">
                            <div class="rounded-full border-4 border-primary">
                                <img src="/assets/images/babygo/diaper-bag/products/organizer.jpeg" alt=""
                                     class="h-auto w-full max-w-full rounded-full">
                            </div>
                            <div class="-mt-4 text-center">
                                <div class="inline-block rounded-full px-4 py-1 text-lg font-bold text-white bg-gradient md:text-2xl">
                                    Organizer
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 px-4 md:w-1/4">
                        <div class="flex flex-col justify-center">
                            <div class="rounded-full border-4 border-primary">
                                <img src="/assets/images/babygo/diaper-bag/products/accessories.jpeg" alt=""
                                     class="h-auto w-full max-w-full rounded-full">
                            </div>
                            <div class="-mt-4 text-center">
                                <div class="inline-block rounded-full px-4 py-1 text-lg font-bold text-white bg-gradient md:text-2xl">
                                    Accessories
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 px-4 md:w-1/4">
                        <div class="flex flex-col justify-center">
                            <div class="rounded-full border-4 border-primary">
                                <img src="/assets/images/babygo/diaper-bag/products/hooks.jpeg" alt=""
                                     class="h-auto w-full max-w-full rounded-full">
                            </div>
                            <div class="-mt-4 text-center">
                                <div class="inline-block rounded-full px-4 py-1 text-lg font-bold text-white bg-gradient md:text-2xl">
                                    Hooks
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section title="Links" class="mb-20">
        <div class="container mx-auto px-4">
            <div class="relative mb-10 flex items-center justify-center text-center line-decoration md:mt-14">
                <div class="relative z-10 mx-auto inline-block whitespace-nowrap rounded-full px-4 py-2 text-xl font-bold uppercase text-white shadow bg-gradient md:text-6xl">
                    Visit Us
                </div>
            </div>
            <div class="-mx-4">
                <div class="flex flex-wrap justify-center gap-y-4 md:gap-y-8">
                    <div class="px-4 md:w-1/3">
                        <a href="#"
                           class="flex w-full items-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="/assets/images/babygo/icons/icon-instagram.png" alt=""
                                 class="h-auto w-7 max-w-full">
                            <div class="ml-4">
                                @babygoinc
                            </div>
                        </a>
                    </div>
                    <div class="px-4 md:w-1/3">
                        <a href="#"
                           class="flex w-full items-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="/assets/images/babygo/icons/icon-web.png" alt=""
                                 class="h-auto w-7 max-w-full">
                            <div class="ml-4">
                                www.babygoinc.com
                            </div>
                        </a>
                    </div>
                    <div class="px-4 md:w-1/3">
                        <a href="#"
                           class="flex w-full items-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="/assets/images/babygo/icons/icon-tiktok.png" alt=""
                                 class="h-auto w-7 max-w-full">
                            <div class="ml-4">
                                @babygo.inc
                            </div>
                        </a>
                    </div>
                    <div class="px-4 md:w-1/3">
                        <a href="#"
                           class="flex w-full items-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="/assets/images/babygo/icons/icon-youtube.png" alt=""
                                 class="h-auto w-7 max-w-full">
                            <div class="ml-4">
                                Youtube
                            </div>
                        </a>
                    </div>
                    <div class="px-4 md:w-1/3">
                        <a href="#"
                           class="flex w-full items-center justify-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="/assets/images/babygo/icons/icon-shopee.png" alt=""
                                 class="h-7 w-auto">
                        </a>
                    </div>
                    <div class="px-4 md:w-1/3">
                        <a href="#"
                           class="flex w-full items-center justify-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="/assets/images/babygo/icons/icon-tokopedia.png" alt=""
                                 class="h-7 w-auto">
                        </a>
                    </div>
                    <div class="px-4 md:w-1/3">
                        <a href="#"
                           class="flex w-full items-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="/assets/images/babygo/icons/icon-whatsapp.png" alt=""
                                 class="h-auto w-7 max-w-full">
                            <div class="ml-4">
                                WhatsApp
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after_scripts')
    <script>
      new Swiper('#product-swiper', {
        slidesPerView: 1,
        navigation: {
          prevEl: '#product-swiper .swiper-button-prev',
          nextEl: '#product-swiper .swiper-button-next'
        }
      });
      new Swiper('#testimonial-swiper', {
        slidesPerView: 1.5,
        loop: true,
        centeredSlides: true,
        navigation: {
          prevEl: '#testimonial-swiper .swiper-button-prev',
          nextEl: '#testimonial-swiper .swiper-button-next'
        },
        breakpoints: {
          768: {
            slidesPerView: 3
          }
        }
      });
    </script>
@endpush

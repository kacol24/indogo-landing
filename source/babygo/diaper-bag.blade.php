@extends('_layouts.master')

@section('content')
    <div class="h-screen snap-y snap-proximity overflow-auto scroll-smooth">
        <section title="Intro" class="snap-start min-h-screen h-screen">
            <div class="container h-full w-full max-w-full">
                <div class="flex h-full flex-col md:flex-row">
                    <div class="w-full md:w-6/12">
                        <img src="/assets/images/babygo/diaper-bag/banner-01.jpeg"
                             alt="mother and child sitting on a bench with a diaper bag"
                             class="h-full max-w-full object-cover object-right">
                    </div>
                    <div class="w-full py-4 md:w-6/12 md:py-0">
                        <div class="flex h-full flex-col items-center justify-center px-4 text-center">
                            <hgroup class="font-bold font-gotham-rounded">
                                <p class="mb-4 text-3xl md:text-5xl" style="color: #059146">
                                    Praktis & Stylish
                                </p>
                                <h1 class="inline-block rounded-full px-7 py-3 text-2xl text-white md:text-5xl"
                                    style="background-color:#059146;">
                                    Diaper Bag Premium
                                </h1>
                                <p class="mt-2 text-xl md:text-3xl" style="color: #474d40">
                                    Solusi Kebutuhan Orang Tua Modern
                                </p>
                            </hgroup>
                            <div class="mt-4 max-w-xl md:mt-12">
                                <img src="/assets/images/babygo/diaper-bag/product-01.jpeg" alt="5 diaper bags"
                                     class="h-auto max-w-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section title="Komitmen" class="snap-start min-h-screen h-screen">
            <div class="container h-full w-full max-w-full">
                <div class="flex h-full flex-col md:flex-row">
                    <div class="w-full md:w-6/12">
                        <img src="/assets/images/babygo/diaper-bag/banner-02.jpeg"
                             alt="mother and child sitting on a grass field with a diaper bag"
                             class="h-full max-w-full object-cover object-right">
                    </div>
                    <div class="w-full py-4 md:mt-0 md:w-6/12 md:py-0">
                        <div class="flex h-full flex-col items-center justify-center px-4 text-center font-bold font-gotham-rounded">
                            <hgroup>
                                <h1 class="inline-block rounded-full px-7 py-3 text-2xl uppercase text-white md:text-4xl"
                                    style="background-color:#059146;">
                                    Komitmen Babygo
                                </h1>
                            </hgroup>
                            <q class="mt-7 text-2xl uppercase md:text-4xl" style="color: #059146">
                                Making Parent's Life Easier
                            </q>
                            <div class="max-w-xl">
                                <p class="mt-8 text-xl font-gotham-book md:text-3xl" style="color: #455058">
                                    babyGo hadir dengan produk-produk yang memudahkan mobilitas orang tua dengan si
                                    Kecil setiap hari.
                                </p>
                                <div class="mt-4 md:mt-32">
                                    <div class="flex flex-row flex-nowrap justify-around gap-x-1 md:gap-x-4">
                                        <div class="w-1/3">
                                            <div class="relative flex w-full flex-row items-center gap-x-1 rounded-full text-base md:gap-x-3 md:text-xl"
                                                 style="background-color:#464d40;">
                                                <div class="max-w-8 md:max-w-14">
                                                    <img src="/assets/images/babygo/icons/icon-strong.png"
                                                         alt="icon chain" class="h-auto w-full max-w-full">
                                                </div>
                                                <div class="w-full text-start font-bold uppercase text-white font-gotham-rounded">
                                                    Strong
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-1/3">
                                            <div class="relative flex w-full flex-row items-center gap-x-1 rounded-full text-base md:gap-x-3 md:text-xl"
                                                 style="background-color:#464d40;">
                                                <div class="max-w-8 md:max-w-14">
                                                    <img src="/assets/images/babygo/icons/icon-smart.png"
                                                         alt="icon lightbulb" class="h-auto w-full max-w-full">
                                                </div>
                                                <div class="w-full text-start font-bold uppercase text-white font-gotham-rounded">
                                                    Smart
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-1/3">
                                            <div class="relative flex w-full flex-row items-center gap-x-1 rounded-full text-base md:gap-x-3 md:text-xl"
                                                 style="background-color:#464d40;">
                                                <div class="max-w-8 md:max-w-14">
                                                    <img src="/assets/images/babygo/icons/icon-simple.png"
                                                         alt="icon flower" class="h-auto w-full max-w-full">
                                                </div>
                                                <div class="w-full text-start font-bold uppercase text-white font-gotham-rounded">
                                                    Simple
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section title="Products" class="snap-none min-h-screen h-screen md:snap-start">
            <div class="h-full w-full"
                 style="background: url(/assets/images/babygo/bg-products.jpeg) left center; background-size: cover">
                <div class="container mx-auto flex h-full flex-col py-4 md:flex-row md:gap-x-4">
                    <div class="flex w-full items-center justify-center md:w-6/12">
                        <div class="swiper" id="image_swiper"
                             style="padding-bottom: 2rem;
                             --swiper-pagination-bottom: 0;
                             --swiper-pagination-bullet-size: 12px;
                             --swiper-pagination-color: #059146;
                             --swiper-pagination-bullet-opacity: 1;
                             --swiper-pagination-bullet-inactive-color: #37a66a;
                             --swiper-pagination-bullet-inactive-opacity: 0.7;
                             --swiper-pagination-bullet-horizontal-gap: 1rem">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-hash="aeon-diaper-bag">
                                    <img src="/assets/images/babygo/diaper-bag/aeon-diaper-bag.png"
                                         alt="aeon diaper bag" title="Aeon Diaper Bag"
                                         class="mx-auto h-full max-h-80 w-auto md:max-h-[540px]">
                                </div>
                                <div class="swiper-slide" data-hash="harley-diaper-bag">
                                    <img src="/assets/images/babygo/diaper-bag/harley-diaper-bag.png"
                                         alt="harley diaper bag" title="harley diaper bag"
                                         class="mx-auto h-full max-h-80 w-auto md:max-h-[540px]">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="flex w-full items-center justify-center p-4 font-gotham-rounded md:w-6/12">
                        <div class="swiper" id="content_swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="mt-4 w-full rounded-2xl p-5 text-center md:mt-12"
                                         style="background-color:#daefe3;max-width: 625px">
                                        <h3 class="-mt-10 mb-8 text-3xl font-bold md:-mt-12 md:mb-10 md:text-5xl"
                                            style="color: #069247; text-shadow: -3px -3px 2px #fff, -3px 3px 2px #fff, 3px -3px 2px #fff, 3px 3px 2px #fff, -1px -1px 0 #fff, -1px 1px 0 #fff, 1px -1px 0 #fff, 1px 1px 0 #fff;">
                                            Aeon Diaper Bag
                                        </h3>
                                        <div class="inline-block rounded-full text-xl font-bold leading-none text-white px-2.5 py-0.5 md:px-3.5 md:py-0 md:text-3xl"
                                             style="background-color:#6dac33;">
                                            Dimensi Tas
                                        </div>
                                        <div class="my-1 text-xl md:my-5 md:text-3xl" style="color: #455058">
                                            P x L x T : 25 x 14 x 38 (cm)
                                        </div>
                                        <div class="inline-block rounded-full text-xl font-bold leading-none text-white px-2.5 py-0.5 md:px-3.5 md:py-0 md:text-3xl"
                                             style="background-color:#6dac33;">
                                            Tersedia dalam Warna
                                        </div>
                                        <div class="flex flex-row justify-center gap-x-4 mt-2.5 md:gap-x-9">
                                            <div class="flex items-center justify-center rounded-full text-base font-medium text-white size-16 md:size-20 md:text-lg"
                                                 style="background-color:#29465d;">
                                                Biru
                                            </div>
                                            <div class="flex items-center justify-center rounded-full text-base font-medium text-white size-16 md:size-20 md:text-lg"
                                                 style="background-color:#292925;">
                                                Hitam
                                            </div>
                                            <div class="flex items-center justify-center rounded-full text-base font-medium text-white size-16 md:size-20 md:text-lg"
                                                 style="background-color:#614e58;">
                                                Coklat
                                            </div>
                                        </div>
                                        <div class="mt-5 flex flex-row md:gap-x-20">
                                            <div>
                                                <img src="/assets/images/babygo/diaper-bag/bonus-waterproof.png"
                                                     alt=""
                                                     class="h-auto w-full max-w-full">
                                            </div>
                                            <div>
                                                <img src="/assets/images/babygo/diaper-bag/model-aeon-diaper-bag.jpeg"
                                                     alt=""
                                                     class="h-auto w-full max-w-full">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="mt-4 w-full rounded-2xl p-5 text-center md:mt-12"
                                         style="background-color:#daefe3;max-width: 625px">
                                        <h3 class="-mt-10 mb-8 text-3xl font-bold md:-mt-12 md:mb-10 md:text-5xl"
                                            style="color: #069247; text-shadow: -3px -3px 2px #fff, -3px 3px 2px #fff, 3px -3px 2px #fff, 3px 3px 2px #fff, -1px -1px 0 #fff, -1px 1px 0 #fff, 1px -1px 0 #fff, 1px 1px 0 #fff;">
                                            Harley Diaper Bag
                                        </h3>
                                        <div class="inline-block rounded-full text-xl font-bold leading-none text-white px-2.5 py-0.5 md:px-3.5 md:py-0 md:text-3xl"
                                             style="background-color:#6dac33;">
                                            Dimensi Tas
                                        </div>
                                        <div class="my-1 text-xl md:my-5 md:text-3xl" style="color: #455058">
                                            P x L x T : 35 x 16 x 40 (cm)
                                        </div>
                                        <div class="inline-block rounded-full text-xl font-bold leading-none text-white px-2.5 py-0.5 md:px-3.5 md:py-0 md:text-3xl"
                                             style="background-color:#6dac33;">
                                            Tersedia dalam Warna
                                        </div>
                                        <div class="flex flex-row justify-center gap-x-4 mt-2.5 md:gap-x-9">
                                            <div class="flex items-center justify-center rounded-full text-base font-medium text-white size-16 md:size-20 md:text-lg"
                                                 style="background-color:#29465d;">
                                                Biru
                                            </div>
                                            <div class="flex items-center justify-center rounded-full text-base font-medium text-white size-16 md:size-20 md:text-lg"
                                                 style="background-color:#292925;">
                                                Hitam
                                            </div>
                                            <div class="flex items-center justify-center rounded-full text-base font-medium text-white size-16 md:size-20 md:text-lg"
                                                 style="background-color:#c84a56;">
                                                Maroon
                                            </div>
                                        </div>
                                        <div class="mt-5 flex flex-row md:gap-x-4">
                                            <div>
                                                <img src="/assets/images/babygo/diaper-bag/bonus-harley.png"
                                                     alt=""
                                                     class="h-auto w-full max-w-full">
                                            </div>
                                            <div>
                                                <img src="/assets/images/babygo/diaper-bag/model-harley.jpeg"
                                                     alt=""
                                                     class="h-auto w-full max-w-full">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section title="Contact" class="snap-start min-h-screen h-screen">
            <div class="flex h-full items-center justify-center py-4">
                <div class="container mx-auto px-4 text-center">
                    <h3 class="uppercase text-md md:text-xl" style="color: #474d40">
                        Visit Us
                    </h3>
                    <div class="mx-auto mt-8 flex max-w-3xl flex-row flex-wrap items-center justify-center gap-12 md:gap-x-12">
                        <div class="w-1/3 md:w-1/5">
                            <a href="https://www.instagram.com/babygoinc/" target="_blank"
                               class="flex flex-row flex-nowrap items-center">
                                <div class="w-12 me-2 md:me-4 md:w-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                                    </svg>
                                </div>
                                @babygoinc
                            </a>
                        </div>
                        <div class="w-1/3 md:w-1/5">
                            <a href="https://babygoinc.com/" target="_blank">
                                <img src="/assets/images/babygo/logo-babygo.png" alt=""
                                     class="h-auto w-full max-w-full">
                            </a>
                        </div>
                        <div class="w-1/3 md:w-1/5">
                            <a href="https://shopee.co.id/babygo.inc" target="_blank">
                                <img src="/assets/images/logo-shopee.png" alt=""
                                     class="h-auto w-full max-w-full">
                            </a>
                        </div>
                        <div class="w-1/3 md:w-1/5">
                            <a href="https://www.tokopedia.com/incbrands" target="_blank">
                                <img src="/assets/images/logo-tokopedia.png" alt=""
                                     class="h-auto w-full max-w-full">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('after_styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.2.1/swiper-bundle.min.css">
@endpush

@push('after_scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11.2.1/swiper-bundle.min.js"></script>
    <script>
      var imageSwiper = new Swiper('#image_swiper', {
        direction: 'horizontal',
        mousewheel: true,
        effect: 'creative',
        creativeEffect: {
          prev: {
            shadow: false,
            translate: [0, 0, -400]
          },
          next: {
            translate: ['100%', 0, 0]
          }
        },
        pagination: {
          el: '#image_swiper .swiper-pagination'
        },
        hashNavigation: {
          replaceState: true,
          watchState: true
        },
        autoHeight: true
      });

      var contentSwiper = new Swiper('#content_swiper', {
        direction: 'horizontal',
        mousewheel: true
      });

      imageSwiper.controller.control = contentSwiper;
      contentSwiper.controller.control = imageSwiper;

      // imageSwiper.on('init', function (e){
      //   console.log(e);
      // });
      //
      // imageSwiper.on('slideChange', function(e) {
      //   contentSwiper.slideTo(e.activeIndex);
      // });
      //
      // contentSwiper.on('slideChange', function(e) {
      //   imageSwiper.slideTo(e.activeIndex);
      // });
    </script>
@endpush

@extends('_layouts.master')

@section('content')
    <div class="h-screen snap-y snap-proximity overflow-auto scroll-smooth">
        <section title="Intro" class="snap-start md:h-screen">
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
        <section title="Komitmen" class="snap-start md:h-screen">
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
        <section title="Products" class="snap-none md:h-screen md:snap-start">
            <div class="h-full w-full"
                 style="background: url(/assets/images/babygo/bg-products.jpeg) left center; background-size: cover">
                <div class="container mx-auto flex h-full flex-col py-4 md:flex-row md:gap-x-4">
                    <div class="flex w-full items-center justify-center md:w-6/12">
                        <div class="swiper" id="image_swiper"
                             style="padding-bottom: 1rem;--swiper-theme-color: #059146;--swiper-pagination-bottom: 0; --swiper-pagination-bullet-inactive-color: #37a66a; --swiper-pagination-bullet-horizontal-gap: 1rem">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-hash="aeon-diaper-bag">
                                    <img src="/assets/images/babygo/diaper-bag/aeon-diaper-bag.png"
                                         alt="aeon diaper bag" title="Aeon Diaper Bag"
                                         class="mx-auto h-full w-auto max-h-80 md:max-h-[540px]">
                                </div>
                                <div class="swiper-slide" data-hash="harley-diaper-bag">
                                    <img src="/assets/images/babygo/diaper-bag/harley-diaper-bag.png"
                                         alt="harley diaper bag" title="harley diaper bag"
                                         class="mx-auto h-full w-auto max-h-80 md:max-h-[540px]">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="flex w-full items-center justify-center p-4 font-gotham-rounded md:w-6/12">
                        <div class="swiper" id="content_swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="mt-4 w-full rounded-lg p-5 text-center md:mt-12"
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
                                    <div class="mt-4 w-full rounded-lg p-5 text-center md:mt-12"
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

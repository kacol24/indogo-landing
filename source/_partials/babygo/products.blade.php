<div class="min-h-full w-full flex items-center justify-center py-4"
     style="background: url(/assets/images/babygo/bg-products.jpeg) left center; background-size: cover">
    <div class="swiper" id="product_swiper"
         style="padding-bottom: 2rem;
         --swiper-pagination-bottom: -1rem;
         --swiper-pagination-bullet-size: 12px;
         --swiper-pagination-color: #059146;
         --swiper-pagination-bullet-opacity: 1;
         --swiper-pagination-bullet-inactive-color: #37a66a;
         --swiper-pagination-bullet-inactive-opacity: 0.5;
         --swiper-pagination-bullet-horizontal-gap: 1rem">
        <div class="swiper-wrapper">
            <x-product-slide
                    title="Aeon Diaper Bag"
                    image="/assets/images/babygo/diaper-bag/aeon-diaper-bag.png">
                <div class="inline-block rounded-full text-xl font-bold leading-none text-white px-2.5 py-0.5 md:px-3.5 md:py-0 md:text-3xl"
                     style="background-color:#6dac33;">
                    Dimensi Tas
                </div>
                <div class="my-1 text-lg md:my-5 md:text-3xl" style="color: #455058">
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
            </x-product-slide>
            <x-product-slide
                    title="Harley Diaper Bag"
                    image="/assets/images/babygo/diaper-bag/harley-diaper-bag.png">
                <div class="inline-block rounded-full text-xl font-bold leading-none text-white px-2.5 py-0.5 md:px-3.5 md:py-0 md:text-3xl"
                     style="background-color:#6dac33;">
                    Dimensi Tas
                </div>
                <div class="my-1 text-lg md:my-5 md:text-3xl" style="color: #455058">
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
                <div class="mt-5 flex flex-row gap-x-4 md:gap-x-20">
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
            </x-product-slide>
        </div>
        <div class="container mx-auto flex h-full flex-col md:flex-row md:gap-x-4 font-gotham-rounded">
            <div class="w-full md:w-6/12 relative">
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>


@push('after_styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.2.1/swiper-bundle.min.css">
@endpush

@push('after_scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11.2.1/swiper-bundle.min.js"></script>
    <script>
      var imageSwiper = new Swiper('#product_swiper', {
        direction: 'horizontal',
        mousewheel: true,
        pagination: {
          el: '#product_swiper .swiper-pagination',
          clickable: true
        },
        hashNavigation: {
          replaceState: true,
          watchState: true
        },
        autoHeight: true
      });
    </script>
@endpush


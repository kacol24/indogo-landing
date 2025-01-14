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
            <div class="swiper-slide" data-hash="aeon-diaper-bag">
                <x-product-slide/>
            </div>
            <div class="swiper-slide" data-hash="aeon-diaper-bag">
                <x-product-slide/>
            </div>
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


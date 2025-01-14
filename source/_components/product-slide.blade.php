<div class="swiper-slide" data-hash="{{ \Illuminate\Support\Str::slug($title) }}">
    <div class="flex h-full flex-col md:flex-row md:gap-x-4">
        <div class="w-full md:w-6/12">
            <div class="flex h-full flex-col items-center justify-center">
                <img src="{{ $image }}" alt="{{ \Illuminate\Support\Str::slug($title) }}"
                     class="mx-auto h-full max-h-60 w-auto md:max-h-[540px]">
            </div>
        </div>
        <div class="w-full md:w-6/12">
            <div class="flex h-full items-center justify-center p-4">
                <div class="mt-4 w-full rounded-2xl p-5 text-center md:mt-8"
                     style="background-color:#daefe3;max-width: 625px">
                    <div class="-mt-10  md:-mt-12">
                        <h3 class="mb-4 text-3xl font-bold md:mb-10 md:text-5xl"
                            style="color: #069247; text-shadow: -3px -3px 2px #fff, -3px 3px 2px #fff, 3px -3px 2px #fff, 3px 3px 2px #fff, -1px -1px 0 #fff, -1px 1px 0 #fff, 1px -1px 0 #fff, 1px 1px 0 #fff;">
                            {{ $title }}
                        </h3>
                        @isset($dimention)
                            <x-pill>
                                Dimensi Tas
                            </x-pill>
                            <div class="my-1 text-lg md:my-5 md:text-3xl" style="color: #455058">
                                {{ $dimention }}
                            </div>
                        @endisset
                        @isset($colorSwatches)
                            <x-pill>
                                Tersedia dalam Warna
                            </x-pill>
                            <div class="flex flex-row justify-center gap-x-4 mt-2.5 md:gap-x-9">
                                {!! $colorSwatches !!}
                            </div>
                        @endisset
                        {!! $slot !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

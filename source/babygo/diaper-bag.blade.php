@extends('_layouts.master')

@section('content')
    <section class="gradient-decoration">
        <img src="/assets/images/babygo/diaper-bag/hero-banner-mobile.jpeg" alt="hero banner"
             class="w-full max-w-full h-auto block md:hidden">
        <img src="/assets/images/babygo/diaper-bag/hero-banner.jpeg" alt="hero banner"
             class="w-full max-w-full h-auto hidden md:block">
    </section>
    <section id="intro" title="Intro" class="md:mt-20 mt-10">
        <div class="text-center">
            <h1 class="font-gotham-rounded font-bold text-3xl md:text-8xl text-stroke md:md-6 mb-2">
                Diaper Bag Premium
            </h1>
            <div class="font-bold text-lg md:text-5xl text-body">
                Solusi Kebutuhan Orang Tua Modern
            </div>
            <div class="relative text-center line-decoration flex items-center justify-center md:mt-14 mt-10">
                <div class="relative mx-auto uppercase text-white bg-primary rounded-full px-4 py-2 inline-block shadow font-bold text-xl md:text-6xl z-10">
                    Komitmen Babygo
                </div>
            </div>
            <div class="uppercase text-primary text-xl md:text-6xl md:mt-8 mt-6 font-bold">
                "Making Parent's Life Easier"
            </div>
            <div class="mx-auto max-w-[800px] text-body md:mt-3 mt-2 text-base md:text-4xl">
                babyGo hadir dengan produk-produk
                yang memudahkan kegiatan orang tua
                sehari-hari dengan si Kecil.
            </div>
        </div>
    </section>
    <section id="features" title="Features" class="mt-4">
        <div class="container mx-auto px-4">
            <div class="gap-10 md:columns-3">
                <div class="shadow-lg rounded-lg p-4 mb-4 md:mb-0">
                    <img src="/assets/images/babygo/diaper-bag/feature-strong.jpeg" alt=""
                         class="w-100 max-w-full h-auto rounded-lg">
                    <div class="text-center mt-4">
                        <div class="text-primary uppercase md:text-2xl text-xl font-bold">
                            Strong
                        </div>
                        <div>
                            Material yang kuat & tahan lama
                        </div>
                    </div>
                </div>
                <div class="shadow-lg rounded-lg p-4 mb-4 md:mb-0">
                    <img src="/assets/images/babygo/diaper-bag/feature-strong.jpeg" alt=""
                         class="w-100 max-w-full h-auto rounded-lg">
                    <div class="text-center mt-4">
                        <div class="text-primary uppercase md:text-2xl text-xl font-bold">
                            Strong
                        </div>
                        <div>
                            Material yang kuat & tahan lama
                        </div>
                    </div>
                </div>
                <div class="shadow-lg rounded-lg p-4">
                    <img src="/assets/images/babygo/diaper-bag/feature-strong.jpeg" alt=""
                         class="w-100 max-w-full h-auto rounded-lg">
                    <div class="text-center mt-4">
                        <div class="text-primary uppercase md:text-2xl text-xl font-bold">
                            Strong
                        </div>
                        <div>
                            Material yang kuat & tahan lama
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-8 md:mt-32">
        <div class="container mx-auto">
            <div class="relative text-center flex items-center justify-center md:mt-14 mt-10">
                <h2 class="relative mx-auto uppercase text-white bg-primary rounded-full px-4 py-2 inline-block shadow font-bold text-xl md:text-6xl z-10">
                    Koleksi BabyGo Diaper Bag
                </h2>
            </div>
        </div>
    </section>
@endsection

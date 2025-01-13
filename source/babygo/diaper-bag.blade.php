@extends('_layouts.master')

@section('content')
    <div class="h-screen snap-y snap-proximity overflow-auto scroll-smooth">
        <section title="Intro" class="h-screen snap-start">
            <div class="container h-full w-full max-w-full">
                <div class="flex h-full flex-col md:flex-row">
                    <div class="w-full md:w-6/12">
                        <img src="/assets/images/babygo/diaper-bag/banner-01.jpeg"
                             alt="mother and child sitting on a bench with a diaper bag"
                             class="h-full max-w-full object-cover object-right">
                    </div>
                    <div class="w-full md:w-6/12 py-4 md:py-0">
                        <div class="flex h-full flex-col items-center justify-center px-4 text-center">
                            <hgroup class="font-bold font-gotham-rounded">
                                <p class="mb-4 text-3xl md:text-5xl" style="color: #059146">
                                    Praktis & Stylish
                                </p>
                                <h1 class="inline-block rounded-full px-7 py-3 text-2xl md:text-5xl text-white"
                                    style="background-color:#059146;">
                                    Diaper Bag Premium
                                </h1>
                                <p class="mt-2 text-xl md:text-3xl" style="color: #474d40">
                                    Solusi Kebutuhan Orang Tua Modern
                                </p>
                            </hgroup>
                            <div class="mt-4 md:mt-12 max-w-xl">
                                <img src="/assets/images/babygo/diaper-bag/product-01.jpeg" alt="5 diaper bags"
                                     class="h-auto max-w-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section title="Komitmen" class="h-screen snap-start">
            <div class="container h-full w-full max-w-full">
                <div class="flex h-full flex-col md:flex-row">
                    <div class="w-full md:w-6/12">
                        <img src="/assets/images/babygo/diaper-bag/banner-02.jpeg"
                             alt="mother and child sitting on a grass field with a diaper bag"
                             class="h-full max-w-full object-cover object-right">
                    </div>
                    <div class="w-full md:w-6/12 md:mt-0 py-4 md:py-0">
                        <div class="flex h-full flex-col items-center justify-center px-4 text-center font-bold font-gotham-rounded">
                            <hgroup>
                                <h1 class="inline-block rounded-full px-7 py-3 text-2xl md:text-4xl uppercase text-white"
                                    style="background-color:#059146;">
                                    Komitmen Babygo
                                </h1>
                            </hgroup>
                            <q class="mt-7 text-2xl md:text-4xl uppercase" style="color: #059146">
                                Making Parent's Life Easier
                            </q>
                            <div class="max-w-xl">
                                <p class="mt-8 text-xl md:text-3xl font-gotham-book" style="color: #455058">
                                    babyGo hadir dengan produk-produk yang memudahkan mobilitas orang tua dengan si
                                    Kecil setiap hari.
                                </p>
                                <div class="mt-4 md:mt-32">
                                    <div class="flex flex-row flex-nowrap justify-around gap-x-1 md:gap-x-4">
                                        <div class="w-1/3">
                                            <div class="relative flex w-full flex-row items-center rounded-full text-base md:text-xl gap-x-1 md:gap-x-3"
                                                 style="background-color:#464d40;">
                                                <div class="max-w-8 md:max-w-14">
                                                    <img src="/assets/images/babygo/icons/icon-strong.png"
                                                         alt="icon chain" class="h-auto w-full max-w-full">
                                                </div>
                                                <div class="w-full font-bold uppercase text-white font-gotham-rounded text-start">
                                                    Strong
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-1/3">
                                            <div class="relative flex w-full flex-row items-center rounded-full text-base md:text-xl gap-x-1 md:gap-x-3"
                                                 style="background-color:#464d40;">
                                                <div class="max-w-8 md:max-w-14">
                                                    <img src="/assets/images/babygo/icons/icon-smart.png"
                                                         alt="icon lightbulb" class="h-auto w-full max-w-full">
                                                </div>
                                                <div class="w-full font-bold uppercase text-white font-gotham-rounded text-start">
                                                    Smart
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-1/3">
                                            <div class="relative flex w-full flex-row items-center rounded-full text-base md:text-xl gap-x-1 md:gap-x-3"
                                                 style="background-color:#464d40;">
                                                <div class="max-w-8 md:max-w-14">
                                                    <img src="/assets/images/babygo/icons/icon-simple.png"
                                                         alt="icon flower" class="h-auto w-full max-w-full">
                                                </div>
                                                <div class="w-full font-bold uppercase text-white font-gotham-rounded text-start">
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
        <section title="Products" class="h-screen snap-start">
            <div class="flex flex-row flex-nowrap overflow-x-scroll h-full snap-x snap-mandatory">
                <div class="h-full w-screen snap-start" style="min-width: 100vw;">
                    <div class="h-full w-full"
                         style="background: url(/assets/images/babygo/bg-products.jpeg) left center; background-size: cover">
                        <div class="flex h-full flex-col md:flex-row md:gap-x-4 container mx-auto">
                            <div class="w-full md:w-6/12">
                                <div class="flex h-full flex-col items-center justify-center">
                                    <img src="/assets/images/babygo/diaper-bag/aeon-diaper-bag.png"
                                         alt="aeon diaper bag"
                                         class="h-auto max-w-full w-full">
                                </div>
                            </div>
                            <div class="w-full md:w-6/12">
                                <div class="flex h-full items-center justify-center p-4">
                                    <div class="rounded-lg p-5 w-full text-center font-gotham-rounded"
                                         style="background-color:#daefe3;max-width: 625px">
                                        <h3 class="font-bold text-3xl md:text-5xl -mt-8 mb-8 -md:mt-10 md:mb-10"
                                            style="color: #069247; text-shadow: -3px -3px 2px #fff, -3px 3px 2px #fff, 3px -3px 2px #fff, 3px 3px 2px #fff, -1px -1px 0 #fff, -1px 1px 0 #fff, 1px -1px 0 #fff, 1px 1px 0 #fff;">
                                            Aeon Diaper Bag
                                        </h3>
                                        <span class="font-bold text-white rounded-full px-3.5 py-0 text-xl md:text-3xl leading-none"
                                              style="background-color:#6dac33;">
                                        Dimensi Tas
                                    </span>
                                        <div class="text-xl md:text-3xl my-5" style="color: #455058">
                                            P x L x T : 25 x 14 x 38 (cm)
                                        </div>
                                        <span class="font-bold text-white rounded-full px-3.5 py-0 text-xl md:text-3xl leading-none"
                                              style="background-color:#6dac33;">
                                        Tersedia dalam Warna
                                    </span>
                                        <div class="flex flex-row gap-x-4 md:gap-x-9 mt-2.5 justify-center">
                                            <div class="size-16 md:size-20 rounded-full flex items-center justify-center text-white font-medium text-base md:text-lg"
                                                 style="background-color:#29465d;">
                                                Biru
                                            </div>
                                            <div class="size-16 md:size-20 rounded-full flex items-center justify-center text-white font-medium text-base md:text-lg"
                                                 style="background-color:#292925;">
                                                Hitam
                                            </div>
                                            <div class="size-16 md:size-20 rounded-full flex items-center justify-center text-white font-medium text-base md:text-lg"
                                                 style="background-color:#614e58;">
                                                Coklat
                                            </div>
                                        </div>
                                        <div class="flex flex-row md:gap-x-20 mt-5">
                                            <div>
                                                <img src="/assets/images/babygo/diaper-bag/bonus-waterproof.png" alt=""
                                                     class="h-auto max-w-full w-full">
                                            </div>
                                            <div>
                                                <img src="/assets/images/babygo/diaper-bag/model-aeon-diaper-bag.jpeg"
                                                     alt=""
                                                     class="h-auto max-w-full w-full">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-full w-screen snap-start" style="min-width: 100vw;">
                    <div class="h-full w-full"
                         style="background: url(/assets/images/babygo/bg-products.jpeg) left center; background-size: cover">
                        <div class="flex h-full flex-col md:flex-row md:gap-x-4 container mx-auto">
                            <div class="w-full md:w-6/12">
                                <div class="flex h-full flex-col items-center justify-center">
                                    <img src="/assets/images/babygo/diaper-bag/aeon-diaper-bag.png"
                                         alt="aeon diaper bag"
                                         class="h-auto max-w-full w-full">
                                </div>
                            </div>
                            <div class="w-full md:w-6/12">
                                <div class="flex h-full items-center justify-center p-4">
                                    <div class="rounded-lg p-5 w-full text-center font-gotham-rounded"
                                         style="background-color:#daefe3;max-width: 625px">
                                        <h3 class="font-bold text-3xl md:text-5xl -mt-8 mb-8 -md:mt-10 md:mb-10"
                                            style="color: #069247; text-shadow: -3px -3px 2px #fff, -3px 3px 2px #fff, 3px -3px 2px #fff, 3px 3px 2px #fff, -1px -1px 0 #fff, -1px 1px 0 #fff, 1px -1px 0 #fff, 1px 1px 0 #fff;">
                                            Aeon Diaper Bag
                                        </h3>
                                        <span class="font-bold text-white rounded-full px-3.5 py-0 text-xl md:text-3xl leading-none"
                                              style="background-color:#6dac33;">
                                        Dimensi Tas
                                    </span>
                                        <div class="text-xl md:text-3xl my-5" style="color: #455058">
                                            P x L x T : 25 x 14 x 38 (cm)
                                        </div>
                                        <span class="font-bold text-white rounded-full px-3.5 py-0 text-xl md:text-3xl leading-none"
                                              style="background-color:#6dac33;">
                                        Tersedia dalam Warna
                                    </span>
                                        <div class="flex flex-row gap-x-4 md:gap-x-9 mt-2.5 justify-center">
                                            <div class="size-16 md:size-20 rounded-full flex items-center justify-center text-white font-medium text-base md:text-lg"
                                                 style="background-color:#29465d;">
                                                Biru
                                            </div>
                                            <div class="size-16 md:size-20 rounded-full flex items-center justify-center text-white font-medium text-base md:text-lg"
                                                 style="background-color:#292925;">
                                                Hitam
                                            </div>
                                            <div class="size-16 md:size-20 rounded-full flex items-center justify-center text-white font-medium text-base md:text-lg"
                                                 style="background-color:#614e58;">
                                                Coklat
                                            </div>
                                        </div>
                                        <div class="flex flex-row md:gap-x-20 mt-5">
                                            <div>
                                                <img src="/assets/images/babygo/diaper-bag/bonus-waterproof.png" alt=""
                                                     class="h-auto max-w-full w-full">
                                            </div>
                                            <div>
                                                <img src="/assets/images/babygo/diaper-bag/model-aeon-diaper-bag.jpeg"
                                                     alt=""
                                                     class="h-auto max-w-full w-full">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-full w-screen snap-start" style="min-width: 100vw;">
                    <div class="h-full w-full"
                         style="background: url(/assets/images/babygo/bg-products.jpeg) left center; background-size: cover">
                        <div class="flex h-full flex-col md:flex-row md:gap-x-4 container mx-auto">
                            <div class="w-full md:w-6/12">
                                <div class="flex h-full flex-col items-center justify-center">
                                    <img src="/assets/images/babygo/diaper-bag/aeon-diaper-bag.png"
                                         alt="aeon diaper bag"
                                         class="h-auto max-w-full w-full">
                                </div>
                            </div>
                            <div class="w-full md:w-6/12">
                                <div class="flex h-full items-center justify-center p-4">
                                    <div class="rounded-lg p-5 w-full text-center font-gotham-rounded"
                                         style="background-color:#daefe3;max-width: 625px">
                                        <h3 class="font-bold text-3xl md:text-5xl -mt-8 mb-8 -md:mt-10 md:mb-10"
                                            style="color: #069247; text-shadow: -3px -3px 2px #fff, -3px 3px 2px #fff, 3px -3px 2px #fff, 3px 3px 2px #fff, -1px -1px 0 #fff, -1px 1px 0 #fff, 1px -1px 0 #fff, 1px 1px 0 #fff;">
                                            Aeon Diaper Bag
                                        </h3>
                                        <span class="font-bold text-white rounded-full px-3.5 py-0 text-xl md:text-3xl leading-none"
                                              style="background-color:#6dac33;">
                                        Dimensi Tas
                                    </span>
                                        <div class="text-xl md:text-3xl my-5" style="color: #455058">
                                            P x L x T : 25 x 14 x 38 (cm)
                                        </div>
                                        <span class="font-bold text-white rounded-full px-3.5 py-0 text-xl md:text-3xl leading-none"
                                              style="background-color:#6dac33;">
                                        Tersedia dalam Warna
                                    </span>
                                        <div class="flex flex-row gap-x-4 md:gap-x-9 mt-2.5 justify-center">
                                            <div class="size-16 md:size-20 rounded-full flex items-center justify-center text-white font-medium text-base md:text-lg"
                                                 style="background-color:#29465d;">
                                                Biru
                                            </div>
                                            <div class="size-16 md:size-20 rounded-full flex items-center justify-center text-white font-medium text-base md:text-lg"
                                                 style="background-color:#292925;">
                                                Hitam
                                            </div>
                                            <div class="size-16 md:size-20 rounded-full flex items-center justify-center text-white font-medium text-base md:text-lg"
                                                 style="background-color:#614e58;">
                                                Coklat
                                            </div>
                                        </div>
                                        <div class="flex flex-row md:gap-x-20 mt-5">
                                            <div>
                                                <img src="/assets/images/babygo/diaper-bag/bonus-waterproof.png" alt=""
                                                     class="h-auto max-w-full w-full">
                                            </div>
                                            <div>
                                                <img src="/assets/images/babygo/diaper-bag/model-aeon-diaper-bag.jpeg"
                                                     alt=""
                                                     class="h-auto max-w-full w-full">
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

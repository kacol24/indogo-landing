@extends('_babygo._layouts.master')

@section('content')
    <div class="h-screen snap-y snap-mandatory overflow-auto scroll-smooth">
        <section title="Intro" class="snap-none md:snap-start">
            @include('_babygo._partials.intro')
        </section>
        <section title="Komitmen" class="snap-none md:snap-start">
            @include('_babygo._partials.komitmen')
        </section>
        <section title="Products" class="snap-none md:snap-start">
            @include('_babygo._partials.products')
        </section>
        <section title="Contact" class="snap-none md:snap-start">
            @include('_babygo._partials.contact')
        </section>
    </div>
@endsection

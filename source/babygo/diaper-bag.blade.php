@extends('_layouts.master')

@section('content')
    <div class="h-screen snap-y snap-proximity overflow-auto scroll-smooth">
        <section title="Intro" class="snap-none md:h-screen md:min-h-screen md:snap-start">
            @include('_partials.babygo.intro')
        </section>
        <section title="Komitmen" class="snap-none md:h-screen md:min-h-screen md:snap-start">
            @include('_partials.babygo.komitmen')
        </section>
        <section title="Products" class="snap-none md:h-screen md:min-h-screen md:snap-start">
            @include('_partials.babygo.products')
        </section>
        <section title="Contact" class="snap-none md:snap-start">
            @include('_partials.babygo.contact')
        </section>
    </div>
@endsection

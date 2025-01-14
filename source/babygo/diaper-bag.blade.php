@extends('_layouts.master')

@section('content')
    <div class="h-screen snap-y snap-proximity overflow-auto scroll-smooth">
        <section title="Intro" class="min-h-screen snap-none md:h-screen md:snap-start">
            @include('_partials.babygo.intro')
        </section>
        <section title="Komitmen" class="min-h-screen snap-none md:h-screen md:snap-start">
            @include('_partials.babygo.komitmen')
        </section>
        <section title="Products" class="min-h-screen snap-none md:h-screen md:snap-start">
            @include('_partials.babygo.products')
        </section>
        <section title="Contact" class="min-h-screen snap-none md:h-screen md:snap-start">
            @include('_partials.babygo.contact')
        </section>
    </div>
@endsection

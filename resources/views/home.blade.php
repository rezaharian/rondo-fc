@extends('master.app')

@section('title', 'Home')

@section('content')

    <!-- Hero -->
    <section id="hero">
        @include('master.hero')
    </section>

    <!-- Next Match -->
    <section id="nextmatch">
        @include('master.nextmatch')
    </section>

    <!-- News -->
    <section id="news">
        @include('master.news')
    </section>

    <!-- Gallery -->
    {{-- <section id="gallery">
        @include('master.galery')
    </section> --}}

    <!-- Shop -->
    <section id="shop">
        @include('master.bigimg')
    </section>
    <!-- Shop -->
    <section id="shop">
        @include('master.shop')
    </section>

    <!-- Partner -->
    <section id="partner">
        @include('master.partner')
    </section>


@endsection

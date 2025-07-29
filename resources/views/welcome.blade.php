@extends('layouts.landing')

@section('content')
    <!-- Navigation -->
    @include('components.navbar')

    <!-- Home/Hero Section -->
    <section id="home">
        <x-home />
    </section>

    <!-- Adventures Section -->
    <section id="adventures">
        <x-adventures />
    </section>

    <!-- Gallery Section -->
    <section id="gallery">
        <x-gallery />
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials">
        <x-testimonials />
    </section>

    <!-- About Section -->
    <section id="about">
        <x-about />
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <x-contact />
    </section>

    <!-- Footer -->
    <x-footer />
@endsection

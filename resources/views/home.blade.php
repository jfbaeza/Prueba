@extends('layouts.main')
@section('styles')
    @vite('resources/scss/home/main.scss')
@endsection
@section('title', 'Home')

@section('body')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/About.webp') }}" class="d-block w-100" alt="..."
                    style="max-height: 400px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block custom-caption">
                    <h5>About me</h5>
                    <p>Get to know a bit about me and my experience as a developer.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Tech.webp') }}" class="d-block w-100" alt="..."
                    style="max-height: 400px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block custom-caption">
                    <h5>Tech & Skill</h5>
                    <p>Some of the technologies I currently work with.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Contact.webp') }}" class="d-block w-100" alt="..."
                    style="max-height: 400px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block custom-caption">
                    <h5>Connect with Us</h5>
                    <p>Feel free to reach out to me if you have any questions or need assistance.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

<div class="container-flex bg-dark text-white text-center">
    <br>
    <h3><strong>About me</strong></h3>
    <div class="row">
        <div class="col-md-8">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse modi ex quisquam nulla temporibus veritatis sed atque, pariatur quibusdam ducimus fuga in porro eaque impedit, quos deleniti accusantium odit sapiente.</p>
        </div>
    </div>
</div>


@endsection

@section('scripts')
    @vite('resources/js/home/main.js')
@endsection

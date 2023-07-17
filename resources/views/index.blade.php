@extends('layouts.layout')
@section('content')
<div class="container-fluid" style="background-color: #026481">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active p-2">
                <img src="{{ asset('assets/img/background.jpg') }}" class="rounded-4 mx-auto d-block p-2 w-75"
                    alt="Logo">
            </div>
            <div class="carousel-item p-2">
                <img src="{{ asset('assets/img/shop-bg.jpg') }}" class="rounded mx-auto d-block p-2 w-75"
                    alt="Logo">
            </div>
            <div class="carousel-item p-2">
                <img src="{{ asset('assets/img/a.jpg') }}" class="rounded mx-auto d-block p-2 w-75" alt="Logo">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection

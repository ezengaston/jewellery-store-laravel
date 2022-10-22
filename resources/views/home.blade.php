@extends('layouts.layout')

@section('content')
    <main>
        <div class="container-fluid p-0">
            <video width="100%" height="auto" autoplay muted loop>
                <source src="home.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container-xxl">
            <div class="container-fluid my-5 text-center">
                <div class="h1 fw-bold">Most Recent Products</div>
                <a href="/products" class="btn btn-lg btn-outline-secondary mt-3">Discover More</a>
            </div>
            <div class="row gy-4">
                @foreach ($most_recent_products as $product)
                    <div class="col-sm-12 col-lg-4 d-flex justify-content-center">
                        <a href='/' class="card shadow home-card text-decoration-none text-reset">
                            <img src="{{ $product['image_path'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase">
                                    {{ $product['name'] }}
                                </h5>
                                <p class="card-text">
                                    {{ $product['short_description'] }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
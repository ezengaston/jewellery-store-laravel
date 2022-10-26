@extends('layouts.layout')

@section('content')
    <main>
        <div class="container-xxl">
            <video class="d-none d-md-block" width="100%" height="auto" autoplay muted loop>
                <source src="home.mp4" type="video/mp4">
            </video>
            <video class="d-md-none" width="100%" height="auto" autoplay muted loop>
                <source src="home-md.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container-xxl">
            <div class="container-fluid my-5 text-center">
                <div class="h1 fw-bold">Most Recent Products</div>
                <a href="/products" class="btn btn-lg btn-outline-secondary mt-3">Discover More</a>
            </div>
            <div class="row gy-4">
                @foreach ($most_recent_products as $product)
                    <div class="col-sm-6 col-lg-3 d-flex justify-content-center">
                        <a href='/' class="card shadow text-decoration-none text-reset">
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
        <div class="container-xxl">
            <div class="container-fluid my-5 text-center">
                <div class="h1 fw-bold">Shop by Category</div>
                <div class="fs-4 text-secondary">Brilliant design and unparalleled craftsmanship.</div>
            </div>
            <div class="row gy-4">
                @foreach ($categories as $category)
                    <a href="/products" class="col-sm-4 col-6 col-lg-2 text-decoration-none text-reset text-center">
                        <img class="img-fluid" src="{{ $category['image_path'] }}" alt="{{ $category['name'] }}">
                        <div class="text-capitalize">
                            {{ $category['name'] }}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="container-xxl" style="margin-top: 4rem">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-8 d-none d-lg-block">
                    <img class="img-fluid" src="home-engagement-rings.jpeg" alt="Engagement rings">
                </div>
                <div class="col-11 d-lg-none text-center">
                    <img class="img-fluid" src="home-engagement-ring-mobile.webp" alt="Engagement rings" style="width: 100%">
                </div>
                <div class="col-11 col-lg-4 pe-lg-5">
                    <div class="fw-bold fs-4">Love Your Way</div>
                    <div class="fs-6 my-2">You’ll know who it’s for. You’ll know when it’s time. You’ll just know.</div>
                    <a class="fs-6 fw-bold text-decoration-none text-reset" href="/">Explore Love & Engagement &nbsp; &#x276F;</a>
                </div>
                <div class="col-11 d-lg-none text-center">
                    <img class="img-fluid" src="home-diamond-mobile.webp" alt="Diamonds" style="width: 100%">
                </div>
                <div class="col-11 col-lg-4 ps-lg-5">
                    <div class="fw-bold fs-4">From the Source</div>
                    <div class="fs-6 my-2">
                        Handcrafting the world’s best diamonds starts with knowing where they come from. We proudly trace 100% of our rough diamonds to known mines and sources.
                    </div>
                    <a class="fs-6 fw-bold text-decoration-none text-reset" href="/">Follow Your Diamond's Journey &nbsp; &#x276F;</a>
                </div>
                <div class="col-8 d-none d-lg-block">
                    <img class="img-fluid" src="home-diamond.jpeg" alt="Diamonds">
                </div>
            </div>
        </div>
    </main>
@endsection
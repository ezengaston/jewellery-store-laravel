@extends('layouts.layout')

@section('content')
    <main>
        <div class="container-xxl text-center display-4">Our Products</div>
        <div class="container-xxl mt-3">
            <div class="row gy-2">
                <div class="col-sm-3">
                    <div class="form-floating">
                        <select id="category" class="form-select">
                            @foreach ($categories as $category)
                                @if ($category['name'] === $categorySelected)
                                    <option value="{{ $category['name'] }}" selected>
                                        {{ ucwords($category['name']) }}
                                    </option>
                                    @continue
                                @endif

                                <option value="{{ $category['name'] }}">
                                    {{ ucwords($category['name']) }}
                                </option>
                            @endforeach
                        </select>
                        <label 
                            for="category"
                            class="form-label remove-floating-transition"
                        >
                            Category
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-floating">
                        <select id="material" class="form-select">
                            @foreach ($materials as $material)
                                @if ($material['name'] === $materialSelected)
                                    <option value="{{ $material['name'] }}" selected>
                                        {{ ucwords($material['name']) }}
                                    </option>
                                    @continue
                                @endif

                                <option value="{{ $material['name'] }}">
                                    {{ ucwords($material['name']) }}
                                </option>
                            @endforeach
                        </select>
                        <label 
                            for="material" 
                            class="form-label remove-floating-transition"
                        >
                            Material
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-floating">
                        <select id="gemstone" class="form-select">
                            @foreach ($gemstones as $gemstone)
                                @if ($gemstone['name'] === $gemstoneSelected)
                                    <option value="{{ $material['name'] }}" selected>
                                        {{ ucwords($gemstone['name']) }}
                                    </option>
                                    @continue
                                @endif

                                <option value="{{ $gemstone['name'] }}">
                                    {{ ucwords($gemstone['name']) }}
                                </option>
                            @endforeach
                        </select>
                        <label 
                            for="gemstone" 
                            class="form-label remove-floating-transition"
                        >
                            Gemstone
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-floating">
                        <input 
                            type="text" 
                            class="form-control" 
                            id="search" 
                            placeholder="gold"
                            value="{{ $search }}"
                        >
                        <label for="search" class="form-label">Search by name</label>
                    </div>
                </div>
            </div>
        <div>
        <div class="container-xxl mt-5">
            <div class="row gy-4">
                @if (count($products) === 0)
                    <div class="text-center fs-2">
                        No products found
                    </div>
                @else
                    @foreach ($products as $product)
                        <div class="col-xl-3 col-md-4 col-sm-6 d-flex justify-content-center">
                            <a href="/product/{{ $product->id }}" class="card shadow text-decoration-none text-reset">
                                <img src="{{ $product['image_path'] }}" class="card-img-top" >
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
                @endif
            </div>
        </div>
    </main>
    <script>
        const category = document.querySelector("#category");
        const material = document.querySelector("#material");
        const gemstone = document.querySelector("#gemstone");
        const search = document.querySelector("#search");

        category.addEventListener("change", () => {
            window.location.search = `&category=${category.value}&material=${material.value}&gemstone=${gemstone.value}`;
        });

        material.addEventListener("change", () => {
            window.location.search = `&category=${category.value}&material=${material.value}&gemstone=${gemstone.value}`;
        })

        gemstone.addEventListener("change", () => {
            window.location.search = `&category=${category.value}&material=${material.value}&gemstone=${gemstone.value}`;
        })

        search.addEventListener("change", () => {
            window.location.search = `&category=${category.value}&material=${material.value}&gemstone=${gemstone.value}&search=${search.value}`;
        })
    </script>
@endsection
@extends('layouts.layout')

@section('content')
    <main>
        <div class="container-xxl text-center display-4">Our Products</div>
        <div class="container-xxl">
            <form class="row" action="/products" method="GET">
                <div class="col-sm-2">
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
                        <label for="category" class="form-label">Category</label>
                    </div>
                </div>
                <div class="col-sm-2">
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
                        <label for="material" class="form-label">Material</label>
                    </div>
                </div>
                <div class="col-sm-2">
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
                        <label for="gemstone" class="form-label">Gemstone</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="dropdown d-grid">
                        <button class="btn btn-secondary dropdown-toggle btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            Price
                        </button>
                        <div class="dropdown-menu w-100">
                            <div class="px-3">
                                <div class="form-check dropdown-item remove-active-effect">
                                    <input class="form-check-input" type="checkbox" value="" id="under500">
                                    <label class="form-check-label" for="under500">
                                        Under £500
                                    </label>
                                </div>
                                <div class="form-check dropdown-item remove-active-effect">
                                    <input class="form-check-input" type="checkbox" value="" id="500-1000">
                                    <label class="form-check-label" for="500-1000">
                                        £500-£1000
                                    </label>
                                </div>
                                <div class="form-check dropdown-item remove-active-effect">
                                    <input class="form-check-input" type="checkbox" value="" id="over1000">
                                    <label class="form-check-label" for="over1000">
                                        Over £1000
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-floating">
                        <input 
                            type="text" 
                            class="form-control" 
                            id="search" 
                            placeholder="gold"
                        >
                        <label for="search" class="form-label">Search by name</label>
                    </div>
                </div>
            </form>
        <div>
    </main>
    <script>
        const category = document.querySelector("#category");
        const material = document.querySelector("#material");
        const gemstone = document.querySelector("#gemstone");

        category.addEventListener("change", () => {
            window.location.search = `&category=${category.value}&material=${material.value}&gemstone=${gemstone.value}`;
        });

        material.addEventListener("change", () => {
            window.location.search = `&category=${category.value}&material=${material.value}&gemstone=${gemstone.value}`;
        })

        gemstone.addEventListener("change", () => {
            window.location.search = `&category=${category.value}&material=${material.value}&gemstone=${gemstone.value}`;
        })
    </script>
@endsection
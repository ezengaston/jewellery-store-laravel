@extends('layouts.layout')

@section('content')
    <main>
        <div class="container-xxl text-center display-4">Our Products</div>
        <div class="container-xxl">
            <form class="row">
                <div class="col-sm-3">
                    <div class="form-floating">
                        <select id="category" class="form-select">
                            <option value="bracelets">Bracelets</option>
                            <option value="necklaces">Necklaces</option>
                            <option value="rings">Rings</option>
                        </select>
                        <label for="category" class="form-label">Category</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-floating">
                        <select id="material" class="form-select">
                            <option value="gold">Gold</option>
                            <option value="silver">Silver</option>
                            <option value="white_gold">White gold</option>
                        </select>
                        <label for="material" class="form-label">Material</label>
                    </div>
                </div>
                <div class="col-sm-3">
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
                <div class="col-sm-3">
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
@endsection
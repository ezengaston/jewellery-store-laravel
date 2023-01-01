@extends('layouts.layout')

@section('content')
    <main>
        <div class="container-xxl">
            <div class="row justify-content-center mt-5">
                <div class="col-4">
                    <img class="img-fluid img-thumbnail" src="/{{ $product->image_path }}" />
                </div>
                <div class="col-4">
                    <div class="display-5 text-center">{{ $product->name }}</div>
                    <div class="lead mt-3 mb-1 fs-4">Description:</div>
                    <div class="fs-5">{{ $product->description }}</div>
                    <div class="lead mt-3 mb-1 fs-4">Details:</div>
                    <ul class="fs-5 mb-4">
                        <li>Material - {{ $material->name }}</li>
                        <li>Gemstone - {{ $gemstone->name }}</li>
                        <li>Product number - {{ $product->id }}</li>
                    </ul>
                    <form class="d-flex">
                        <div class="form-floating">
                            <input 
                                type="number" 
                                id="floatingQuantity" 
                                class="form-control" 
                                value="0"
                                min="0"
                            />
                            <label 
                                for="floatingQuantity"
                            >
                                Quantity
                            </label>
                        </div>
                        <button class="btn btn-outline-primary ms-3">Add to basket</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
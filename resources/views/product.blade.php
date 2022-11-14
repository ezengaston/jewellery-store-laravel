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
                    <ul class="fs-5">
                        <li>Material - {{ $material->name }}</li>
                        <li>Gemstone - {{ $gemstone->name }}</li>
                        <li>Product number - {{ $product->id }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
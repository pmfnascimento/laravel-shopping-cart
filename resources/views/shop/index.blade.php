@extends('layouts.master')
@section('title')
    Laravel Shopping Cart
@endsection
@section('content')

    <div class="row">
<<<<<<< HEAD
        @foreach ($products as $product)
            <div class="col-6 col-sm-6 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ $product->imagePath }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ Str::limit($product->title, 20) }}</h5>
                        <p class="card-text">{{ Str::limit($product->description, 50) }}</p>
                        <div class="clearfix">
                            <div class="float-left price">$ {{ $product->price }}</div>
                            <a href="{{ route('add-to-cart', ['id' => $product->id]) }}"
                                class="btn btn-success float-right">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection
=======

        <div class="row">
            @foreach ($products as $product)
                <div class="col-6 col-sm-6 col-md-4 mb-3">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ $product->imagePath }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ Str::limit($product->title, 20) }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 50) }}</p>
                            <div class="clearfix">
                                <div class="float-left price">$ {{ $product->price }}</div>
                                <a href="#" class="btn btn-success float-right">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
>>>>>>> a5396dd8df771f8f884aea0b4a306973bc89fc7d

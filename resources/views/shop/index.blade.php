@extends('layouts.master')
@section('title')
    Laravel Shopping Cart
@endsection
@section('content')
    @if (Session::has('success'))
        <div class="row">
            <div class="col-6 mx-auto">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif

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
                            <a href="{{ route('add-to-cart', ['id' => $product->id]) }}"
                                class="btn btn-success float-right">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection

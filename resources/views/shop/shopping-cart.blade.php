@extends('layouts.master')
@section('title')
    Laravel Shopping Cart
@endsection
@section('content')
    @if (Session::has('cart'))
        <div class="row">
         
            <div class="col-8">
                   <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Qty</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product['qty'] }}</th>
                                <td><strong>{{ $product['item']['title'] }}</strong></td>
                                <td>{{ $product['price'] }} $</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Reduce by 1</a>
                                            <a class="dropdown-item" href="#">Reduce All</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Total: {{ $totalPrice }} $</strong></li>
                        <li class="list-group-item"><a href="{{ route('checkout') }}" type="button" class="btn btn-success btn-block">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-10 mx-auto">
                <h2 class="text-center">No items on cart!</h2>
            </div>
        </div>
    @endif
@endsection

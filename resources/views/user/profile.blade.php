@extends('layouts.master')
@section('title')
    User Profile
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2 class="text-center">My Profile</h2>
            <hr>
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">My Orders</h5>
                </div>
            </div>
            @foreach ($orders as $order)

            <div class="card text-center mt-3">
                <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($order->cart->items as $item)
                        <li class="list-group-item">
                            <strong class="float-right">$ {{ $item['price'] }}</strong>
                            <span class="float-left">{{ $item['item']['title'] }} x {{ $item['qty'] }}</span>
                        </li>

                    @endforeach

                </ul>
                </div>
                <div class="card-footer">
                    <strong class="float-left">Total Price: $ {{ $order->cart->totalPrice }}</strong>
                </div>
                </div>
            @endforeach

        

    </div>
    </div>
@endsection

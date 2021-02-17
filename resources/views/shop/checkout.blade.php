@extends('layouts.master')
@section('title')
    Laravel Shopping Cart
@endsection
@section('content')
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Checkout</strong></li>
                    <li class="list-group-item"><strong>Total: {{ $totalPrice }} $</strong></li>
                    <li class="list-group-item">
                        <form method="POST" action="{{ route('checkout') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Address</label>
                                <input type="text" class="form-control" id="address" required>
                            </div>
                            <div class="form-group">
                                <label for="card-name">Card Holder Name</label>
                                <input type="text" class="form-control" id="card-name" required>
                            </div>
                            <div class="form-group">
                                <label for="card-number">Card Number</label>
                                <input type="text" class="form-control" id="card-number">
                            </div>
                            <div class="row">
                                <div class="col-4">
                                <div class="form-group">
                                    <label for="card-expiration-month">Expiration Month</label>
                                    <input type="text" class="form-control" id="card-expiration-month" required>
                                </div>
                                </div>
                                <div class="col-4">
                                <div class="form-group">
                                    <label for="card-expiration-year">Expiration Year</label>
                                    <input type="text" class="form-control" id="card-expiration-year" required>
                                </div>
                                </div>
                                <div class="col-4">
                                <div class="form-group">
                                    <label for="cvc">CVC</label>
                                    <input type="text" class="form-control" id="cvc" required>
                                </div>
                            </div>
                            </div>
                            <button type="submit" class="btn btn-success col-6 btn-block mx-auto">Submit</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

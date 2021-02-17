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
                        @if (Session::get('error'))
                            <div id="charge-error" class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif

                        <form role="form" action="{{ route('submit.checkout') }}" method="post" class="stripe-payment"
                            data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                            @csrf

                             <div class='form-group'>
                                <div class='required'>
                                    <label class='control-label'>Name</label> <input class='form-control' size='4'
                                        type='text' name="name" required>
                                </div>
                            </div>

                             <div class='form-group'>
                                <div class='required'>
                                    <label class='control-label'>Address</label> <input class='form-control' size='4'
                                        type='text' name="address" required>
                                </div>
                            </div>

                            <div class='form-group'>
                                <div class='required'>
                                    <label class='control-label'>Name on Card</label> <input class='form-control' size='4'
                                        type='text' required>
                                </div>
                            </div>

                            <div class='form-group'>
                                <div class='required'>
                                    <label class='control-label'>Card Number</label> <input autocomplete='off'
                                        class='form-control card-num' size='20' type='text' required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <div class="row">

                                <div class='form-group col-12 col-md-4 cvc required'>
                                    <label class='control-label'>CVC</label>
                                    <input autocomplete='off' class='form-control card-cvc' placeholder='e.g 415' size='4'
                                        type='text' required>
                                </div>
                                <div class='col-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2' type='text' required>
                                </div>
                                <div class='col-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' required>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-success col-6 btn-block mx-auto">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function () {
        var $form = $(".stripe-payment");
        $('form.stripe-payment').bind('submit', function (e) {
            var $form = $(".stripe-payment"),
                inputVal = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputVal),
                $errorStatus = $form.find('div.error'),
                valid = true;
            $errorStatus.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function (i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorStatus.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-num').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeRes);
            }

        });

        function stripeRes(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                var token = response['id'];
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });

</script>
@endsection

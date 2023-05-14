@extends('layouts.main')
@section('content')
    <main>
        <div class="container shadow booking p-5 mt-8 w-75 mx-auto">
            <div class="row">
                <div class="col-md-5 mb-5 booking-left pe-5">
                    <div class="booking-ltop w-25 mb-4 mx-auto">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <h3 class="text-center">Summary</h3>
                    <div class="summary">
                        <p>Course Name</p>
                        <hr>
                        <p>Amount: $19.99</p>
                        <hr>
                        <p class="float-end">Total: $19.99/- </p>
                    </div>
                </div>
                <div class="col-md-1 bk">
                </div>
                <div class="col-md-6">
                    <div id="booking-right">
                        <h3 class="mb-4">Purchase</h3>
                        <form action="#">
                            <div id="form-card" class="form-field">
                                <label for="cc-number">Cardholder Name</label>
                                <input id="cc-name" type="name" placeholder="Name on the card" required>
                            </div>
                            <div id="form-card" class="form-field">
                                <label for="cc-number">Card number:</label>
                                <input id="cc-number" maxlength="19" placeholder="1111 2222 3333 4444" required>
                            </div>

                            <div id="form-date" class="form-field">
                                <label for="expiry-month">Expiry date:</label>
                                <div class="w-50 float-start">
                                    <input  id="cc-month" maxlength="2" placeholder="Month/Year" required>
                                </div>
                            </div>

                            <div id="form-sec-code" class="form-field">
                                <label for="sec-code">CVV:</label>
                                <input class="w-50" type="password" maxlength="3" placeholder="123" required>
                            </div>

                            <button class="btn btn-outline-success rounded-pill w-25 mt-4" type="submit">Pay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection

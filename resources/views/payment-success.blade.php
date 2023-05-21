@extends('layouts.main')
@section('content')
    <main>
        <div class="container mt-8">
            <div class="success shadow p-3 w-50 mx-auto">
                <div class="success-icon d-flex justify-content-center">
                    <i class="fa-regular fa-circle-check"></i>
                </div>
                <h1 class="text-center my-4">Payment Successful</h1>
                <hr>
                <p>Thank you for your payment. Your transaction has been successfully processed.</p>
                <p class="text-danger">Order Details:</p>
                <div class="border px-3 pt-3 mb-5">
                    <ul class="payment-details">
                        <li>Order Number: {{ $msg1 }}</li>
                        <li>Date: {{ $currentDate }}</li>
                        <li>Total Amount: {{ $msg }}</li>
                    </ul>
                </div>
                <p>If you have any questions or concerns, please don't hesitate to contact our customer support.</p>
                <a href="{{ '/' }}" class="btn btn-outline-success">Go to Homepage</a>
            </div>
        </div>

    </main>
@endsection

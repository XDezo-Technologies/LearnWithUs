@extends('layouts.main')
@section('content')
    <main>
        <div class="container mt-8">
            <div class="success shadow p-3 w-50 mx-auto">
                <div class="failed-icon d-flex justify-content-center">
                    <i class="fa-regular fa-circle-xmark"></i>
                </div>
                <h1 class="text-center my-4">Payment Failed</h1>
                <hr>
                <p>We're sorry, but your payment was not successful.</p>
                <p>Please check the following:</p>
                <div class="border px-2 pt-3 mb-5">
                    <ul class="payment-details">
                        <li>Ensure that you have entered your payment details correctly.</li>
                        <li>Make sure you have sufficient funds in your account.</li>
                        <li>Check with your bank or payment provider for any issues.</li>
                    </ul>
                </div>
                <p>If you continue to experience problems or have any questions, please contact our customer support for
                    assistance.</p>
                <a href="{{ '/course-category' }}" class="btn btn-outline-success">Go Back</a>
            </div>
        </div>

    </main>
@endsection

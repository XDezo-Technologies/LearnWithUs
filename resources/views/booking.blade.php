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
                        <p>Course ID : {{ request()->query('courseID') }}</p>
                        <hr>
                        <p>Amount: Rs{{ request()->query('price') }}</p>
                        <hr>
                        <p class="float-end">Total: Rs {{ request()->query('price') }}/- </p>
                    </div>
                </div>
                <div class="col-md-1 bk">
                </div>
                <div class="col-md-6">
                    <div id="booking-right">
                        <h3 class="mb-4">Purchase</h3>
                        <form action="{{ route('esewa') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div id="form-card" class="form-field d-none">
                                <label for="courseID">Course ID</label>
                                <input id="courseID" name="courseID" type="text"
                                    value="{{ request()->query('courseID') }}" readonly>
                            </div>
                            <div id="form-card" class="form-field d-none">
                                <label for="amount">Amount</label>
                                <input id="amount" name="amount" type="number" value="{{ request()->query('price') }}"
                                    readonly>
                            </div>

                            <div id="form-card" class="form-field d-none">
                                <label for="userID">User ID</label>
                                <input id="userID" name="userID" type="text" value="{{ Auth::user()->id }}" readonly>
                            </div>

                            <div id="form-card" class="form-field d-none">
                                <label for="name">Name</label>
                                <input id="name" name="name" type="text" value="{{ Auth::user()->name }}"
                                    readonly>
                            </div>

                            <div id="form-card" class="form-field d-none">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email" value="{{ Auth::user()->email }}"
                                    readonly>
                            </div>

                            <button class="btn btn-outline-success rounded-pill mt-4" type="submit">Pay with eSewa</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection

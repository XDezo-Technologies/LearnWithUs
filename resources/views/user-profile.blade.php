@extends('layouts.main')
@section('content')
    <main>
        <div class="container w-75 mt-8 mx-auto user-p">
            <div class="row">
                <div class="col-md-4 pt-5">
                    <div class="user-profile">
                        <div class="icon-container">
                            <i class="fas fa-user-circle fa-5x"></i>
                        </div>
                        <h3>John Doe</h3>
                        <ul class="options-list">
                            <li><a href="{{ '/user-profile' }}">→Edit Profile</a></li>
                            <hr>
                            <li><a href="{{ '/wishlists' }}">→Your Wishlist</a></li>
                            <hr>
                            <li><a href="{{ '/purchased' }}">→Purchased courses</a></li>
                            <!-- Add more options here -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 px-3">
                    <div class="user-heading mt-2 mb-2">
                        <h3>User Profile</h3>
                    </div>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3 w-50 float-start ">
                            <label for="name" class=" col-form-label">Full Name</label>

                            <input type="text" class="form-control w-75" name="name" value="">
                        </div>
                        <div class="row mb-3 w-50 float-start">
                            <label for="address" class=" col-form-label">Address</label>

                            <input name="address" type="text" class="form-control w-75" value="">
                        </div>
                        <div class="row mb-3 w-50 float-start">
                            <label for="phone" class=" col-form-label">Phone no.</label>

                            <input name="phone" type="text" class="form-control w-75" value="">
                        </div>
                        <div class="row mb-3 w-50 float-start">
                            <label for="email" class=" col-form-label">Email</label>

                            <input name="email" type="text" class="form-control w-75" value="">
                        </div>
                        <div class="w-100 mb-3 float-start">
                            <button type="submit" class="btn btn-outline-success mt-1" name="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection

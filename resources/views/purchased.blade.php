@extends('layouts.main')
@section('content')
    <main>
        <div class="container w-75 mt-8 mx-auto user-p">
            <div class="row">
                <div class="col-md-4 mt-5">
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
                <div class="col-md-8 p-3">
                    <div class="user-heading mt-2 mb-2">
                        <h3>Purchased Course</h3>
                    </div>
                    <div class="row mb-5">
                        @if ($courses)
                            @foreach ($courses as $course)
                                <div class="col-md-6 mt-3">
                                    <div class="card">
                                        <div class="category-top">
                                            <div class="course-thumbnail"
                                                style="background-image: url({{ asset('uploads/' . $course->img) }});">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $course->title }}</h5>
                                            <p class="card-text mb-5">{{ $course->description }}</p>
                                            <a href="#" class="btn btn-course rounded-pill " type="button"
                                                data-toggle="collapse" data-target="#collapseExample{{ $course->courseID }}"
                                                aria-expanded="false"
                                                aria-controls="collapseExample{{ $course->courseID }}">View
                                                More<i class="fa-solid fa-arrow-down pt-1"></i></a>
                                            <div class="collapse mt-3" id="collapseExample{{ $course->courseID }}">
                                                <div>
                                                    <p>{{ $course->description2 }}</p>
                                                    <hr>
                                                    <div class="buy">
                                                        <p class="price w-50 float-start mt-3">Rs {{ $course->price }}/-
                                                        </p>
                                                        <a href="#"
                                                            class="btn btn-outline-success rounded-pill mt-2 w-50 float-end">Owned</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No course found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>



    </main>
@endsection

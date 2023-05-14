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
                        <div class="col-md-4">
                            <div class="card">
                                <div class="category-top">
                                    <img src="{{ asset('front-assets/img/course.png') }}"
                                        class="card-img-top pe-5 w-50 h-50 float-start" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Web Development</h5>
                                    <p class="card-text mb-5">Description of course 1.</p>
                                    <a href="#" class="btn btn-course rounded-pill" type="button"
                                        data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">View More<i
                                            class="fa-solid fa-arrow-down pt-1"></i></a>
                                    <div class="collapse mt-3" id="collapseExample">
                                        <div>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                anderson cred nesciunt sapiente ea proident.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card res">
                                <div class="category-top">
                                    <img src="{{ asset('front-assets/img/course.png') }}"
                                        class="card-img-top pe-5 w-50 h-50 float-start" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Graphic Designing</h5>
                                    <p class="card-text mb-5">Description of course 2.</p>
                                    <a href="#" class="btn btn-course rounded-pill" type="button"
                                        data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false"
                                        aria-controls="collapseExample2">View More<i
                                            class="fa-solid fa-arrow-down pt-1"></i></a>
                                    <div class="collapse mt-3" id="collapseExample2">
                                        <div>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                anderson cred nesciunt sapiente ea proident.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="category-top">
                                    <img src="{{ asset('front-assets/img/course.png') }}"
                                        class="card-img-top pe-5 w-50 h-50 float-start" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Mobile App Development</h5>
                                    <p class="card-text mb-5">Description of course 3.</p>
                                    <a href="#" class="btn btn-course rounded-pill" type="button"
                                        data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false"
                                        aria-controls="collapseExample3">View More<i
                                            class="fa-solid fa-arrow-down pt-1"></i></a>
                                    <div class="collapse mt-3" id="collapseExample3">
                                        <div>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                anderson cred nesciunt sapiente ea proident.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="category-top">
                                    <img src="{{ asset('front-assets/img/course.png') }}"
                                        class="card-img-top pe-5 w-50 h-50 float-start" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Web Development</h5>
                                    <p class="card-text mb-5">Description of course 1.</p>
                                    <a href="#" class="btn btn-course rounded-pill" type="button"
                                        data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false"
                                        aria-controls="collapseExample4">View More<i
                                            class="fa-solid fa-arrow-down pt-1"></i></a>
                                    <div class="collapse mt-3" id="collapseExample4">
                                        <div>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                anderson cred nesciunt sapiente ea proident.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card res">
                                <div class="category-top">
                                    <img src="{{ asset('front-assets/img/course.png') }}"
                                        class="card-img-top pe-5 w-50 h-50 float-start" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Graphic Designing</h5>
                                    <p class="card-text mb-5">Description of course 2.</p>
                                    <a href="#" class="btn btn-course rounded-pill" type="button"
                                        data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false"
                                        aria-controls="collapseExample5">View More<i
                                            class="fa-solid fa-arrow-down pt-1"></i></a>
                                    <div class="collapse mt-3" id="collapseExample5">
                                        <div>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                anderson cred nesciunt sapiente ea proident.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="category-top">
                                    <img src="{{ asset('front-assets/img/course.png') }}"
                                        class="card-img-top pe-5 w-50 h-50 float-start" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Mobile App Development</h5>
                                    <p class="card-text mb-5">Description of course 3.</p>
                                    <a href="#" class="btn btn-course rounded-pill" type="button"
                                        data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false"
                                        aria-controls="collapseExample6">View More<i
                                            class="fa-solid fa-arrow-down pt-1"></i></a>
                                    <div class="collapse mt-3" id="collapseExample6">
                                        <div>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                anderson cred nesciunt sapiente ea proident.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main>
@endsection

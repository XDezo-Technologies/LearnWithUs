@extends('layouts.main')
@section('content')
    <main>

        {{-- Slider section --}}
        <section>
            @foreach ($sliders as $slider)
                <div class="curved-div mb-5" style="background-image:url({{ asset('uploads/' . $slider->img) }});">
                    <h1 class="mt-5">{{ $slider->title }}</h1>
                    <p class="p-4">
                        {{ $slider->description }}
                    </p>
                    <svg viewBox="0 0 1440 319">
                        <path fill="#fff" fill-opacity="1"
                            d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                        </path>
                    </svg>
                </div>
            @endforeach
        </section>
        {{-- Slider section ends --}}

        {{-- Partner section --}}
        <section class="partner bg-light">
            <div class="container">
                <div class="carousel-container">
                    <div class="inner-carousel">
                        <h1 class="text-center">Our clients</h1>
                        <div class="track">
                            @foreach ($clients as $client)
                                <div class="card-container">
                                    <div class="card card1"
                                        style="background-image:  url({{ asset('uploads/' . $client->img) }});">
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="nav">
                            <button class="prev"><i class="fa-solid fa-arrow-left"></i></i></button>
                            <button class="next"><i class="fa-solid fa-arrow-right"></i></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Partner section ends --}}

        {{-- about section --}}
        <section>
            <div class="mb-5 resp">
                <div class="about">
                    <div class="mb-4 about-left">
                        <hr class="w-25 bold">
                        <h2 class="mb-4">About Us</h2>
                        @foreach ($abouts as $about)
                            <p>{{ $about->title }}</p>
                            <p class="p-bottom">{{ $about->description }}</p>
                        @endforeach
                    </div>
                    <div class="count about-right">
                        <div class="container">
                            <div class="row about-row">
                                @foreach ($facts as $fact)
                                    <div class="col-sm-4 mb-4">
                                        <h2>{{ $fact->number }}</h2>
                                        <p>{{ $fact->title }}</p>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="overlap">
                        @foreach ($abouts as $about)
                            <img src="{{ asset('uploads/' . $about->img) }}" class="img-fluid w-75 h-50" alt="img">
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- about section ends --}}

        {{-- Course section --}}
        <section>
            <div class="container courses">
                <h2 class="mb-5">We Provide Many Type Of Courses</h2>
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ '/course-category' }}" class="float-end text-dark mb-4">See all ></a>
                    </div>
                </div>
                <div class="row mb-5">
                    @foreach ($courses as $course)
                        <div class="col-md-4 mb-3">
                            <div class="card" data-bs-toggle="modal" data-bs-target="#Modal{{ $course->courseID }}">
                                <div class="category-top">
                                    <img src="{{ asset('uploads/' . $course->img) }}" class="card-img-top w-100 rounded"
                                        alt="..." style=" height:200px;">
                                    <div class="btn btn-outline-danger rounded-pill w-25 float-end mt-5 me-2 "
                                        id="heartBtn" title="Wishlist" onclick="onAddToCart({{ $course->courseID }})">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $course->title }}</h5>
                                    <p class="card-text mb-5">{{ $course->description }}</p>
                                    <h5 class="btn btn-lg btn-success rounded-pill text-center" data-bs-toggle="modal"
                                        data-bs-target="#Modal{{ $course->courseID }}">View more</h5>
                                    <!-- Modal -->
                                </div>
                            </div>
                            <div class="modal fade" id="Modal{{ $course->courseID }}" tabindex="-1"
                                aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-5"><img src="{{ asset('uploads/' . $course->img) }}"
                                                        alt="course_img" class="w-100"
                                                        style="height: 250px
                                                        ">
                                                </div>
                                                <div class="col-lg-6 p-2">
                                                    <div class="card border-dark m-3 w-100">
                                                        <div class="card-body text-dark  text-left">
                                                            <h5>Name : <strong>{{ $course->title }}</strong></h5>
                                                            <h5>Post : <strong>{{ $course->time }}</strong></h5>

                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="card border-dark m-3 w-100">
                                                        <div class="card-body text-dark  text-left">
                                                            <div class="buy">
                                                                <p class="price w-50 float-start mt-3">Rs
                                                                    {{ $course->price }}/-</p>
                                                                <a href="{{ url('booking') }}?courseID={{ $course->courseID }}&price={{ $course->price }}"
                                                                    class="btn btn-outline-success rounded-pill mt-2 w-50 float-end">Buy</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-justify">{{ $course->description }}</p>

                                                <p class="text-justify">{{ $course->description2 }}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center">
                <a href="/course-category" class="text-light btn btn-success">View more -> </a>
            </div>
        </section>
        {{-- Course section ends --}}

        {{-- instructor section --}}
        <section class="bg-light mt-5">
            <div class="container">
                <div class="tutor py-5">
                    <h2>Our Expert Instructor</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ '/instructor' }}" class="float-end text-dark mb-4">See all ></a>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($teachers as $teacher)
                            <div class="col-md-4 mb-3">
                                <div class="card rounded shadow" data-bs-toggle="modal"
                                    data-bs-target="#modalId{{ $teacher->teacherID }}">
                                    <img src="{{ asset('uploads/' . $teacher->img) }}" class=" rounded shadow-img-top"
                                        alt="Project 1"
                                        style=" height:200px; 
                                        object-position: top;object-fit:cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ $teacher->name }}</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                        <div class="social-icons">
                                            <a href="{{ $teacher->facebook }}" class="text-dark"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="{{ $teacher->twitter }}" class="text-dark px-3"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="{{ $teacher->instagram }}" class="text-dark"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button trigger modal -->
                                <!-- Modal -->
                                <div class="modal fade" id="modalId{{ $teacher->teacherID }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg  ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">About Me</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-5"><img
                                                            src="{{ asset('uploads/' . $teacher->img) }}"
                                                            alt="teacher_img" class="w-100"></div>
                                                    <div class="col-lg-6 p-2">
                                                        <div class="card border-dark m-3 w-100">
                                                            <div class="card-body text-dark  text-left">
                                                                <h5>Name : <strong>{{ $teacher->name }}</strong></h5>
                                                                <h5>Post : <strong>{{ $teacher->post }}</strong></h5>
                                                                <h5>Field : <strong>{{ $teacher->field }}</strong></h5>
                                                                <h5>Experience :
                                                                    <strong>{{ $teacher->experience }}</strong>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <p class="text-justify">{{ $teacher->description }}</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </section>
        {{-- instructor section ends --}}

        {{-- testimonial section --}}
        <section>
            <div class="testi">
                <div class="testimonial">
                    <div class="testi-left p-5">
                        <div class="container p-5">
                            <h2 class="ps-5">Testimonials</h2>
                            <div class="row">
                                <div class="slideshow-container">
                                    <!-- Full-width slides/quotes -->
                                    @foreach ($testimonials as $testimonial)
                                        <div class="mySlides p-5">
                                            <div class="profile-picture mb-3">
                                                <img src="{{ asset('uploads/' . $testimonial->img) }}" width="90"
                                                    height="90" alt="Profile Picture">
                                            </div>
                                            <p class="name">{{ $testimonial->name }}</p>
                                            <div class="stars">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $testimonial->star)
                                                        <i class="fa fa-star "></i>
                                                    @endif
                                                @endfor
                                            </div>
                                            <p class="role">{{ $testimonial->post }}</p>
                                            <p class="review">
                                                {{ $testimonial->description }}</p>
                                        </div>
                                    @endforeach
                                    <!-- Next/prev buttons -->
                                    <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-arrow-left"></i></a>
                                    <a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-arrow-right"></i></a>

                                </div>

                                <!-- Dots/bullets/indicators -->
                                <div class="dot-container text-center px-5">
                                    @foreach ($testimonials as $index => $testimonial)
                                        <span class="dot" onclick="currentSlide({{ $index + 1 }})"></span>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="semicircle w-25"></div>
                <div class="testi-img w-25">
                    <img src="{{ asset('front-assets/img/testi-img.jpg') }}" alt="">
                </div>
            </div>
        </section>

        {{-- testimonial section ends --}}

        {{-- Join the list section --}}
        <div class="join-list">
            <div class="container  px-5 float-start">
                <h2 class="join-list__heading">Join the List</h2>
                <p class="join-list__description">Get the latest updates on new classes, free bootcamps, and more.</p>
                <div class="join-list__form">
                    <form action="{{ route('newsletter.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input name="email" type="email" class="join-list__input" placeholder="Enter your email">
                        <button class="join-list__button" type="submit" name="submit">Join</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Join the list section end --}}


    </main>
    <script>
        const onAddToCart = (courseID) => {
            const userID = {{ auth()->id() ?? 'null' }};
            if (userID === 'null') {
                return;
            } else {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch("/admin/wishlist", {
                        method: "POST",
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            id: userID,
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        const cartItems = data.message;
                        const allHeartBtn = document.querySelectorAll('#heartBtn');


                        //check if item is already in cart
                        let itemFoundOnCart = false;
                        let item = null;

                        cartItems.forEach((item1, idx) => {
                            if (courseID.toString() == item1.courseID && userID.toString() == item1
                                .userID) {
                                item = item1;
                                itemFoundOnCart = true;
                            }
                        })

                        //if item is already in cart
                        if (itemFoundOnCart === true) {
                            allHeartBtn[parseInt(item.courseID) - 1].classList.remove('active');

                            fetch("/admin/wishlist", {
                                    method: "POST",
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': csrfToken
                                    },
                                    body: JSON.stringify({
                                        userIdRemoveCart: (userID).toString(),
                                        courseIdRemoveCart: item.courseID,
                                    })
                                })
                                .then(res => res.json())
                                .then(data => {
                                    console.log(data)
                                })
                        }
                        //else add the item to cart
                        else {
                            allHeartBtn[parseInt(courseID) - 1].classList.add('active')
                            fetch('/admin/wishlist', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': csrfToken
                                    },
                                    body: JSON.stringify({
                                        courseID: courseID,
                                        userID: userID,
                                    })

                                })
                                .then(res => res.json())
                                .then(data => {
                                    console.log(data)
                                })
                        }

                    });
            }
        }

        try {
            const userID = {{ auth()->id() ?? 'null' }};
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch("/admin/wishlist", {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        id: userID,
                    })
                })
                .then(res => res.json())
                .then(data => {
                    const cartItems = data.message;
                    const allHeartBtn = document.querySelectorAll('#heartBtn');
                    cartItems.forEach((item, i) => {
                        allHeartBtn[parseInt(item.courseID) - 1].classList.add('active');
                    })
                })
        } catch (err) {

        }
    </script>
@endsection

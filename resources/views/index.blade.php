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
            <div class="text-center pt-3 pb-2">
                <h3 style="font-weight: bold">Our Trusted Partners</h3>
            </div>
            <div class="container">
                <div class="row px-2 justify-content-around">
                    <div class="col-sm-6 col-md-3 mb-4">
                        <img src="{{ asset('front-assets/img/partner1.png') }}" style="max-height: 150px;max-width:150px"
                            height="100%" width="100%" alt="Image" class="img-fluid rounded">
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4">
                        <img src="{{ asset('front-assets/img/partner2.png') }}" height="110" width="140" alt="Image"
                            class="img-fluid rounded">
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4">
                        <img src="{{ asset('front-assets/img/partner3.png') }}" height="110" width="140" alt="Image"
                            class="img-fluid rounded">
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4">
                        <img src="{{ asset('front-assets/img/partner4.png') }}" height="110" width="140" alt="Image"
                            class="img-fluid rounded">
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
                        <div class="col-md-4">
                            <div class="card">
                                <div class="category-top">
                                    <img src="{{ asset('uploads/' . $course->img) }}"
                                        class="card-img-top pe-5 w-100 h-70 float-start" alt="...">
                                    <div class="btn btn-outline-danger rounded-pill w-25 float-end mt-5 me-2 "
                                        id="heartBtn" title="Wishlist" onclick="onAddToCart({{ $course->courseID }})">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $course->title }}</h5>
                                    <p class="card-text mb-5">{{ $course->description }}</p>
                                    <a href="#" class="btn btn-course rounded-pill" type="button"
                                        data-toggle="collapse" data-target="#collapseExample{{ $course->courseID }}"
                                        aria-expanded="false" aria-controls="collapseExample{{ $course->courseID }}">View
                                        More<i class="fa-solid fa-arrow-down pt-1"></i></a>
                                    <div class="collapse mt-3" id="collapseExample{{ $course->courseID }}">
                                        <div>
                                            <p>{{ $course->description2 }}</p>
                                            <hr>
                                            <div class="buy">
                                                <p class="price w-50 float-start mt-3">Rs {{ $course->price }}/-</p>
                                                <a href="{{ url('booking') }}?courseID={{ $course->courseID }}&price={{ $course->price }}"
                                                    class="btn btn-outline-success rounded-pill mt-2 w-50 float-end">Buy</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Course section ends --}}

        {{-- course info section --}}
        <section>
            <div class="container course-info">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="course-skill pe-5">
                            <h2>Various type of course will scale up your skill</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, accusamus. Lorem ipsum
                                dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium.</p>
                            <a href="{{ '/course-detail' }}" class="btn btn-course rounded-pill w-50 mt-4">View More<i
                                    class="fa-solid fa-arrow-right pt-1"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="course-chart">
                            {{-- <svg id="sw-js-blob-svg" viewBox="0 0 100 100">
                                <defs>
                                    <linearGradient id="sw-gradient" x1="0" x2="1" y1="1"
                                        y2="0">
                                        <stop id="stop1" stop-color="rgba(232, 232, 232, 1)" offset="0%"></stop>
                                        <stop id="stop2" stop-color="rgba(232, 232, 232, 1)" offset="100%"></stop>
                                    </linearGradient>

                                    <!-- Define pattern for the image -->
                                    <pattern id="image-pattern" width="100%" height="100%"
                                        patternContentUnits="objectBoundingBox">
                                        <image xlink:href="{{ asset('front-assets/img/partner1.png') }}" width="1"
                                            height="1" preserveAspectRatio="xMidYMid meet" />
                                    </pattern>
                                </defs>

                                <!-- Original path with gradient fill -->
                                <path fill="url(#sw-gradient)"
                                    d="M25.1,-30.9C32.1,-24,37.2,-15.7,38.5,-6.9C39.9,1.8,37.6,11.1,32.9,18.9C28.3,26.7,21.3,33.2,13.2,36.1C5,39,-4.4,38.4,-13.1,35.5C-21.9,32.6,-30,27.3,-35.9,19.6C-41.8,11.8,-45.4,1.6,-43.9,-7.9C-42.4,-17.3,-35.7,-26,-27.5,-32.7C-19.4,-39.5,-9.7,-44.4,-0.3,-44C9,-43.6,18,-37.9,25.1,-30.9Z"
                                    width="100%" height="100%" transform="translate(50 50)" stroke-width="0"
                                    style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)"></path>

                                <!-- Rectangle using the image pattern -->
                                <rect fill="url(#image-pattern)" x="-50" y="-50" width="200"
                                    height="200" />
                            </svg> --}}
                            <svg id="sw-js-blob-svg" viewBox="0 0 100 100">
                                <defs>
                                    <linearGradient id="sw-gradient" x1="0" x2="1" y1="1"
                                        y2="0">
                                        <stop id="stop1" stop-color="rgba(232, 232, 232, 1)" offset="0%"></stop>
                                        <stop id="stop2" stop-color="rgba(232, 232, 232, 1)" offset="100%"></stop>
                                    </linearGradient>

                                    <!-- Define pattern for the image -->
                                    <pattern id="image-pattern" width="100%" height="100%"
                                        patternContentUnits="objectBoundingBox">
                                        <image xlink:href="{{ asset('front-assets/img/partner1.png') }}" width="1"
                                            height="1" preserveAspectRatio="xMidYMid slice" />
                                    </pattern>
                                </defs>

                                <!-- Grey background circle -->
                                <circle cx="50" cy="50" r="55" fill="url(#sw-gradient)" />

                                <!-- Image circle -->
                                <circle cx="50" cy="50" r="50" fill="url(#image-pattern)" />
                            </svg>



                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- course info section ends --}}

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
                            <div class="col-md-4">
                                <div class="card rounded shadow">
                                    <img src="{{ asset('uploads/' . $teacher->img) }}" class=" rounded shadow-img-top"
                                        alt="Project 1">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $teacher->name }}</h5>
                                        <p class="card-text">{{ $teacher->post }}</p>
                                        <div class="social-icons">
                                            <a href="#" class="text-dark"><i class="fab fa-facebook"></i></a>
                                            <a href="#" class="text-dark px-3"><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="text-dark"><i class="fab fa-instagram"></i></a>
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
            <div class="container w-40 px-5 float-start">
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

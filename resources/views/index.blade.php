@extends('layouts.main')
@section('content')
    <main>

        {{-- Slider section --}}
        <section>
            @foreach ($sliders as $slider)
                <div class="curved-div mt-5" style="background-image:url({{ asset('uploads/' . $slider->img) }});">
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
                        <p>We are a company that provides high-quality products and services to our customers. Our team
                            is dedicated to providing the best possible experience to every person we interact with.</p>
                        <p class="p-bottom">Whether you're a new customer or a long-time client, we strive to make
                            every interaction with
                            us a positive one.</p>
                    </div>
                    <div class="count about-right">
                        <div class="container">
                            <div class="row about-row">
                                <div class="col-sm-4 mb-4">
                                    <h2>10k+</h2>
                                    <p>Happy customer</p>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <h2>5k+</h2>
                                    <p>Trusted company</p>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <h2>20k+</h2>
                                    <p>Active engagement</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overlap">
                        <img src="{{ asset('front-assets/img/slider.jpg') }}" class="img-fluid w-75 h-50" alt="img">
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
                                                <p class="price w-50 float-start mt-3">${{ $course->price }}</p>
                                                <a href="{{ '/booking' }}"
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
                            <svg id="sw-js-blob-svg" viewBox="0 0 100 100">
                                <defs>
                                    <linearGradient id="sw-gradient" x1="0" x2="1" y1="1"
                                        y2="0">
                                        <stop id="stop1" stop-color="rgba(232, 232, 232, 1)" offset="0%">
                                        </stop>
                                        <stop id="stop2" stop-color="rgba(232, 232, 232, 1)" offset="100%">
                                        </stop>
                                    </linearGradient>
                                </defs>
                                <path fill="url(#sw-gradient)"
                                    d="M25.1,-30.9C32.1,-24,37.2,-15.7,38.5,-6.9C39.9,1.8,37.6,11.1,32.9,18.9C28.3,26.7,21.3,33.2,13.2,36.1C5,39,-4.4,38.4,-13.1,35.5C-21.9,32.6,-30,27.3,-35.9,19.6C-41.8,11.8,-45.4,1.6,-43.9,-7.9C-42.4,-17.3,-35.7,-26,-27.5,-32.7C-19.4,-39.5,-9.7,-44.4,-0.3,-44C9,-43.6,18,-37.9,25.1,-30.9Z"
                                    width="100%" height="100%" transform="translate(50 50)" stroke-width="0"
                                    style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)"></path>
                            </svg>
                            <div class="container">
                                <div class="row ">
                                    <div class="col-md-12 shadow course-time w-60">
                                        <h4 class="mt-4">Upcoming Classes</h4>
                                        <p>22nd May</p>
                                        <div class="card shadow mb-3 mx-1 bg-white">
                                            <div class="card-body row d-flex">
                                                {{-- @foreach ($courseData as $cours) --}}
                                                <div class="time col-md-12 row">
                                                    <div class="c-card-time mt-3 col-md-4 col-sm-4 col-xm-4 col-xs-4">
                                                        <h3>9:00</h3>
                                                    </div>
                                                    <div class="c-card-hr vl h-75 col-md-2 col-sm-2 col-xm-4 col-xs-2">
                                                        {{-- <hr> --}}
                                                    </div>
                                                    <div class="c-card-class m-0 p-0 col-md-6 col-sm-6 col-xm-6 col-xs-6">
                                                        <p class="m-0 p-0">Sophia Bataju</p>
                                                        <h5>Arts</h5>
                                                    </div>
                                                </div>
                                                {{-- @endforeach --}}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row course-tutor shadow w-40 p-0">
                                    <div class="col-md-12 mt-2">
                                        <div class="active-status px-3">
                                            <span style="font-size: 12px;">Active</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="profile-info">
                                            <div class="row">
                                                <div class="col-md-12 w-50 mx-auto mb-2">
                                                    <div class="profile-picture">
                                                        <img src="{{ asset('front-assets/img/team/team-1.jpg') }}"
                                                            width="90" height="90" alt="Profile Picture">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <div class="profile-details">
                                                        <h5>John Doe</h5>
                                                        <p>Project Manager</p>
                                                        <div class="rating">
                                                            <span class="stars">
                                                                <i class="fa fa-star checked"></i>
                                                                <i class="fa fa-star checked"></i>
                                                                <i class="fa fa-star checked"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <span class="reviews">(5 Reviews)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="shadow w-50  course-piechart">
                                    <h4 class="my-3 p-2">This week course Course</h4>
                                    <hr>
                                    {{-- <div class="list">
                                        <ul>
                                            <li>Ducks, geese, and waterfowl</li><hr>
                                            <li>Pheasants, grouse, and allies</li><hr>
                                            <li>Grebes</li><hr>
                                            <li>Pigeons and doves</li><hr>
                                            <li>Sandgrouse</li><hr>
                                            <li>Bustards</li><hr>
                                            <li>Cuckoos</li><hr>
                                            <li>Nightjars</li><hr>
                                            <li>Swifts</li><hr>
                                            <li>Cranes</li><hr>
                                            <li>Rails, gallinules and coots</li><hr>
                                            <li>Thick-knees</li><hr>
                                            <li>Stilts and avocets</li><hr>
                                            <li>Oystercatchers</li><hr>
                                            <li>Plovers and lapwings</li><hr>
                                            <li>Sandpipers and allies</li><hr>
                                            <li>Pratincoles and coursers</li><hr>
                                            <li>Skuas and jaegers</li><hr>
                                            <li>Auks, murres and puffins</li><hr>
                                            <li>Gulls, terns, and skimmers</li><hr>
                                            <li>Loons</li><hr>
                                            <li>Albatrosses</li><hr>
                                            <li>Storks</li>
                                        </ul>
                                    </div> --}}
                                    <div class="pie">
                                        <div class="pie-wrap">
                                            <div class="light-yellow entry">
                                                <p>25%</p>
                                                <p class="entry-value">aaa</p>
                                            </div>

                                            <div class="sky-blue entry">
                                                <p>25%</p>
                                                <p class="entry-value">aaa</p>
                                            </div>

                                            <div class="pink entry">
                                                <p>12.5%</p>
                                                <p class="entry-value">aaa </p>
                                            </div>

                                            <div class="purple entry">
                                                <p> 12.5%</p>
                                                <p class="entry-value">aaa</p>
                                            </div>

                                            <div class="green entry">
                                                <p> 12.5%</p>
                                                <p class="entry-value">aaa</p>
                                            </div>

                                            <div class="wheat entry">
                                                <p> 12.5%</p>
                                                <p class="entry-value">aaa</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <div class="col-md-4">
                            <div class="card rounded shadow">
                                <img src="{{ asset('front-assets/img/team/team-1.jpg') }}"
                                    class=" rounded shadow-img-top" alt="Project 1">
                                <div class="card-body">
                                    <h5 class="card-title">John Doe</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <div class="social-icons">
                                        <a href="#" class="text-dark"><i class="fab fa-facebook"></i></a>
                                        <a href="#" class="text-dark px-3"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="text-dark"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card rounded res shadow">
                                <img src="{{ asset('front-assets/img/team/team-2.jpg') }}" class="card-img-top"
                                    alt="Project 2">
                                <div class="card-body">
                                    <h5 class="card-title">Rosie Fernez</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <div class="social-icons">
                                        <a href="#" class="text-dark"><i class="fab fa-facebook"></i></a>
                                        <a href="#" class="text-dark px-3"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="text-dark"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card rounded shadow">
                                <img src="{{ asset('front-assets/img/team/team-3.jpg') }}" class="card-img-top"
                                    alt="Project 3">
                                <div class="card-body">
                                    <h5 class="card-title">Shawn Jayson</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <div class="social-icons">
                                        <a href="#" class="text-dark"><i class="fab fa-facebook"></i></a>
                                        <a href="#" class="text-dark px-3"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="text-dark"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <div class="mySlides p-5">
                                        <p class="name">Jane Doe</p>
                                        <div class="stars">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                        </div>
                                        <p class="role">Marketing Manager</p>
                                        <p class="review">Sed vel ex vitae odio pharetra auctor eget vitae dolor. Nam
                                            in
                                            ipsum in arcu bibendum sollicitudin eu non nisi. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="mySlides p-5">
                                        <p class="name">Sunita Bataju</p>
                                        <div class="stars">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p class="role">Graphic Designer</p>
                                        <p class="review">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                            Iure ea
                                            ipsam sit fugiat, voluptas velit quidem provident, exercitationem non
                                            repellat
                                            doloribus atque deserunt officia obcaecati aliquid libero illo quam
                                            molestias at
                                            quidem delectus molestiae?</p>
                                    </div>
                                    <div class="mySlides p-5">
                                        <p class="name">Aarush Shrestha</p>
                                        <div class="stars">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p class="role">Software Developer</p>
                                        <p class="review">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Amet,
                                            laboriosam quos autem sed architecto animi cum necessitatibus id dolore
                                            explicabo sint repudiandae rem adipisci, aliquam minus. Praesentium expedita
                                            minus, aliquam veniam quam assumenda deleniti aperiam ex nostrum laborum
                                            odit
                                            vel fuga animi quia nihil itaque exercitationem. Dolorem doloribus labore
                                            ad.
                                        </p>
                                    </div>

                                    <!-- Next/prev buttons -->
                                    <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-arrow-left"></i></a>
                                    <a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-arrow-right"></i></a>
                                </div>

                                <!-- Dots/bullets/indicators -->
                                <div class="dot-container text-center px-5">
                                    <span class="dot" onclick="currentSlide(1)"></span>
                                    <span class="dot" onclick="currentSlide(2)"></span>
                                    <span class="dot" onclick="currentSlide(3)"></span>
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
                    <input type="email" class="join-list__input" placeholder="Enter your email">
                    <button class="join-list__button">Join</button>
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

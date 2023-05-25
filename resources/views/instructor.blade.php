@extends('layouts.main')
@section('content')
    <main>
        <section>
            <div class="tutor-other half-bg mb-3">
                <div class="container">
                    <div class="tutor txt-outline py-5">
                        <h2>Our Expert Instructor</h2>
                        <div class="row mb-5">
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
            </div>
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
                                        <a class="prev" onclick="plusSlides(-1)"><i
                                                class="fa-solid fa-arrow-left"></i></a>
                                        <a class="next" onclick="plusSlides(1)"><i
                                                class="fa-solid fa-arrow-right"></i></a>

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

        </section>
    </main>
@endsection

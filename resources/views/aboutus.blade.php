@extends('layouts.main')
@section('content')
    <main>
        <section>
            {{-- slider --}}
            <div class="half-bg">
                <div class="image-section container pt-5">
                    <div class="image-wrapper">
                        <img src="{{ asset('front-assets/img/slider.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="text-overlay">
                        <h2>About US</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel luctus metus, eu fringilla nisi.
                            Proin
                            et
                            est non eros efficitur tincidunt. Suspendisse hendrerit, lorem vitae lobortis tristique, nisl
                            odio
                            semper
                            nunc, sit amet lobortis turpis velit nec ex.</p>
                    </div>
                </div>
                <div class="why-join-us mt-3">
                    <div class="container">
                        <h2 class="why-header">Learn From Online</h2>
                        <p class="why-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo purus
                            eu massa facilisis congue. Proin efficitur, quam eget egestas bibendum, ex elit mollis elit, a
                            lacinia elit elit sit amet velit.</p>
                    </div>
                </div>
                <div class="container">
                    <hr>
                </div>

                <div class="pb-5">
                    <div class="why-join-us">
                        <div class="container">
                            <h2 class="why-header">Let's Grow Your Edication Level</h2>
                            <p class="why-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo
                                purus
                                eu massa facilisis congue. Proin efficitur, quam eget egestas bibendum, ex elit mollis elit,
                                a
                                lacinia elit elit sit amet velit.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Why choose us --}}
            <div id="why-choose-us" class="py-5">
                <div class="container">
                    <h2 class="text-center mb-5">Why Choose Us?</h2>
                    <p class="lead text-center mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris.</p>

                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card about-card">
                                <div class="card-img-top">
                                    {{-- <img src="https://via.placeholder.com/300x200" class="w-100 h-100" alt="Card image cap"> --}}
                                    <div class="about-card-icon"><i class="fa-regular fa-calendar-days"></i></div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Qualified Staff</h5>
                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p>
                                    <button class="btn btn-outline-warning rounded-pill" type="button"
                                        data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        <i class="fa-solid fa-arrow-down"></i>
                                    </button>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                            anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card about-card">
                                <div class="card-img-top">
                                    {{-- <img src="https://via.placeholder.com/300x200" class="w-100 h-100" alt="Card image cap"> --}}
                                    <div class="about-card-icon"><i class="fa-regular fa-calendar-days"></i></div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Flexible Schedule</h5>
                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <p>
                                        <button class="btn btn-outline-warning rounded-pill" type="button"
                                            data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false"
                                            aria-controls="collapseExample2">
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseExample2">
                                        <div>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                            anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card about-card">
                                <div class="card-img-top">
                                    {{-- <img src="https://via.placeholder.com/300x200" class="w-100 h-100" alt="Card image cap"> --}}
                                    <div class="about-card-icon"><i class="fa-solid fa-envelope"></i></div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Flexible Schedule</h5>
                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <p>
                                        <button class="btn btn-outline-warning rounded-pill" type="button"
                                            data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false"
                                            aria-controls="collapseExample3">
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseExample3">
                                        <div>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                            anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card about-card">
                                <div class="card-img-top">
                                    {{-- <img src="https://via.placeholder.com/300x200" class="w-100 h-100" alt="Card image cap"> --}}
                                    <div class="about-card-icon"><i class="fa-solid fa-clipboard-user"></i></div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Qualified Staff</h5>
                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <p>
                                        <button class="btn btn-outline-warning rounded-pill" type="button"
                                            data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false"
                                            aria-controls="collapseExample4">
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseExample4">
                                        <div>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                            anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card about-card">
                                <div class="card-img-top">
                                    {{-- <img src="https://via.placeholder.com/300x200" class="w-100 h-100" alt="Card image cap"> --}}
                                    <div class="about-card-icon"><i class="fa-regular fa-calendar-days"></i></div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Flexible Schedule</h5>
                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <p>
                                        <button class="btn btn-outline-warning rounded-pill" type="button"
                                            data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false"
                                            aria-controls="collapseExample5">
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseExample5">
                                        <div>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                            anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card about-card">
                                <div class="card-img-top">
                                    {{-- <img src="https://via.placeholder.com/300x200" class="w-100 h-100" alt="Card image cap"> --}}
                                    <div class="about-card-icon"><i class="fa-solid fa-envelope"></i></div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Flexible Schedule</h5>
                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <p>
                                        <button class="btn btn-outline-warning rounded-pill" type="button"
                                            data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false"
                                            aria-controls="collapseExample6">
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseExample6">
                                        <div>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                            anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>


        {{-- slider ends --}}

    </main>

    {{-- <script>
        const toggleLinks = document.querySelectorAll(".card-toggle-link");

        toggleLinks.forEach((link) => {
            link.addEventListener("click", () => {
                const content = link.nextElementSibling;

                if (content.style.display === "block") {
                    content.style.display = "none";
                    link.innerText = "View More";
                } else {
                    content.style.display = "block";
                    link.innerText = "View Less";
                }
            });
        });
    </script> --}}
@endsection

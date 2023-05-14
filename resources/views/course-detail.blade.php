@extends('layouts.main')
@section('content')
    <main>

        <section>
            <div class="container course-info">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="course-skill pe-5">
                            <h2>Various type of course will scale up your skill</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, accusamus. Lorem ipsum
                                dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium.</p>
                                <a href="#" class="btn btn-course rounded-pill" type="button" data-toggle="collapse"
                                data-target="#collapseExample3" aria-expanded="false"
                                aria-controls="collapseExample3">View More<i class="fa-solid fa-arrow-down pt-1"></i></a>
                                <div class="collapse mt-3" id="collapseExample3">
                                    <div>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                        anderson cred nesciunt sapiente ea proident.
                                    </div>
                                </div>
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
                                                <div class="time col-md-12 row">
                                                    <div class="c-card-time mt-3 col-md-4 col-sm-4 col-xm-4 col-xs-4">
                                                        <h3>9:00</h3>
                                                    </div>
                                                    <div class="c-card-hr vl h-75 col-md-2 col-sm-2 col-xm-4 col-xs-2">
                                                        {{-- <hr> --}}
                                                    </div>
                                                    <div
                                                        class="c-card-class m-0 p-0 col-md-6 col-sm-6 col-xm-6 col-xs-6">
                                                        <p class="m-0 p-0">Sophia Bataju</p>
                                                        <h5>Arts</h5>
                                                    </div>
                                                </div>
                                                <div class="time mt-3 col-md-12 row">
                                                    <div class="c-card-time mt-2 col-md-4 col-sm-4">
                                                        <h3>10:00</h3>
                                                    </div>
                                                    <div class="c-card-hr vl-2 h-75 col-md-2 col-sm-2">
                                                        {{-- <hr> --}}
                                                    </div>
                                                    <div class="c-card-class m-0 p-0 col-md-6 col-sm-6">
                                                        <p class="m-0 p-0">Sandra Shrestha</p>
                                                        <h5>Graphic Design</h5>
                                                    </div>
                                                </div>
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
                                                <p class="entry-value">aaaa</p>
                                            </div>

                                            <div class="sky-blue entry">
                                                <p>25%</p>
                                                <p class="entry-value">bbbb</p>
                                            </div>

                                            <div class="pink entry">
                                                <p>12.5%</p>
                                                <p class="entry-value">cccc</p>
                                            </div>

                                            <div class="purple entry">
                                                <p> 12.5%</p>
                                                <p class="entry-value">dddd</p>
                                            </div>

                                            <div class="green entry">
                                                <p> 12.5%</p>
                                                <p class="entry-value">eeee</p>
                                            </div>

                                            <div class="wheat entry">
                                                <p> 12.5%</p>
                                                <p class="entry-value">ffff</p>
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

    </main>
@endsection   
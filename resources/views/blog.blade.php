@extends('layouts.main')
@section('content')
    <main>
        < class="main">

            <div class="heading">
                <h1>Our Latest News and Blog</h1>
                <p>Get Update About Latest Trend and Technology.</p>
            </div>

            <div class="blogs">

                <div class="container mx-5 w-75">

                    <div class="row ">
                        <div class="cardi col-md-4 ">
                            <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                            <p>25 July , 2019</p>
                            <a href="{{('/blog-detail')}}">
                                Laravel conditional validation in a simple way</a>
                        </div>
                        <div class="cardi col-md-4 ">
                            <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                            <p>25 July , 2019</p>
                            <a href="{{('/blog-detail')}}">Positivity is the key</a>
                        </div>
                        <div class="cardi col-md-4 ">
                            <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                            <p>25 July , 2019</p>
                            <a href="{{('/blog-detail')}}">Git Cheat Sheet for newbie and beginners</a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="cardi col-md-4">
                            <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                            <p>25 July , 2019</p>
                            <a href="{{('/blog-detail')}}"> How to Use Facebook As A Powerful Election Tool</a>
                        </div>
                    </div>
                </div>


                <!-- blog section -->
                <div class="right">
                    <div class="search-container">
                        <input type="text" placeholder="Search blog..." class="search-input">
                        <button type="submit" class="search-button btn-danger">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>


                    <div class="right-content">
                        <h3>Most Popular Posts</h3>

                        <div class="cardl">
                            <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                            <a href="{{('/blog-detail')}}">Laravel conditional validation in a simple way</a>
                        </div>
                        <div class="cardl">
                            <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                            <a href="{{('/blog-detail')}}">Positivity is the key</a>
                        </div>
                        <div class="cardl">
                            <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                            <a href="{{('/blog-detail')}}">Git Cheat Sheet for newbie and beginners</a>
                        </div>
                        <div class="cardl">
                            <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                            <a href="{{('/blog-detail')}}">How to Use Facebook As A Powerful Election Tool</a>
                        </div>
                    </div>
                </div>

            </div>
            <section class="w-25 mx-auto">
                <div aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link"> &lt; </a></li>
                        <li class="page-item"><a class="page-link info" href="#"
                                style="background-color: blue; color: #fff !important;">1</a></li>
                        <li class="page-item"><a class="page-link" href="#"> &gt; </a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
    
@endsection

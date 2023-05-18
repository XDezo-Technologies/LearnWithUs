@extends('layouts.main')
@section('content')
    <main>

        <div class="heading mt-8">
            <h1>Our Latest News and Blog</h1>
            <p>Your Searched data result</p>
        </div>

        <div class="blogs">

            <div class="container ms-2 w-75 p-5">

                <div class="row ">
                    @foreach ($blogs as $blog)
                        <div class="cardi col-md-3 bg-light m-2 overflow-hidden">
                            <img src="{{ asset('uploads/' . $blog->img) }}" alt="">
                            <p>{{ $blog->created_at->format('Y-m-d') }}</p>
                            <a href="{{ '/blog-detail' }}">
                                {{ $blog->title }}</a>
                        </div>
                    @endforeach
                </div>

            </div>


            <!-- blog section -->
            <div class="right">
                <form action="{{ route('search') }}" method="GET" enctype="multipart/form-data">
                    <div class="search-container">
                        <input type="text" placeholder="Search blog..." class="search-input" name="search">
                        <button type="submit" class="search-button btn-danger">
                            <i class="fas fa-search"></i>
                        </button>

                    </div>
                </form>


                <div class="right-content">
                    <h3>Most Popular Posts</h3>

                    <div class="cardl">
                        <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                        <a href="{{ '/blog-detail' }}">Laravel conditional validation in a simple way</a>
                    </div>
                    <div class="cardl">
                        <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                        <a href="{{ '/blog-detail' }}">Positivity is the key</a>
                    </div>
                    <div class="cardl">
                        <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                        <a href="{{ '/blog-detail' }}">Git Cheat Sheet for newbie and beginners</a>
                    </div>
                    <div class="cardl">
                        <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                        <a href="{{ '/blog-detail' }}">How to Use Facebook As A Powerful Election Tool</a>
                    </div>
                </div>
            </div>

        </div>
        <section class="w-25 mx-auto">
            <div aria-label="Page navigation example">
                {{ $blogs->links() }}
            </div>
        </section>
    </main>
@endsection

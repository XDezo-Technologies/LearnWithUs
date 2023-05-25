@extends('layouts.main')
@section('content')
    <main>

        <div class="heading mt-8">

            <h1>Our Latest News and Blog</h1>
            <p>Get Update About Latest Trend and Technology.</p>
            <p></p>
        </div>
        <form action="{{ route('search') }}" method="GET" enctype="multipart/form-data">
            <div class="search-container mx-auto">
                <input type="text" placeholder="Search blog..." class="search-input" name="search">
                <button type="submit" class="search-button btn-danger">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
        <div class="blogs">

            <div class="container">

                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="cardi col-md-3 col-lg-3 mb-2 bg-light overflow-hidden ">
                            <img src="{{ asset('uploads/' . $blog->img) }}" alt="">
                            <p>{{ $blog->created_at->format('Y-m-d') }}</p>
                            <a href="{{ url('/blog-detail', ['id' => $blog->id]) }}">
                                {{ $blog->title }}</a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </main>
@endsection

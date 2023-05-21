@extends('layouts.main')
@section('content')
    <main>

        <div class="heading mt-8">
            <h1>Our Latest News and Blog</h1>
            <p>Your Searched data result</p>
        </div>
        <section class="w-25 mx-auto paginate">
            <div aria-label="Page navigation example">
                {{ $blogs->links() }}
            </div>
        </section>
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
                    @php $count = 0; @endphp
                    @foreach ($blogs as $blog)
                        @if ($count < 5)
                            <div class="cardl">
                                <img src="{{ asset('uploads/' . $blog->img) }}" alt="">
                                <a href="{{ '/blog-detail' }}">{{ $blog->title }}</a>
                            </div>
                        @endif
                        @php $count++; @endphp
                    @endforeach
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

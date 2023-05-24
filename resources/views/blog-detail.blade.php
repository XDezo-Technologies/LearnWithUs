@extends('layouts.main')
@section('content')
    <main>
        <div class="container">
            <div class="blog-detail ">
                <img src="{{ asset('uploads/' . $blogs->img) }}" alt="" style="max-height: 500px">
                <div class="d-flex justify-content-between">
                    <p class="mt-3">{{ $blogs->created_at->format('Y-m-d') }}</p>
                    <p class="mt-3">{{ $blogs->type }}</p>
                </div>
                <h3 class="mb-5">
                    {{ $blogs->title }}</h3>
                <p>{{ $blogs->article }}
                    <hr>
                <p>{{ $blogs->article }}
                </p>
            </div>
        </div>
    </main>
@endsection

@extends('layouts.main')
@section('content')
    <main>
        <section class="">
            <div class="container courses mt-8">
                <h2 class="my-5">We Provide Many Type Of Courses</h2>
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

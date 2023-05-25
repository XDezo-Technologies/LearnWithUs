@extends('layouts.main')
@section('content')
    <main>
        <section class="">
            <div class="container courses mt-8">
                <h2 class="my-5">We Provide Many Type Of Courses</h2>
                <div class="row mb-5">
                    @foreach ($courses as $course)
                        <div class="col-md-4 mb-3">
                            <div class="card" data-bs-toggle="modal" data-bs-target="#Modal{{ $course->courseID }}">
                                <div class="category-top">
                                    <img src="{{ asset('uploads/' . $course->img) }}" class="card-img-top w-100 rounded"
                                        alt="..." style=" height:200px;">
                                    <div class="btn btn-outline-danger rounded-pill w-25 float-end mt-5 me-2 "
                                        id="heartBtn" title="Wishlist" onclick="onAddToCart({{ $course->courseID }})">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $course->title }}</h5>
                                    <p class="card-text mb-5">{{ $course->description }}</p>
                                    <h5 class="btn btn-lg btn-secondary rounded-pill text-center" data-bs-toggle="modal"
                                        data-bs-target="#Modal{{ $course->courseID }}">View more</h5>
                                    <!-- Modal -->
                                </div>
                            </div>
                            <div class="modal fade" id="Modal{{ $course->courseID }}" tabindex="-1"
                                aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-5"><img src="{{ asset('uploads/' . $course->img) }}"
                                                        alt="course_img" class="w-100"
                                                        style="height: 250px
                                                        ">
                                                </div>
                                                <div class="col-lg-6 p-2">
                                                    <div class="card border-dark m-3 w-100">
                                                        <div class="card-body text-dark  text-left">
                                                            <h5>Name : <strong>{{ $course->title }}</strong></h5>
                                                            <h5>Post : <strong>{{ $course->time }}</strong></h5>

                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="card border-dark m-3 w-100">
                                                        <div class="card-body text-dark  text-left">
                                                            <div class="buy">
                                                                <p class="price w-50 float-start mt-3">Rs
                                                                    {{ $course->price }}/-</p>
                                                                <a href="{{ url('booking') }}?courseID={{ $course->courseID }}&price={{ $course->price }}"
                                                                    class="btn btn-outline-success rounded-pill mt-2 w-50 float-end">Buy</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-justify">{{ $course->description }}</p>

                                                <p class="text-justify">{{ $course->description2 }}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
                <div>
                    {{ $courses->links() }}
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

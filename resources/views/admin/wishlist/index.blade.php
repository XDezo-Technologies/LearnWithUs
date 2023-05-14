@extends('admin.inc.main')
@section('main-container')
    <main id="main" class="main">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid p-4">
                    <div class="pagetitle">
                        @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="d-flex justify-content-between">
                            <h1>Manage About Details</h1>
                            <a href="{{ route('wishlist.create') }}" class="btn btn-primary btn-md "><i class="fa fa-plus"
                                    aria-hidden="true"></i></a>
                        </div>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                                <li class="breadcrumb-item active">Manage-about Detail</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <section class="section">
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <table
                                        class="table table-striped table-hover table-bordered table-lg table-responsive-lg">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.N</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($wishlist as $wish)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $wish->title }}</td>
                                                    <td>{{ $wish->description }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div>
                                        {{ $wishlist->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </main>
    <script>
        function firstFunction() {
            var x = document.querySelector('input[name=img]:checked').value;
            document.getElementById('imagebox').value = x; // use .innerHTML if we want data on label
        }
    </script>
@endsection

@extends('admin.inc.main')
@section('main-container')
    <main id="main" class="main">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid p-4">

                    <div class="pagetitle">
                        <div class="d-flex justify-content-between">
                            <h1>Show</h1>
                            <a href="{{ route('setting.index') }}" class="btn btn-primary btn-md ">Back</a>
                        </div>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                                <li class="breadcrumb-item active">show-setting</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <section class="section">
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('setting.update', $settings->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputSiteKey1" class="form-label">siteKey</label>
                                                    <input type="text" class="form-control" id="exampleInputSiteKey1"
                                                        aria-describedby="siteKeyHelp" name="siteKey"
                                                        value="{{ $settings->siteKey }}">
                                                    @error('siteKey')
                                                        <small>{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputSiteValue1" class="form-label">SiteValue</label>
                                                    <input type="text" class="form-control" id="exampleInputSiteValue1"
                                                        aria-describedby="siteValueHelp" name="siteValue"
                                                        value="{{ $settings->siteValue }}">
                                                    @error('siteValue')
                                                        <small>{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                        </div>
                                    </form>
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

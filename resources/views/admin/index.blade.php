@extends('admin.inc.main')
@section('main-container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                        <p>Here's Help for you. Don't ignore if you are totally bad</p>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Documentation</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><i class="fa fa-pencil" aria-hidden="true"></i>Edit</h3>

                                <p>Press this to Edit</p>
                            </div>
                            <div class="icon">
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><i class="fa fa-eye" aria-hidden="true"></i> View
                                </h3>

                                <p>Click Me to View data</p>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><i class="fa fa-trash" aria-hidden="true"></i>Delete</h3>
                                <p>Click Me to Delete</p>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><i class="fa fa-bars" aria-hidden="true"></i>Manage</h3>

                                <p>Click to manage uploded data </p>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    < Button</h3>

                                        <p class="text-justify">On Sidebar this button shows that, that sidebar option
                                            consist
                                            create
                                            and
                                            manage option.
                                        </p>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    @if (Auth::check() && Auth::user()->role == 1)
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>File Manager
                                    </h3>

                                    <p class="text-justify">All image should be uploded in Filemanager first.</p>
                                </div>
                                <a href="{{ route('file.create') }}" class="small-box-footer">Click me to upload
                                    file</i></a>
                            </div>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>Blogs
                                    </h3>

                                    <p class="text-justify">Teachers/admin can Post blogs From Here </p>
                                </div>
                                <a href="{{ route('blog.create') }}" class="small-box-footer">Click here to upload
                                    file</i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>Slider</h3>

                                    <p class="text-justify">You can upload slider from here though only 3 will be display
                                    </p>
                                </div>
                                <a href="{{ route('slider.create') }}" class="small-box-footer">Click me to create</i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>About</h3>

                                    <p class="text-justify">Upload About of Website by clicking below
                                    </p>
                                </div>
                                <a href="{{ route('about.create') }}" class="small-box-footer">Click me to add</i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>About features
                                    </h3>

                                    <p class="text-justify">Another Paragraph with image in about page</p>
                                </div>
                                <a href="{{ route('aboutFeature.create') }}" class="small-box-footer">Click here to
                                    create</i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>Setting</h3>
                                    <p class="text-justify">Every side config work is done here.
                                    </p>
                                </div>
                                <a href="{{ route('setting.index') }}" class="small-box-footer">Click me to create</i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>Courses</h3>

                                    <p class="text-justify">You can upload courses from here .</p>
                                </div>
                                <a href="{{ route('course.create') }}" class="small-box-footer">Click me to create</i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>Teachers
                                    </h3>

                                    <p class="text-justify">Teacher must register here too, So students can know.</p>
                                </div>
                                <a href="{{ route('teacher.create') }}" class="small-box-footer">Click here to
                                    create</i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>Testimonials</h3>
                                    <p class="text-justify">Add best choosen testimonials from here
                                    </p>
                                </div>
                                <a href="{{ route('testimonial.index') }}" class="small-box-footer">Click me to
                                    create</i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>Facts</h3>

                                    <p class="text-justify">Upload Facts of School by clicking below
                                    </p>
                                </div>
                                <a href="{{ route('fact.create') }}" class="small-box-footer">Click me to add</i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <!-- ./col -->
                    @endif
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

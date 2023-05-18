<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link text-decoration-none">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light ">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block text-decoration-none">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link">
                        <i class="fa-solid fa-bars"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                </li>
                @if (Auth::check() && Auth::user()->role == 1)
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa-regular fa-user"></i>
                            <p>
                                Admin
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.index') }}" class="nav-link">
                                    <i class="fa-solid fa-table"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-header">File Manager</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa fa-folder" aria-hidden="true"></i>
                            <p>
                                Filemanager
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('file.create') }}" class="nav-link">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('file.index') }}" class="nav-link">
                                    <i class="fa-solid fa-table"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa-solid fa-id-card"></i>
                            <p>
                                Clients
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('client.create') }}" class="nav-link">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('client.index') }}" class="nav-link">
                                    <i class="fa-solid fa-table"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa fa-image" aria-hidden="true"></i>
                            <p>
                                Sliders
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('slider.create') }}" class="nav-link">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('slider.index') }}" class="nav-link">
                                    <i class="fa-solid fa-table"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa-solid fa-network-wired"></i>
                            <p>
                                Why choose Us
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('whyChooseUs.create') }}" class="nav-link">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('whyChooseUs.index') }}" class="nav-link">
                                    <i class="fa-solid fa-table"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa-solid fa-id-card"></i>
                            <p>
                                Abouts
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('about.create') }}" class="nav-link">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about.index') }}" class="nav-link">
                                    <i class="fa-solid fa-table"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>
                            <p>
                                Facts
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('fact.create') }}" class="nav-link">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('fact.index') }}" class="nav-link">
                                    <i class="fa-solid fa-table"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            <p>
                                Courses
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('course.create') }}" class="nav-link">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('course.index') }}" class="nav-link">
                                    <i class="fa-solid fa-table"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <p>
                                Teachers
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('teacher.create') }}" class="nav-link">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('teacher.index') }}" class="nav-link">
                                    <i class="fa-solid fa-table"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa-solid fa-book-open"></i>
                            <p>
                                Blogs
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('blog.create') }}" class="nav-link">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('blog.index') }}" class="nav-link">
                                    <i class="fa-solid fa-table"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            <p>
                                About Features
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('aboutFeature.create') }}" class="nav-link">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutFeature.index') }}" class="nav-link">
                                    <i class="fa-solid fa-table"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            <p>
                                Setting
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('setting.create') }}" class="nav-link">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('setting.index') }}" class="nav-link">
                                    <i class="fa-solid fa-table"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <p>
                                Testimonials
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('testimonial.create') }}" class="nav-link">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>Create</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('testimonial.index') }}" class="nav-link">
                                    <i class="fa-solid fa-table"></i>
                                    <p>Manage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

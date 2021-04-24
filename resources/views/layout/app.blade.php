<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>Dashboard</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{ asset('assets/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{ asset('assets/node_modules/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- Morris CSS -->
    <link href="{{ asset('assets/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('dist/css/pages/dashboard1.css') }}" rel="stylesheet">
    <!-- Fileupload -->
    <link href="{{ asset('dist/css/pages/file-upload.css') }}" rel="stylesheet">
    <!-- Sweetalert -->
    <link href="{{ asset('assets/node_modules/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Myedulogic Administrator</p>
        </div>
    </div>

    <div>

        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('dashboard') }}">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('assets/images/logo-icon.png')  }}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ asset('assets/images/logo-light-icon.png')  }}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <span class="hidden-xs"><span class="font-bold">My Education</span>&nbsp;Logic</span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">


                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/images/users/1.jpg')  }}" alt="user" class=""> <span class="hidden-md-down"> {{ (\Illuminate\Support\Facades\Session::get('isSuperAdmin')) ? \Illuminate\Support\Facades\Session::get('user')['name'] : \Illuminate\Support\Facades\Session::get('user')['school_name'] }} &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">

{{--                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>--}}
                                <!-- text-->
{{--                                <div class="dropdown-divider"></div>--}}
                                <!-- text-->
{{--                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Profile</a>--}}
                                <!-- text-->
{{--                                <div class="dropdown-divider"></div>--}}
                                <!-- text-->
                                @if(\Illuminate\Support\Facades\Session::get('isSuperAdmin'))
                                    <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a>
                                @else
                                    <a class="dropdown-item" href="{{ route('school-logout') }}"><i class="fa fa-power-off"></i> Logout</a>
                                @endif
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
{{--                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>--}}
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="{{ asset('assets/images/users/1.jpg')  }}" alt="user-img" class="img-circle"><span class="hide-menu"> {{ (\Illuminate\Support\Facades\Session::get('isSuperAdmin')) ? \Illuminate\Support\Facades\Session::get('user')['name'] : \Illuminate\Support\Facades\Session::get('user')['school_name'] }} </span></a>
                            <ul aria-expanded="false" class="collapse">
{{--                                <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>--}}
{{--                                <li><a href="javascript:void(0)"><i class="ti-settings"></i> Profile</a></li>--}}
                                @if(\Illuminate\Support\Facades\Session::get('isSuperAdmin'))
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                                @else
                                    <li><a href="{{ route('school-logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                                @endif
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-calendar"></i><span class="hide-menu">Activities</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('activities') }}">All Activities</a></li>
                                @if(\Illuminate\Support\Facades\Session::get('isHeadSchool'))
                                    <li><a href="{{ route('add-activity') }}">Add Activities</a></li>
                                @endif
                            </ul>
                        </li>

                        @if(\Illuminate\Support\Facades\Session::get('isSuperAdmin') || \Illuminate\Support\Facades\Session::get('isHeadSchool'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-building"></i><span class="hide-menu"> {{ \Illuminate\Support\Facades\Session::get('isHeadSchool') ? 'School Branches' : 'Schools' }}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('all-school') }}">All {{ \Illuminate\Support\Facades\Session::get('isHeadSchool') ? 'Branches' : 'Schools' }}</a></li>
                                <li><a href="{{ route('add-school') }}">Add {{ \Illuminate\Support\Facades\Session::get('isHeadSchool') ? 'Branches' : 'School' }}</a></li>
                            </ul>
                        </li>
                        @endif

                        @if(\Illuminate\Support\Facades\Session::get('isSchool'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Subjects</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('all-subject') }}">All Subjects</a></li>
                                <li><a href="{{ route('add-subject') }}">Add Subject</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-home" aria-hidden="true"></i><span class="hide-menu">Rooms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('all-room') }}">All Rooms</a></li>
                                <li><a href="{{ route('add-room') }}">Add Room</a></li>
                            </ul>
                        </li>
                        @endif

                        @if(\Illuminate\Support\Facades\Session::get('isSchool') || \Illuminate\Support\Facades\Session::get('isHeadSchool'))
                        <li>
                            <a class="waves-effect waves-dark" href="#"><i class="icon-people"></i><span class="hide-menu">Parents</span></a>
                        </li>
                        @endif

                        @if(\Illuminate\Support\Facades\Session::get('isSchool') || \Illuminate\Support\Facades\Session::get('isHeadSchool'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-calendar"></i><span class="hide-menu">Learning Material</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all-books-videos.html">All Books</a></li>
                                <li><a href="add-books-videos.html">All Videos</a></li>
                                <li><a href="edit-books-videos.html">Other Learning Material</a></li>
                            </ul>
                        </li>
                        @endif

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-light-bulb"></i><span class="hide-menu">Notices</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('all-notice') }}">All Notices</a></li>
                                <li><a href="{{ route('add-notice') }}">Add Notices</a></li>
                            </ul>
                        </li>

                        @if(\Illuminate\Support\Facades\Session::get('isSuperAdmin'))
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-cogs"></i><span class="hide-menu">Manage</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="{{ route('all-subject') }}"><i class="fa fa-book"></i> All Subjects</a></li>
                                    <li><a href="{{ route('all-room') }}"><i class="fa fa-home" aria-hidden="true"></i> All Rooms</a></li>
                                </ul>
                            </li>
                        @endif

                        @if(\Illuminate\Support\Facades\Session::get('isSuperAdmin'))
                        <li>
                            <a class="waves-effect waves-dark" href="#"><i class="icon-people"></i><span class="hide-menu">Users Management</span></a>
                        </li>
                        @endif

{{--                        @if(\Illuminate\Support\Facades\Session::get('isSchool'))--}}
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-home" aria-hidden="true"></i><span class="hide-menu">Teachers</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('all-teachers') }}">All Teachers</a></li>
                                <li><a href="{{ route('add-teachers') }}">Add Teacher</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-home" aria-hidden="true"></i><span class="hide-menu">Students</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('all-students') }}">All Students</a></li>
                                <li><a href="{{ route('add-students') }}">Add Student</a></li>
                            </ul>
                        </li>
{{--                        @endif--}}

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © {{ date('Y') }} Edulogic
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script>
        var site_url = "{{ url('/') }}";
    </script>
    <script src="{{ asset('assets/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ asset('assets/node_modules/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{ asset('assets/node_modules/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <!-- Popup message jquery -->
    <script src="{{ asset('assets/node_modules/toast-master/js/jquery.toast.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('dist/js/pages/jasny-bootstrap.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('dist/js/dashboard1.js') }}"></script>
    <!-- Ajax -->
    <script src="{{ asset('js/ajax.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>

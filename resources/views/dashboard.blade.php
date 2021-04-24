@extends('layout.app')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">{{ (\Illuminate\Support\Facades\Session::get('isSuperAdmin')) ? \Illuminate\Support\Facades\Session::get('user')['name'] : \Illuminate\Support\Facades\Session::get('user')['school_name'] }} Dashboard</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">{{ (\Illuminate\Support\Facades\Session::get('isSuperAdmin')) ? \Illuminate\Support\Facades\Session::get('user')['name'] : \Illuminate\Support\Facades\Session::get('user')['school_name'] }} Dashboard</li>
                </ol>
                <!-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->
    <!-- .row -->
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Registered Schools</h5>
                    <div class="text-right"> <span class="text-muted">Active Schools</span>
                        <h2><!-- <sup><i class="ti-arrow-up text-success"></i></sup> --> 200</h2>
                    </div>
                    <!-- <span class="text-success">20%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 20%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Registered Students</h5>
                    <div class="text-right"> <span class="text-muted">Active Students</span>
                        <h2><!-- <sup><i class="ti-arrow-up text-success"></i></sup> --> 2500</h2>
                    </div>
                    <!-- <span class="text-success">20%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 20%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Registered Teachers</h5>
                    <div class="text-right"> <span class="text-muted">Active Teachers</span>
                        <h2><!-- <sup><i class="ti-arrow-up text-success"></i></sup> --> 80</h2>
                    </div>
                    <!-- <span class="text-success">20%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 20%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Registered Parents</h5>
                    <div class="text-right"> <span class="text-muted">Active Parents</span>
                        <h2><!-- <sup><i class="ti-arrow-up text-success"></i></sup> --> 80</h2>
                    </div>
                    <!-- <span class="text-success">20%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 20%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- End Info box -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Over Visitor, Our income , slaes different and  sales prediction -->
    <!-- ============================================================== -->
    <!-- .row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title text-uppercase">Registered Schools<br><!-- <small class="text-muted">All Earnings are in million $</small> --></h5>
                        <div class="ml-auto">
                            <ul class="list-inline font-12">
                                <li><i class="fa fa-circle text-dark"></i> Primary</li>
                                <li><i class="fa fa-circle text-info"></i> Secondary</li>
                                <li><i class="fa fa-circle text-success"></i> Elementary</li>
                            </ul>
                        </div>
                    </div>
                    <div id="morris-bar-chart" style="height:375px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card m-b-15">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Earning From Primary Schools</h5>
                            <div class="row">
                                <div class="col-6 m-t-30">
                                    <h1 class="text-info">$64057</h1>
                                    <p class="text-muted">APRIL 2017</p> <b>(150 Sales)</b> </div>
                                <div class="col-6">
                                    <div id="sparkline2dash" class="text-right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card bg-info m-b-15">
                        <div class="card-body">
                            <h5 class="text-white card-title text-uppercase">Earning From Secondary Schools</h5>
                            <div class="row">
                                <div class="col-6 m-t-30">
                                    <h1 class="text-white">$30447</h1>
                                    <p class="text-white">APRIL 2017</p> <b class="text-white">(110 Sales)</b> </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div id="sales1" class="text-right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- Comment - table -->
    <!-- ============================================================== -->
    <!-- row -->
    <div class="row">
        <div class="col-md-3">
            <img class="img-responsive" alt="user" src="{{ url('public/dist/images/big/c2.jpg')  }}">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Web Designing</h5>
                    <div class="m-b-30">
                        <a class="link list-icons" href="#">
                            <i class="ti-alarm-clock"></i> 2 Year
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-heart-o"></i> 38
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-usd"></i> 50
                        </a>
                    </div>
                    <p>
                        <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                    </p>
                    <p>
                        <span><i class="ti-user"></i> Professor: Jane Doe</span>
                    </p>
                    <p>
                        <span><i class="fa fa-graduation-cap"></i> Students: 200+</span>
                    </p>
                    <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <img class="img-responsive" alt="user" src="{{ url('public/dist/images/big/c1.jpg')  }}">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ios Development</h5>
                    <div class="m-b-30">
                        <a class="link list-icons" href="#">
                            <i class="ti-alarm-clock"></i> 2 Year
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-heart-o"></i> 38
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-usd"></i> 50
                        </a>
                    </div>
                    <p>
                        <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                    </p>
                    <p>
                        <span><i class="ti-user"></i> Professor: Jane Doe</span>
                    </p>
                    <p>
                        <span><i class="fa fa-graduation-cap"></i> Students: 200+</span>
                    </p>
                    <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <img class="img-responsive" alt="user" src="{{ url('public/dist/images/big/c4.jpg')  }}">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Android Development</h5>
                    <div class="m-b-30">
                        <a class="link list-icons" href="#">
                            <i class="ti-alarm-clock"></i> 2 Year
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-heart-o"></i> 38
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-usd"></i> 50
                        </a>
                    </div>
                    <p>
                        <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                    </p>
                    <p>
                        <span><i class="ti-user"></i> Professor: Jane Doe</span>
                    </p>
                    <p>
                        <span><i class="fa fa-graduation-cap"></i> Students: 200+</span>
                    </p>
                    <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <img class="img-responsive" alt="user" src="{{ url('public/dist/images/big/c3.jpg')  }}">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Web Development</h5>
                    <div class="m-b-30">
                        <a class="link list-icons" href="#">
                            <i class="ti-alarm-clock"></i> 2 Year
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-heart-o"></i> 38
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-usd"></i> 50
                        </a>
                    </div>
                    <p>
                        <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                    </p>
                    <p>
                        <span><i class="ti-user"></i> Professor: Jane Doe</span>
                    </p>
                    <p>
                        <span><i class="fa fa-graduation-cap"></i> Students: 200+</span>
                    </p>
                    <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <!-- ============================================================== -->
    <!-- End Comment - chats -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->

@endsection

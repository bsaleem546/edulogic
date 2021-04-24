@extends('layout.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Add Teacher</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Add Teacher</li>
                </ol><!--
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Teacher DETAILS</h5>
                    <form class="form-material m-t-40 create" action="{{ route('create-teachers') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-12" for="example-text">Teacher Code
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="teacher_code" class="form-control" placeholder="enter your teacher code">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-12" for="example-text">Teacher Name
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="name" class="form-control" placeholder="enter your teacher name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="bdate">Appointment Date</label>
                                    <input type="date" id="bdate" name="joined_date" class="form-control mydatepicker" placeholder="enter your appointment date">
                                </div>
                                <div class="col-sm-6">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Assigned Subject</label>
                                    <select class="form-control" name="subject_id">
                                        <option value="0">Select Subject</option>
                                        <option value="1">English</option>
                                        <option value="2">Maths</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label>Assigned Room</label>
                                    <select class="form-control" name="room_id">
                                        <option value="0">Select Room</option>
                                        <option value="1">Toddler</option>
                                        <option value="2">Infant</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="example-text">Blood Relation Person Name</label>
                                    <input type="text" id="example-text" name="relation" class="form-control" placeholder="enter your blood relation person name">                                 
                                </div>
                            </div>
                        </div> 
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="example-phone">Mobile Number</label>
                                    <input type="text" id="example-phone" name="contact" class="form-control" placeholder="enter your mobile number" data-mask="(999) 999-9999">
                                </div>  
                                <div class="col-md-6">
                                    <label for="example-phone">Alternate Mobile Number</label>
                                    <input type="text" id="example-phone" name="contact1" class="form-control" placeholder="enter your alternate mobile umber" data-mask="(999) 999-9999">
                                </div>                                             
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-12" for="position">Residential Address</label>
                                <div class="col-md-12">
                                    <input type="text" id="position" name="address" class="form-control" placeholder="e.g. Asst. Professor">
                                </div>
                            </div>
                        </div>    
                        <div class="form-group">
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <label>Profile Image</label>
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="example-email">Email</label>
                                    <input type="email" id="example-email" name="email" class="form-control" placeholder="enter your email">
                                </div>                                            
                            </div>
                        </div>
                        <input type="submit" class="btn btn-info waves-effect waves-light m-r-10" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
@endsection

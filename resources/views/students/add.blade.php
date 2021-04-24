@extends('layout.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Add Student</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Add Student</li>
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
                    <h5 class="card-title text-uppercase">STUDENT DETAILS</h5>
                    <form class="form-material m-t-40 create" action="{{ route('create-students') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-12" for="position">Student Registration Code</label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="std_code" class="form-control" placeholder="enter student registration code">
                                </div>
                            </div>
                        </div>  
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="example-text">First Name</label>
                                    <input type="text" id="example-text" name="fname" class="form-control" placeholder="enter student first name">
                                </div>
                                <div class="col-md-6">
                                    <label for="example-text">Last Name</label>
                                    <input type="text" id="example-text" name="lname" class="form-control" placeholder="enter student last name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="bdate">Date of Birth</label>
                                    <input type="text" id="bdate" name="dob" class="form-control mydatepicker" placeholder="enter your birth date">
                                </div>
                                <div class="col-sm-6">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender">
                                        <option value="0">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div> 
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="example-text">Guardian / Father Name</label>
                                    <input type="text" id="example-text" name="father_name" class="form-control" placeholder="enter your guardian / father name">                                 
                                </div>
                                <div class="col-md-6">
                                    <label for="example-phone">Contact Number</label>
                                    <input type="text" id="example-phone" name="contact" class="form-control" placeholder="enter contact number" data-mask="(999) 999-9999">
                                </div>                                            
                            </div>
                        </div> 
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="example-phone">Alternate Contact Number</label>
                                    <input type="text" id="example-phone" name="contact1" class="form-control" placeholder="enter alternate contact number" data-mask="(999) 999-9999">
                                </div>                                             
                                <div class="col-md-6">
                                    <label for="example-text">Mother Name</label>
                                    <input type="text" id="example-text" name="mother_name" class="form-control" placeholder="enter your mother name">                                 
                                </div>                                           
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="example-phone">Gurdian / Father Occupation</label>
                                    <input type="text" id="position" name="father_ocuppation" class="form-control" placeholder="guardian / father occupation">
                                </div>                                             
                                <div class="col-md-6">
                                    <label for="example-email">Email</label>
                                    <input type="email" id="example-email" name="email" class="form-control" placeholder="enter your email">
                                </div>                                        
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-12" for="position">Residential Address</label>
                                <div class="col-md-12">
                                    <input type="text" id="position" name="address" class="form-control" placeholder="enter your address">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="bdate">Admission Date</label>
                                    <input type="text" id="bdate" name="joined_at" class="form-control mydatepicker" placeholder="enter your admission date">
                                </div>
                                <div class="col-sm-6">
                                    <label>Admission Render</label>
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
                                <div class="col-sm-6">
                                    <label>Profile Image</label>
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="0">Select Status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>                                            
                            </div>
                        </div>
                        <input type="submit" value="SUBMIT" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
@endsection
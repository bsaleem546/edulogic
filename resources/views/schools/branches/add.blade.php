@extends('layout.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Add School</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Add School</li>
                </ol>
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
                    <h5 class="card-title text-uppercase">Basic Information</h5>
                    <form class="form-material create" action="{{ route('create-branch') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <div class="row">
                                <!-- <label class="col-md-12" for="example-text">Owner Name</span> -->
                                </label>
                                <div class="col-md-6 validate">
                                    <label for="example-text">Principal Name</label>
                                    <input type="text" name="school_principal" id="school_principal" class="form-control" placeholder="Enter principal name">
                                </div>
                                <div class="col-md-6 validate">
                                    <label for="example-phone">Principal Contact Details</label>
                                    <input type="tel" name="school_principal_no" id="school_principal_no" class="form-control" placeholder="Enter principal mobile number">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 validate">
                                    <label for="example-phone">School Landline Number</label>
                                    <input type="tel" name="school_landline" id="school_landline" class="form-control" placeholder="Enter school landline number">
                                </div>
                                <div class="col-md-6 validate">
                                    <label for="example-email">Email Address</label>
                                    <input type="text" name="school_email" id="school_email" class="form-control" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 validate">
                                    <label for="example-phone">Password</label>
                                    <input type="password" name="school_password" id="school_password" class="form-control" placeholder="*****">
                                </div>
                                <div class="col-md-6 validate">
                                    <label for="example-email">Confirm Password</label>
                                    <input type="password" name="school_confirm_password" id="school_confirm_password" class="form-control" placeholder="*****">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6 validate">
                                    <label>Weekly Open Days</label>
                                    <select class="form-control" name="school_days" id="school_days">
                                        <option value="">Select Option</option>
                                        <option value="Monday - Saturday">Monday - Saturday</option>
                                        <option value="Monday - Friday">Monday - Friday</option>
                                        <option value="Monday - Sunday">Monday - Sunday</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 validate">
                                    <label>School Shifts</label>
                                    <select class="form-control" name="school_shift" id="school_shift">
                                        <option value="">Select Option</option>
                                        <option value="Morning">Morning</option>
                                        <option value="Evening">Evening</option>
                                        <option value="Both">Both</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-12">Head Office  / School Address</label>
                                <div class="col-md-12 validate">
                                    <input type="text" name="school_address" id="school_address" class="form-control" placeholder="Enter school address">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6 validate">
                                    <label>State</label>
                                    <select class="form-control" name="school_state" id="school_state">
                                        <option value="">Select Option</option>
                                        <option value="Sindh">Sindh</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="KPK">KPK</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 validate">
                                    <label>City</label>
                                    <select class="form-control" name="school_city" id="school_city">
                                        <option value="">Select Option</option>
                                        <option value="Karachi">Karachi</option>
                                        <option value="Lahore">Lahore</option>
                                        <option value="Islamabad">Islamabad</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 validate">
                                    <label for="position">Zip Code</label>
                                    <input type="text" name="school_zip" id="school_zip" class="form-control" placeholder="Enter zip code">
                                </div>
                                <div class="col-sm-6 validate">
                                    <label>Website URL</label>
                                    <input type="text" name="school_website" id="school_website" class="form-control" placeholder="Enter website">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-12">Special Notes</label>
                                <div class="col-md-12 validate">
                                    <textarea class="form-control" rows="3" name="school_notes" id="school_notes"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                        <button type="button" class="btn btn-dark waves-effect waves-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="row">--}}
    {{--        <div class="col-sm-6">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-body">--}}
    {{--                    <h5 class="card-title text-uppercase">Account Information</h5>--}}
    {{--                    <form class="form-material">--}}
    {{--                        <div class="form-group">--}}
    {{--                            <div class="row">--}}
    {{--                                <label class="col-md-12" for="example-email">Email</span>--}}
    {{--                                </label>--}}
    {{--                                <div class="col-md-12">--}}
    {{--                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="enter your email">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="form-group">--}}
    {{--                            <div class="row">--}}
    {{--                                <label class="col-md-12" for="example-phone">Phone</span>--}}
    {{--                                </label>--}}
    {{--                                <div class="col-md-12">--}}
    {{--                                    <input type="text" id="example-phone" name="example-phone" class="form-control" placeholder="enter your phone" data-mask="(999) 999-9999">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="form-group">--}}
    {{--                            <div class="row">--}}
    {{--                                <label class="col-md-12" for="pwd">Password</span>--}}
    {{--                                </label>--}}
    {{--                                <div class="col-md-12">--}}
    {{--                                    <input type="password" id="pwd" name="pwd" class="form-control" placeholder="enter your password">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="form-group">--}}
    {{--                            <div class="row">--}}
    {{--                                <label class="col-md-12" for="cpwd">Confirm Password</span>--}}
    {{--                                </label>--}}
    {{--                                <div class="col-md-12">--}}
    {{--                                    <input type="password" id="cpwd" name="cpwd" class="form-control" placeholder="confirm your password">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>--}}
    {{--                        <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="col-sm-6">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-body">--}}
    {{--                    <h5 class="card-title text-uppercase">Social Information</h5>--}}
    {{--                    <form class="form-material">--}}
    {{--                        <div class="form-group">--}}
    {{--                            <div class="row">--}}
    {{--                                <label class="col-md-12" for="furl">Facebook URL</span>--}}
    {{--                                </label>--}}
    {{--                                <div class="col-md-12">--}}
    {{--                                    <input type="text" id="furl" name="furl" class="form-control">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="form-group">--}}
    {{--                            <div class="row">--}}
    {{--                                <label class="col-md-12" for="turl">Twitter URL</span>--}}
    {{--                                </label>--}}
    {{--                                <div class="col-md-12">--}}
    {{--                                    <input type="text" id="turl" name="turl" class="form-control">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="form-group">--}}
    {{--                            <div class="row">--}}
    {{--                                <label class="col-md-12" for="gurl">Google Plus URL</span>--}}
    {{--                                </label>--}}
    {{--                                <div class="col-md-12">--}}
    {{--                                    <input type="text" id="gurl" name="gurl" class="form-control">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="form-group">--}}
    {{--                            <div class="row">--}}
    {{--                                <label class="col-md-12" for="inurl">LinkedIN URL</span>--}}
    {{--                                </label>--}}
    {{--                                <div class="col-md-12">--}}
    {{--                                    <input type="text" id="inurl" name="inurl" class="form-control">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>--}}
    {{--                        <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
@endsection

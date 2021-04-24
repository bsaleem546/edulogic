@extends('layout.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Add Notice</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Add Notice</li>
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
                    <h5 class="card-title text-uppercase">NOTICE DETAILS</h5>
                    <form class="form-material m-t-40">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-12" for="example-text">Notice Title</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="example-text" class="form-control" placeholder="enter Notice Title">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Assign Type</label>
                                    <select class="form-control">
                                        <option>Select Assign Type</option>
                                        <option>All</option>
                                        <option>Teachers</option>
                                        <option>Parents</option>
                                        <option>Schools</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="bdate">Assign / Schedule Date</label>
                                    <input type="text" id="bdate" name="bdate" class="form-control mydatepicker" placeholder="enter date here">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-12">Description</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-12">Status</label>
                                <div class="col-sm-12">
                                    <select class="form-control">
                                        <option>Select Status</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                        <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
@endsection

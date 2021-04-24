@extends('layout.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Add Rooms</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Add Rooms</li>
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
                    <h5 class="card-title text-uppercase">ROOM DETAILS</h5>
                    <form class="form-material m-t-40 create" action="{{ route('create-school-room') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-12">Rooms</label>
                                <div class="col-sm-12 validate">
                                    <select class="form-control" id="room" name="room">
                                        <option value="">Select Option</option>
                                        @if(!empty($rooms))
                                            @foreach($rooms as $data)
                                                <option value="{{$data->id}}">{{$data->room_name}}</option>
                                            @endforeach
                                        @endif
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

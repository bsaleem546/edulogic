@extends('layout.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">All Schools</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">All Schools</li>
                </ol>
                <a href="{{ route('add-school') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Schools list</h5>
                    <hr>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Logo</th>
                                    <th>School Name</th>
                                    <th>Contact Number</th>
                                    <th>Type</th>
                                    <th>City</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($schools))
                                @foreach($schools as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td><img src="{{ url('uploads/'.$data->school_logo)  }}" alt="homepage" class="light-logo" width="50"/></td>
                                    <td><a href="{{ route('school-dashboard').'/'.$data->id }}">{{ $data->school_name }}</a></td>
                                    <td>{{ $data->school_landline }}</td>
                                    <td>{{ $data->school_type }}</td>
                                    <td>{{ $data->school_city }}</td>
                                    <td>{{ $data->school_status }}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i> </button>
                                        <button type="button" data-id="{{$data->id}}" data-token="{{ csrf_token() }}" data-type="schools" class="btn btn-danger btn-circle delete"><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
@endsection

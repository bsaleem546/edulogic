@extends('layout.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">All Students</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">All Students</li>
                </ol>
                <a href="{{ route('add-students') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
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
                    <h5 class="card-title">Students list</h5>
                    <hr>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Registration Code</th>
                                    <th>First Name</th>
                                    <th>Guardian / Father Name</th>
                                    <th>Contact Number</th>
                                    <th>Admission Date</th>
                                    <th>Room</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(!empty($students))
                                @foreach($students as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->std_code }}</td>
                                        <td>{{ $data->fname }}</td>
                                        <td>{{ $data->father_name }}</td>
                                        <td>{{ $data->contact }}</td>
                                        <td>{{ $data->joined_at }}</td>
                                        <td>{{ $data->room_id }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i> </button>
                                            <button type="button" data-id="{{$data->id}}" data-token="{{ csrf_token() }}" data-type="students" class="btn btn-danger btn-circle delete"><i class="fa fa-times"></i> </button>
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

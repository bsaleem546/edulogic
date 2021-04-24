@extends('layout.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Notices list</h5>
                    <hr>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Notice Title</th>
                                    <th>Assign / Schedule Date</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>New Year Holiday</td>
                                    <td>01-01-2021</td>
                                    <td>2021 New Year Holiday Off</td>
                                    <td>Active</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i> </button>
                    <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i> </button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Eid Holiday</td>
                                    <td>01-01-2021</td>
                                    <td>2021</td>
                                    <td>Active</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i> </button>
                    <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i> </button>
                                    </td>

                                </tr>

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

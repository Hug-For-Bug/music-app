@extends('admin.layouts.default')
@section('content')
    @push('after-style')
        <!-- Datatable -->
        <link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    @endpush

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data User</h4>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#basicModal">Add
                            User</button>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Modal body text goes here.</div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Gender</th>
                                        <th>Education</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Joining Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="rounded-circle" width="35"
                                                src="{{ asset('admin/images/profile/small/pic1.jpg') }}" alt="">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35"
                                                src="{{ asset('admin/images/profile/small/pic2.jpg') }}" alt="">
                                        </td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Female</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2011/07/25</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35"
                                                src="{{ asset('admin/images/profile/small/pic3.jpg') }}" alt="">
                                        </td>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical</td>
                                        <td>Male</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2009/01/12</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35"
                                                src="{{ asset('admin/images/profile/small/pic4.jpg') }}" alt="">
                                        </td>
                                        <td>Cedric Kelly</td>
                                        <td>Developer</td>
                                        <td>Male</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2012/03/29</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('after-script')
        <!-- Datatable -->
        <script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/js/plugins-init/datatables.init.js') }}"></script>
    @endpush
@endsection

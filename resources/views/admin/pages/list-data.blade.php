@extends('admin.layouts.default')
@section('content')
    @push('after-style')
        <!-- Datatable -->
        <link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    @endpush

    <div class="container">
        <div class="row">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Data</h4>
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs col-12">
                                <li class="nav-item col-6">
                                    <a class="nav-link active" data-toggle="tab" href="#admin"><i
                                            class="la la-home mr-2"></i> Add Admin</a>
                                </li>
                                <li class="nav-item col-6">
                                    <a class="nav-link" data-toggle="tab" href="#user"><i class="la la-user mr-2"></i>
                                        Add User</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane fade show active" id="admin" role="tabpanel">
                                    <div class="pt-4">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Data Admin</h4>

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal"
                                                        data-target="#modalAdmin">Add
                                                        Admin</button>

                                                    <!-- Modal -->
                                                    <div class="modal fade bd-example-modal-lg" id="modalAdmin"
                                                        data-backdrop="static">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Add Data Admin</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal"><span>&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-validation">
                                                                        <form class="form-valide" action="#"
                                                                            method="POST">
                                                                            <div class="row">
                                                                                <div class="col-6">

                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="val-username">Name
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="val-username"
                                                                                                name="val-username"
                                                                                                placeholder="Enter a username..">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="val-username">Email
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="val-username"
                                                                                                name="val-username"
                                                                                                placeholder="Enter a username..">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="val-username">Phone
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="val-username"
                                                                                                name="val-username"
                                                                                                placeholder="Enter a username..">
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                                <div class="col-xl-6">

                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="val-username">Gender
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <select class="col-lg-8"
                                                                                            id="inlineFormCustomSelect">
                                                                                            <option selected>Choose...
                                                                                            </option>
                                                                                            <option value="1">One
                                                                                            </option>
                                                                                            <option value="2">Two
                                                                                            </option>
                                                                                            <option value="3">Three
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="val-username">Password
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="val-username"
                                                                                                name="val-username"
                                                                                                placeholder="Enter a username..">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="val-username">Confirm
                                                                                            Password
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="val-username"
                                                                                                name="val-username"
                                                                                                placeholder="Enter a username..">
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-xl-12">
                                                                                    <div
                                                                                        class="form-group row basic-form custom_file_input">
                                                                                        <label
                                                                                            class="col-sm-2 col-form-label"
                                                                                            for="val-username">Photo
                                                                                        </label>
                                                                                        <div class="input-group col-lg-10">
                                                                                            <div class="custom-file">
                                                                                                <input type="file"
                                                                                                    class="custom-file-input">
                                                                                                <label
                                                                                                    class="custom-file-label">Choose
                                                                                                    file</label>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger light"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="example3" class="display min-w850">
                                                            <thead>
                                                                <tr>
                                                                    <th>Photo</th>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Phone</th>
                                                                    <th>Gender</th>
                                                                    <th>Joining Date</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><img class="rounded-circle" width="35"
                                                                            src="{{ asset('admin/images/profile/small/pic1.jpg') }}"
                                                                            alt="">
                                                                    </td>
                                                                    <td>Tiger Nixon</td>
                                                                    <td><a
                                                                            href="javascript:void(0);"><strong>info@example.com</strong></a>
                                                                    </td>
                                                                    <td><a href="javascript:void(0);"><strong>123 456
                                                                                7890</strong></a></td>
                                                                    <td>Male</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="#"
                                                                                class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                                    class="fa fa-pencil"></i></a>
                                                                            <a href="#"
                                                                                class="btn btn-danger shadow btn-xs sharp"><i
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

                                <div class="tab-pane fade" id="user">
                                    <div class="pt-4">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Data Admin</h4>

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary mb-2"
                                                        data-toggle="modal" data-target="#modalUser">Add
                                                        User</button>
                                                    <!-- Modal -->
                                                    <div class="modal fade bd-example-modal-lg" id="modalUser"
                                                        data-backdrop="static">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Add data User</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal"><span>&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-validation">
                                                                        <form class="form-valide" action="#"
                                                                            method="POST">
                                                                            <div class="row">
                                                                                <div class="col-6">

                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="val-username">Name
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="val-username"
                                                                                                name="val-username"
                                                                                                placeholder="Enter a username..">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="val-username">Email
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="val-username"
                                                                                                name="val-username"
                                                                                                placeholder="Enter a username..">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="val-username">Phone
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="val-username"
                                                                                                name="val-username"
                                                                                                placeholder="Enter a username..">
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                                <div class="col-xl-6">

                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="val-username">Gender
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <select class="col-lg-8"
                                                                                            id="inlineFormCustomSelect">
                                                                                            <option selected>Choose...
                                                                                            </option>
                                                                                            <option value="1">One
                                                                                            </option>
                                                                                            <option value="2">Two
                                                                                            </option>
                                                                                            <option value="3">Three
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="val-username">Password
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="val-username"
                                                                                                name="val-username"
                                                                                                placeholder="Enter a username..">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="val-username">Confirm
                                                                                            Password
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="val-username"
                                                                                                name="val-username"
                                                                                                placeholder="Enter a username..">
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-xl-12">
                                                                                    <div
                                                                                        class="form-group row basic-form custom_file_input">
                                                                                        <label
                                                                                            class="col-sm-2 col-form-label"
                                                                                            for="val-username">Photo
                                                                                        </label>
                                                                                        <div class="input-group col-lg-10">
                                                                                            <div class="custom-file">
                                                                                                <input type="file"
                                                                                                    class="custom-file-input">
                                                                                                <label
                                                                                                    class="custom-file-label">Choose
                                                                                                    file</label>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger light"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Save
                                                                        changes</button>
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
                                                                    <th>Photo</th>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Phone</th>
                                                                    <th>Gender</th>
                                                                    <th>Joining Date</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><img class="rounded-circle" width="35"
                                                                            src="{{ asset('admin/images/profile/small/pic1.jpg') }}"
                                                                            alt="">
                                                                    </td>
                                                                    <td>Tiger Nixon</td>
                                                                    <td><a
                                                                            href="javascript:void(0);"><strong>info@example.com</strong></a>
                                                                    </td>
                                                                    <td><a href="javascript:void(0);"><strong>123 456
                                                                                7890</strong></a></td>
                                                                    <td>Male</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="#"
                                                                                class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                                    class="fa fa-pencil"></i></a>
                                                                            <a href="#"
                                                                                class="btn btn-danger shadow btn-xs sharp"><i
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

                            </div>
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

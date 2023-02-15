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
                                                                        <form class="form-valide" method="POST"
                                                                            action="{{ url('administrator/post-data-user') }}">
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class="col-6">

                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="name">Name
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="name"
                                                                                                name="name"
                                                                                                placeholder="Username">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="email">Email
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="email"
                                                                                                class="form-control"
                                                                                                id="email"
                                                                                                name="email"
                                                                                                placeholder="Email">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="phone">Phone
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="tel"
                                                                                                class="form-control"
                                                                                                id="phone"
                                                                                                name="phone"
                                                                                                placeholder="Phone Number">
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                                <div class="col-xl-6">

                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="gender">Gender
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <select class="col-lg-8"
                                                                                            id="gender" name="gender">
                                                                                            <option selected>Choose Gender
                                                                                            </option>
                                                                                            <option value="male">Male
                                                                                            </option>
                                                                                            <option value="female">Female
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="password">Password
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="password"
                                                                                                class="form-control"
                                                                                                id="password"
                                                                                                name="password"
                                                                                                placeholder="Password">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="password_confirmation">Confirm
                                                                                            Password
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="password"
                                                                                                class="form-control"
                                                                                                id="password_confirmation"
                                                                                                name="password_confirmation"
                                                                                                placeholder="Confirm Password">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <div class="col-lg-8">
                                                                                            <input type="hidden"
                                                                                                class="form-control"
                                                                                                id="id_role"
                                                                                                name="id_role"
                                                                                                value="1">
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-xl-12">
                                                                                    <div
                                                                                        class="form-group row basic-form custom_file_input">
                                                                                        <label
                                                                                            class="col-sm-2 col-form-label"
                                                                                            for="photo">Photo
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
                                                                    <th>No</th>
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
                                                                @php
                                                                    $no = 1;
                                                                @endphp
                                                                @foreach ($listData as $data)
                                                                    @if ($data->id_role == 1)
                                                                        <tr>
                                                                            <td>{{ $no++ }}</td>
                                                                            <td><img class="rounded-circle" width="35"
                                                                                    src="{{ asset('admin/images/profile/small/pic1.jpg') }}"
                                                                                    alt="">
                                                                            </td>
                                                                            <td>{{ $data->name }}</td>
                                                                            <td><a
                                                                                    href="javascript:void(0);"><strong>{{ $data->email }}</strong></a>
                                                                            </td>
                                                                            <td><a
                                                                                    href="javascript:void(0);"><strong>{{ $data->phone }}</strong></a>
                                                                            </td>
                                                                            <td>{{ $data->gender }}</td>
                                                                            <td>{{ date('d F Y', strtotime($data->created_at)) }}
                                                                            </td>
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
                                                                    @endif
                                                                @endforeach
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
                                                                        <form class="form-valide" method="POST"
                                                                            action="{{ url('administrator/post-data-user') }}">
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class="col-6">

                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="name">Name
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="name"
                                                                                                name="name"
                                                                                                placeholder="Username">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="email">Email
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="email"
                                                                                                class="form-control"
                                                                                                id="email"
                                                                                                name="email"
                                                                                                placeholder="Email">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="phone">Phone
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="tel"
                                                                                                class="form-control"
                                                                                                id="phone"
                                                                                                name="phone"
                                                                                                placeholder="Phone Number">
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                                <div class="col-xl-6">

                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="gender">Gender
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <select class="col-lg-8"
                                                                                            id="gender" name="gender">
                                                                                            <option selected>Choose Gender
                                                                                            </option>
                                                                                            <option value="male">Male
                                                                                            </option>
                                                                                            <option value="female">Female
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="password">Password
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="password"
                                                                                                class="form-control"
                                                                                                id="password"
                                                                                                name="password"
                                                                                                placeholder="Password">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-lg-4 col-form-label"
                                                                                            for="password_confirmation">Confirm
                                                                                            Password
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <div class="col-lg-8">
                                                                                            <input type="password"
                                                                                                class="form-control"
                                                                                                id="password_confirmation"
                                                                                                name="password_confirmation"
                                                                                                placeholder="Confirm Password">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <div class="col-lg-8">
                                                                                            <input type="hidden"
                                                                                                class="form-control"
                                                                                                id="id_role"
                                                                                                name="id_role"
                                                                                                value="2">
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-xl-12">
                                                                                    <div
                                                                                        class="form-group row basic-form custom_file_input">
                                                                                        <label
                                                                                            class="col-sm-2 col-form-label"
                                                                                            for="photo">Photo
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
                                                                    <th>No</th>
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
                                                                @php
                                                                    $no = 1;
                                                                @endphp
                                                                @foreach ($listData as $data)
                                                                    @if ($data->id_role == 2)
                                                                        <tr>
                                                                            <td>{{ $no++ }}</td>
                                                                            <td><img class="rounded-circle" width="35"
                                                                                    src="{{ asset('admin/images/profile/small/pic1.jpg') }}"
                                                                                    alt="">
                                                                            </td>
                                                                            <td>{{ $data->name }}</td>
                                                                            <td><a
                                                                                    href="javascript:void(0);"><strong>{{ $data->email }}</strong></a>
                                                                            </td>
                                                                            <td><a
                                                                                    href="javascript:void(0);"><strong>{{ $data->phone }}</strong></a>
                                                                            </td>
                                                                            <td>{{ $data->gender }}</td>
                                                                            <td>{{ date('d F Y', strtotime($data->created_at)) }}
                                                                            </td>
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
                                                                    @endif
                                                                @endforeach
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

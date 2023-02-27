@extends('admin.layouts.default')
@section('content')
    @push('after-style')
        <!-- Datatable -->
        <link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
        <!--Toastr-->
    @endpush
    <link rel="stylesheet" href="{{ asset('admin/vendor/toastr/css/toastr.min.css') }}">

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

                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="example3" class="display min-w850">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    {{-- <th>uuid</th> --}}
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
                                                                            {{-- <td>{{ $data->id }}</td> --}}
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
                                                                                <div class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary light sharp"
                                                                                        data-toggle="dropdown">
                                                                                        <svg width="20px" height="20px"
                                                                                            viewBox="0 0 24 24"
                                                                                            version="1.1">
                                                                                            <g stroke="none"
                                                                                                stroke-width="1"
                                                                                                fill="none"
                                                                                                fill-rule="evenodd">
                                                                                                <rect x="0"
                                                                                                    y="0"
                                                                                                    width="24"
                                                                                                    height="24" />
                                                                                                <circle fill="#000000"
                                                                                                    cx="5"
                                                                                                    cy="12"
                                                                                                    r="2" />
                                                                                                <circle fill="#000000"
                                                                                                    cx="12"
                                                                                                    cy="12"
                                                                                                    r="2" />
                                                                                                <circle fill="#000000"
                                                                                                    cx="19"
                                                                                                    cy="12"
                                                                                                    r="2" />
                                                                                            </g>
                                                                                        </svg>
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#modalEditAdmin{{ $data->id }}"
                                                                                            data-toggle="modal">Edit
                                                                                        </a>
                                                                                        <a class="dropdown-item text-danger"
                                                                                            href="#modalDeleteAdmin{{ $data->id }}"
                                                                                            data-toggle="modal">Delete
                                                                                        </a>
                                                                                    </div>
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
                                                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal"
                                                        data-target="#modalUser">Add
                                                        User</button>

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
                                                                                <div class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary light sharp"
                                                                                        data-toggle="dropdown">
                                                                                        <svg width="20px" height="20px"
                                                                                            viewBox="0 0 24 24"
                                                                                            version="1.1">
                                                                                            <g stroke="none"
                                                                                                stroke-width="1"
                                                                                                fill="none"
                                                                                                fill-rule="evenodd">
                                                                                                <rect x="0"
                                                                                                    y="0"
                                                                                                    width="24"
                                                                                                    height="24" />
                                                                                                <circle fill="#000000"
                                                                                                    cx="5"
                                                                                                    cy="12"
                                                                                                    r="2" />
                                                                                                <circle fill="#000000"
                                                                                                    cx="12"
                                                                                                    cy="12"
                                                                                                    r="2" />
                                                                                                <circle fill="#000000"
                                                                                                    cx="19"
                                                                                                    cy="12"
                                                                                                    r="2" />
                                                                                            </g>
                                                                                        </svg>
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#modalEditUser{{ $data->id }}"
                                                                                            data-toggle="modal">Edit
                                                                                        </a>
                                                                                        <a class="dropdown-item text-danger"
                                                                                            href="#modalDeleteUser{{ $data->id }}"
                                                                                            data-toggle="modal">Delete
                                                                                        </a>
                                                                                    </div>
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

    <!-- Modal Create Admin -->
    <div class="modal fade bd-example-modal-lg" id="modalAdmin" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Data Admin</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-validation">
                        <form class="form-valide" id="formCreate" method="POST"
                            action="{{ url('administrator/add-data-user') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="name">Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="first_name" name="first_name"
                                                placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="name">
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="email">Email
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="phone">Phone
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="tel" class="form-control" id="phone" name="phone"
                                                placeholder="Phone Number" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-xl-6">

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="gender">Gender
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="col-lg-8" id="gender" name="gender">
                                            <option selected>Choose Gender
                                            </option>
                                            <option value="male">Male
                                            </option>
                                            <option value="female">Female
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="password">Password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="password_confirmation">Confirm
                                            Password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" id="password_confirmation"
                                                name="password_confirmation" placeholder="Confirm Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-8">
                                            <input type="hidden" class="form-control" id="id_role" name="id_role"
                                                value="1">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group row basic-form custom_file_input">
                                        <label class="col-sm-2 col-form-label" for="photo">Photo
                                        </label>
                                        <div class="input-group col-lg-10">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="photo"
                                                    id="photo" accept="image/*">
                                                <label class="custom-file-label">Choose
                                                    file</label>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Create Admin -->

    <!-- Modal Edit Admin -->
    @foreach ($listData as $data)
        <div class="modal fade bd-example-modal-lg" id="modalEditAdmin{{ $data->id }}" data-backdrop="static">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Admin</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-validation">
                            <form class="form-valide" id="formEdit" method="POST"
                                action="{{ url('administrator/edit-data-user') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-6">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="name">Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="first_name"
                                                    name="first_name" placeholder="First Name"
                                                    value="{{ $data->first_name }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="name">
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="last_name"
                                                    name="last_name" placeholder="Last Name"
                                                    value="{{ $data->last_name }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group
                                                    row">
                                            <label class="col-lg-4 col-form-label" for="email">Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email" value="{{ $data->email }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="phone">Phone
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="tel" class="form-control" id="phone" name="phone"
                                                    placeholder="Phone Number" value="{{ $data->phone }}" required>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xl-6">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="gender">Gender
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="col-lg-8" id="gender" name="gender">
                                                <option selected>Choose Gender
                                                </option>
                                                <option value="male">Male
                                                </option>
                                                <option value="female">Female
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="password">Password
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="password"
                                                    name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="password_confirmation">Confirm
                                                Password
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <input type="hidden" class="form-control" id="id_role" name="id_role"
                                                    value="1">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group row basic-form custom_file_input">
                                            <label class="col-sm-2 col-form-label" for="photo">Photo
                                            </label>
                                            <div class="input-group col-lg-10">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="photo"
                                                        id="photo" value="{{ $data->photo }}" accept="image/*">
                                                    <label class="custom-file-label">Choose
                                                        file</label>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save
                            changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <!-- End Modal Edit Admin -->

    <!-- Modal Delete Admin -->
    @foreach ($listData as $data)
        <div class="modal fade" id="modalDeleteAdmin{{ $data->id }}">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Data Admin</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/administrator/delete-data-user') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">

                            <div class="alert alert-danger text-center">
                                Are you sure you want to delete data named <b>{{ $data->name }}</b> ?
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- End Modal Delete Admin -->

    <!-- Modal Create User -->
    <div class="modal fade bd-example-modal-lg" id="modalUser" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add data User</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-validation">
                        <form class="form-valide" id="formCreate" method="POST"
                            action="{{ url('administrator/add-data-user') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="name">Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="first_name" name="first_name"
                                                placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="name">
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="email">Email
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="phone">Phone
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="tel" class="form-control" id="phone" name="phone"
                                                placeholder="Phone Number">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-xl-6">

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="gender">Gender
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="col-lg-8" id="gender" name="gender">
                                            <option selected>Choose Gender
                                            </option>
                                            <option value="male">Male
                                            </option>
                                            <option value="female">Female
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="password">Password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="password_confirmation">Confirm
                                            Password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" id="password_confirmation"
                                                name="password_confirmation" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-8">
                                            <input type="hidden" class="form-control" id="id_role" name="id_role"
                                                value="2">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-xl-12">
                                    <div class="form-group row basic-form custom_file_input">
                                        <label class="col-sm-2 col-form-label" for="photo">Photo
                                        </label>
                                        <div class="input-group col-lg-10">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="photo"
                                                    id="photo" accept="image/*">
                                                <label class="custom-file-label">Choose
                                                    file</label>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Create User -->

    <!-- Modal Edit User -->
    @foreach ($listData as $data)
        <div class="modal fade bd-example-modal-lg" id="modalEditUser{{ $data->id }}" data-backdrop="static">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data User</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-validation">
                            <form class="form-valide" method="POST" action="{{ url('administrator/edit-data-user') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-6">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="name">Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="first_name"
                                                    name="first_name" placeholder="First Name"
                                                    value="{{ $data->first_name }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="name">
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="last_name"
                                                    name="last_name" placeholder="Last Name"
                                                    value="{{ $data->last_name }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group
                                                    row">
                                            <label class="col-lg-4 col-form-label" for="email">Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email" value="{{ $data->email }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="phone">Phone
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="tel" class="form-control" id="phone" name="phone"
                                                    placeholder="Phone Number" value="{{ $data->phone }}" required>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xl-6">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="gender">Gender
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="col-lg-8" id="gender" name="gender">
                                                <option selected>Choose Gender
                                                </option>
                                                <option value="male">Male
                                                </option>
                                                <option value="female">Female
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="password">Password
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="password"
                                                    name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="password_confirmation">Confirm
                                                Password
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <input type="hidden" class="form-control" id="id_role" name="id_role"
                                                    value="2">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group row basic-form custom_file_input">
                                            <label class="col-sm-2 col-form-label" for="photo">Photo
                                            </label>
                                            <div class="input-group col-lg-10">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="photo"
                                                        id="photo" value="{{ $data->photo }}" accept="image/*">
                                                    <label class="custom-file-label">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save
                            changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <!-- End Modal Edit User -->

    <!-- Modal Delete User -->
    @foreach ($listData as $data)
        <div class="modal fade" id="modalDeleteUser{{ $data->id }}">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Data User</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/administrator/delete-data-user') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">

                            <div class="alert alert-danger text-center">
                                Are you sure you want to delete data named <b>{{ $data->name }}</b> ?
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- End Modal Delete User -->

    @push('after-script')
        <!-- Datatable -->
        <script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/js/plugins-init/datatables.init.js') }}"></script>
    @endpush
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="{{ asset('admin/vendor/toastr/js/toastr.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins-init/toastr-init.js') }}"></script>

    {{-- Message Success create --}}
    @if (Session::has('msg_success_user_create'))
        <script>
            toastrAlert("New Data User Added Successfully!", "Created");
        </script>
    @endif

    {{-- Message Success delete --}}
    @if (Session::has('msg_success_user_delete'))
        <script>
            toastr.success("User Data Deleted Successfully!", "Deleted", {
                positionClass: "toast-top-right",
                timeOut: 5e3,
                closeButton: !0,
                debug: !1,
                newestOnTop: !0,
                progressBar: !0,
                preventDuplicates: !0,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
                tapToDismiss: !1
            })
        </script>
    @endif
@endsection

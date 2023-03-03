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
                                                    <button type="button" class="btn btn-rounded btn-primary"
                                                        data-toggle="modal" data-target="#modalAdmin"><span
                                                            class="btn-icon-left text-primary"><i
                                                                class="fa fa-plus color-primary"></i>
                                                        </span>Add Admin</button>

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
                                                    <button type="button" class="btn btn-rounded btn-primary"
                                                        data-toggle="modal" data-target="#modalUser"><span
                                                            class="btn-icon-left text-primary"><i
                                                                class="fa fa-plus color-primary"></i>
                                                        </span>Add User</button>

                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="example3" class="display min-w850">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Photo</th>
                                                                    <th>Name</th>
                                                                    <th>Plan</th>
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
                                                                            @foreach ($plans as $plan)
                                                                                @if ($data->id_plan == $plan->id)
                                                                                    @if ($plan->plan_name === 'Free')
                                                                                        <td
                                                                                            class="badge badge-rounded badge-xs mt-3 badge-info">
                                                                                            {{ $plan->plan_name }}</td>
                                                                                    @endif
                                                                                    @if ($plan->plan_name === 'Silver')
                                                                                        <td
                                                                                            class="badge badge-rounded badge-xs mt-3 badge-light">
                                                                                            {{ $plan->plan_name }}</td>
                                                                                    @endif
                                                                                    {{-- @if ($plan->plan_name === 'Premium')
                                                                                        <td
                                                                                            class="badge badge-rounded badge-xs mt-3 badge-secondary">
                                                                                            {{ $plan->plan_name }}</td>
                                                                                    @endif --}}
                                                                                @endif
                                                                            @endforeach
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
                        <form class="form-valide" id="formCreateAdmin" method="POST"
                            action="{{ url('administrator/add-data-user') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-12" id="alertAdmin" style="display: none;">
                                    <div class="alert alert-danger solid alert-right-icon alert-dismissible show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" class="mr-2">
                                            <polygon
                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                            </polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line>
                                            <line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                        <button type="button" class="close h-100" id="closeAlertAdmin"
                                            aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                        </button>
                                        <strong>Error!</strong> <span id="alertMessageAdmin">Message Sending failed.</span>
                                    </div>
                                </div>
                                <div class="col-6">

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="name">Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" id="firstNameAdmin"
                                                name="first_name" placeholder="First Name" style="font-size:1.5ch">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" id="lastNameAdmin"
                                                name="last_name" placeholder="Last Name" style="font-size:1.5ch">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="email">Email
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="emailAdmin" name="email"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="phone">Phone
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="number" class="form-control" id="phoneAdmin" name="phone"
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
                                            <input type="password" class="form-control" id="passwordAdmin"
                                                name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="password_confirmation">Confirm
                                            Password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" id="passwordConfirmationAdmin"
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
                                            <input type="hidden" class="form-control" id="id_plan" name="id_plan"
                                                value="c5067739-b2ce-11ed-8049-1dcba2ca0ee7">
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
                    <button type="submit" class="btn btn-primary" id="btnCreateAdmin"> <span id="btnTextAdmin">Create
                            Admin</span></button>
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
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="first_name"
                                                    name="first_name" placeholder="First Name"
                                                    @php $name = $data->name;
                                                    $first_name = explode(' ', trim($name))[0]; @endphp
                                                    value="{{ $first_name }}" style="font-size:1.5ch">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="last_name"
                                                    name="last_name" placeholder="Last Name"
                                                    @php $name = $data->name;
                                                    $last_name = explode(' ', trim($name))[1]; @endphp
                                                    value="{{ $last_name }}" style="font-size:1.5ch">
                                            </div>
                                        </div>
                                        <div class="form-group
                                                    row">
                                            <label class="col-lg-4 col-form-label" for="email">Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email" value="{{ $data->email }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="phone">Phone
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="tel" class="form-control" id="phone" name="phone"
                                                    placeholder="Phone Number" value="{{ $data->phone }}">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xl-6">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="gender">Gender
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="col-lg-8" id="gender" name="gender">
                                                @if ($data->gender === 'male')
                                                    <option selected value="male">Male
                                                    </option>
                                                    <option value="female">Female
                                                    </option>
                                                @else
                                                    <option value="male">Male
                                                    </option>
                                                    <option selected value="female">Female
                                                    </option>
                                                @endif
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
                                                <input type="hidden" class="form-control" id="id_plan" name="id_plan"
                                                    value="c5067739-b2ce-11ed-8049-1dcba2ca0ee7">
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
                        <form class="form-valide" id="formCreateUser" method="POST"
                            action="{{ url('administrator/add-data-user') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12" id="alertUser" style="display: none;">
                                    <div class="alert alert-danger solid alert-right-icon alert-dismissible show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" class="mr-2">
                                            <polygon
                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                            </polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line>
                                            <line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                        <button type="button" class="close h-100" id="closeAlertUser"
                                            aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                        </button>
                                        <strong>Error!</strong> <span id="alertMessageUser">Message Sending failed.</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="name">Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" id="firstNameUser"
                                                name="first_name" placeholder="First Name" style="font-size:1.5ch">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" id="lastNameUser"
                                                name="last_name" placeholder="Last Name" style="font-size:1.5ch">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="email">Email
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="email" class="form-control" id="emailUser" name="email"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="phone">Phone
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="tel" class="form-control" id="phoneUser" name="phone"
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
                                            <input type="password" class="form-control" id="passwordUser"
                                                name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="password_confirmation">Confirm
                                            Password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" id="passwordConfirmationUser"
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
                                            <input type="hidden" class="form-control" id="id_plan" name="id_plan"
                                                value="c50673f0-b2ce-11ed-8049-1dcba2ca0ee7">
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
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="first_name"
                                                    name="first_name" placeholder="First Name"
                                                    @php $name = $data->name;
                                                    $first_name = explode(' ', trim($name))[0]; @endphp
                                                    value="{{ $first_name }}" style="font-size:1.5ch">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="last_name"
                                                    name="last_name" placeholder="Last Name"
                                                    @php $name = $data->name;
                                                    $last_name = explode(' ', trim($name))[1]; @endphp
                                                    value="{{ $last_name }}" style="font-size:1.5ch">
                                            </div>
                                        </div>

                                        <div class="form-group
                                                    row">
                                            <label class="col-lg-4 col-form-label" for="email">Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email" value="{{ $data->email }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="phone">Phone
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="tel" class="form-control" id="phone" name="phone"
                                                    placeholder="Phone Number" value="{{ $data->phone }}">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xl-6">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="gender">Gender
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="col-lg-8" id="gender" name="gender">
                                                @if ($data->gender === 'male')
                                                    <option selected value="male">Male
                                                    </option>
                                                    <option value="female">Female
                                                    </option>
                                                @else
                                                    <option value="male">Male
                                                    </option>
                                                    <option selected value="female">Female
                                                    </option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="id_plan">Plans
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="col-lg-8" id="id_plan" name="id_plan">
                                                <option selected>Choose Plans
                                                </option>
                                                @foreach ($plans as $plan)
                                                    @if ($plan->plan_name === $plan->plan_name)
                                                        <option value="{{ $plan->id }}"
                                                            {{ $plan->id == $data->id_plan ? 'selected' : '' }}>
                                                            {{ $plan->plan_name }}
                                                        </option>
                                                    @endif
                                                @endforeach
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
            toastr.success("New Data User Added Successfully!", "Created", {
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

    {{-- Message Success edit --}}
    @if (Session::has('msg_success_user_edit'))
        <script>
            toastr.success("User Data Updated Successfully!", "Updated", {
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

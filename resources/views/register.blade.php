@extends('user.layouts.default')
@section('content')
<main>
    <div id="primary">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-md-auto">
                    <div class="mt-5">
                        <div class="row grid">
                            <div class="col-md-7 card p-5">
                                <form class="form-material" id="formRegister" method="POST" action="{{ url('post-register') }}">
                                    @csrf
                                    <!-- Input -->
                                    <div class="body">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="name" id="name" type="text" class="form-control">
                                                <label class="form-label">Name</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="email" id="email" type="text" class="form-control">
                                                <label class="form-label">Email</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="password" id="password" type="password" class="form-control">
                                                <label class="form-label">Password</label>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- #END# Input -->
                                    <input type="submit" id="btnRegister" class="btn btn-primary btn-sm pl-4 pr-4 btn-block p-2" value="Create">
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--@Page Content-->
@endsection

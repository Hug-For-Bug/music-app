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
                                <form class="form-material" id="formLogin" method="GET" action="{{ url('signIn') }}">
                                    <!-- Input -->
                                    <div class="body">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="email" name="email" class="form-control">
                                                <label class="form-label">Email</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="password" id="password" name="password" class="form-control">
                                                <label class="form-label">Password</label>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="pt-5">
                                        <small><a href="#">Forgot Password?</a></small>
                                    </div>
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

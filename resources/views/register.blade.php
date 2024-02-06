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
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="password_confirmation" id="password-confirmation" type="password" class="form-control">
                                                <label class="form-label">Confirm Password</label>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- #END# Input -->
                                    <input type="submit" id="btnRegister" class="btn btn-primary btn-sm pl-4 pr-4 btn-block p-2" value="Create">
                                </form>


                            </div>
                            <div class="col-md-5  p-5">
                                <h1 class="mt-3 font-weight-lighter">Are You New Here?</h1>

                                <div class="pt-3 mb-5">
                                    <p>Lorem ipsum dolor sit amet, sapiente tenetur ut, veritatis.</p>
                                </div>
                                <input type="button" value="Create Account" class="btn btn-outline-primary s-14 pl-4 pr-4">
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

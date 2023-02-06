@extends('user.layouts.default')
@section('content')
    <main>
        <div id="primary">
            <div class="container">
                <div class="text-center s-14 l-s-2 my-5">
                    <a class="my-5" href="index.html">

                        <span>RECORD</span>

                    </a>
                </div>
                <div class="row">
                    <div class="col-md-10 mx-md-auto">
                        <div class="mt-5">
                            <div class="row grid">
                                <div class="col-md-7 card p-5">
                                    <form class="form-material" method="GET" action="{{ url('signIn') }}">
                                        @csrf
                                        <!-- Input -->
                                        <div class="body">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="email" class="form-control">
                                                    <label class="form-label">Email</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="password" class="form-control">
                                                    <label class="form-label">Password</label>
                                                </div>
                                            </div>


                                        </div>
                                        <!-- #END# Input -->
                                        <input type="submit" class="btn btn-outline-primary btn-sm pl-4 pr-4"
                                            value="Log In">

                                        <div class="pt-5">
                                            <small><a href="#">Forgot Password?</a></small>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-5  p-5">
                                    <h1 class="mt-3 font-weight-lighter">Are You New Here?</h1>

                                    <div class="pt-3 mb-5">
                                        <p>Lorem ipsum dolor sit amet, sapiente tenetur ut, veritatis.</p>
                                    </div>
                                    <a href="{{ url('register') }}"><input type="submit" value="Create Account"
                                            class="btn btn-outline-primary s-14 pl-4 pr-4"></a>



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

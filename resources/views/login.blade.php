@extends('user.layouts.default')
@section('content')
<main>
    <section id="primary">
        <div class="container">
            <header class="text-center my-5">
                <a href="index.html">
                    <span>RECORD</span>
                </a>
            </header>
            <div class="row">
                <div class="col-md-10 mx-md-auto">
                    <div class="mt-5">
                        <div class="row grid">
                            <div class="col-md-7 card p-5">
                                <form class="form-material" id="formLogin" method="POST" action="{{ url('signIn') }}">
                                    @csrf
                                    <!-- Input -->
                                    <div class="body">
                                        <div class="form-group form-float">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="form-line">
                                                <input type="text" id="email" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="form-line">
                                                <input type="password" id="password" name="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- #END# Input -->
                                    <input type="submit" id="btnLogin" class="btn btn-primary btn-sm pl-4 pr-4 p-2" value="Log In">

                                    <div class="pt-5">
                                        <small><a href="{{ url('password/reset') }}">Forgot Password?</a></small>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 p-5">
                                <h1 class="mt-3 font-weight-lighter">Are You New Here?</h1>
                                <div class="pt-3 mb-5">
                                    <p>Lorem ipsum dolor sit amet, sapiente tenetur ut, veritatis.</p>
                                </div>
                                <a href="{{ url('register') }}">
                                    <input type="submit" value="Create Account" class="btn btn-outline-primary s-14 pl-4 pr-4">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

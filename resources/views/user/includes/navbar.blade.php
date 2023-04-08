<div class="container relative  px-md-5 ">

    <a class="offcanvas dl-trigger paper-nav-toggle" type="button" data-toggle="offcanvas" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <i></i>
    </a>
    <a class="navbar-brand" href="{{ route('dashboard') }}">
        <div class="d-flex align-items-center s-14 l-s-2">
            <span>RECORD</span>
        </div>
    </a>
    <div class="paper_menu ml-auto">
        <div id="dl-menu" class="xv-menuwrapper responsive-menu">
            <ul class="dl-menu align-items-center">

                <li><a class="" href="{{ route('dashboard') }}">
                        <i class="menu-icon icon-home-1"></i> <span>Home</span>
                    </a>
                </li>

                <li><a class="" href="{{ url('categories') }}">
                        <i class="icon icon-layers-1"></i> <span>Categories</span>
                    </a>
                </li>

                <li><a class="" href="{{ url('albums') }}">
                        <i class="icon icon-windows "></i> <span>Albums</span>
                    </a>
                </li>

                <li><a class="" href="{{ url('artist') }}">
                        <i class="icon icon-users "></i> <span>Artists</span>
                    </a>
                </li>

                <li>
                    @if ($user)
                        <a href="{{ url('login') }}" class="btn btn-light font-weight-bold nav-btn"
                            style="color: black !important;">
                            {{ $user->name }}
                        </a>
                    @else
                        <a href="{{ url('login') }}" class="btn btn-primary nav-btn" data-toggle="modal"
                            data-target="#modalSignUp">
                            Sign In
                        </a>
                    @endif
                </li>
            </ul>

        </div>
        <!-- Login modal -->
    </div>


</div>

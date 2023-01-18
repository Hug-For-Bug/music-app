<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from xvelopers.com/demos/html/rekord/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 11:18:38 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('img/basic/favicon.html') }}" type="image/x-icon">
    <title>{{ $navbarType }} Record</title>
    {{-- style --}}
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body class="sidebar-mini sidebar-collapse theme-dark  sidebar-expanded-on-hover has-preloader" style="display: none;">
    <!-- Pre loader
  To disable preloader remove 'has-preloader' from body
 -->

    <div id="loader" class="loader">
        <div class="loader-container">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- @Pre loader-->
    <div id="rekord-app">


        <!-- Right Sidebar -->
        {{-- @if ($navbarType == 'top') --}}
        {{-- <aside class="control-sidebar fixed ">
            <div class="slimScroll">
                <div class="sidebar-header">
                    <h4>PlayList</h4>
                    <p>Awesome Collection for you</p>
                    <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
                </div>
                <div class="p-3">
                    <ul id="playlist" class="playlist list-group">
                        <li class="list-group-item my-1">
                            <a class="no-ajaxy media-url" href="assets/media/track1.mp3"
                                data-wave="assets/media/track1.json">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="icon-play s-28"></i>
                                    <figure class="avatar-md float-left mr-3 mt-1">
                                        <img class="r-5" src="assets/img/demo/a1.jpg" alt="">
                                    </figure>
                                    <div>
                                        <h6>alexander Pierce</h6>Atif Aslam
                                    </div>
                                    <span class="badge badge-primary badge-pill"> 5:03</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item my-1">
                            <a class="no-ajaxy media-url" href="assets/media/track2.mp3"
                                data-wave="assets/media/track2.json">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="icon-play s-28"></i>
                                    <figure class="avatar-md float-left mr-3 mt-1">
                                        <img class="r-5" src="assets/img/demo/a2.jpg" alt="">
                                    </figure>
                                    <div>
                                        <h6>alexander Pierce</h6>Atif Aslam
                                    </div>
                                    <span class="badge badge-primary badge-pill"> 5:03</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item my-1">
                            <a class="no-ajaxy media-url" href="assets/media/track3.mp3"
                                data-wave="assets/media/track3.json">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="icon-play s-28"></i>
                                    <figure class="avatar-md float-left mr-3 mt-1">
                                        <img class="r-5" src="assets/img/demo/a4.jpg" alt="">
                                    </figure>
                                    <div>
                                        <h6>alexander Pierce</h6>Atif Aslam
                                    </div>
                                    <span class="badge badge-primary badge-pill"> 5:03</span>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item my-1">
                            <a class="no-ajaxy media-url" href="assets/media/track1.mp3"
                                data-wave="assets/media/track1.json">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="icon-play s-28"></i>
                                    <figure class="avatar-md float-left mr-3 mt-1">
                                        <img class="r-5" src="assets/img/demo/a5.jpg" alt="">
                                    </figure>
                                    <div>
                                        <h6>alexander Pierce</h6>Atif Aslam
                                    </div>
                                    <span class="badge badge-primary badge-pill"> 5:03</span>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item my-1">
                            <a class="no-ajaxy media-url" href="assets/media/track2.mp3"
                                data-wave="assets/media/track2.json">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="icon-play s-28"></i>
                                    <figure class="avatar-md float-left mr-3 mt-1">
                                        <img class="r-5" src="assets/img/demo/a6.jpg" alt="">
                                    </figure>
                                    <div>
                                        <h6>alexander Pierce</h6>Atif Aslam
                                    </div>
                                    <span class="badge badge-primary badge-pill"> 5:03</span>
                                </div>
                            </a>
                        </li>


                    </ul>

                </div>
            </div>
        </aside> --}}
        {{-- @else --}}
        {{-- ($navbarType == 'side') --}}
        @if ($navbarType == 'side')
            {{-- @include('includes.sidebar') --}}
            <aside class="main-sidebar fixed offcanvas shadow" data-toggle="offcanvas">
                <div class="sidebar">
                    <ul class="sidebar-menu">
                        <li>
                            <a class=" active" href="{{ route('dashboard') }}">
                                <i class="icon icon-home-1 s-24"></i> <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a class="" href="{{ url('categories') }}">
                                <i class="icon icon-layers-1 s-24"></i> <span>Categories</span>
                            </a>
                        </li>

                        <li></li>
                        <li>
                            <a class="" href="{{ url('albums') }}">
                                <i class="icon icon-windows s-24"></i> <span>Albums</span>
                            </a>
                        </li>

                        <li>
                            <a class="" href="{{ url('artist') }}">
                                <i class="icon icon-users s-24"></i> <span>Artists</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
        @endif

        <!-- /.right-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
        <div class="control-sidebar-bg shadow  fixed"></div>


        <svg class="d-none">
            <defs>
                <symbol id="icon-cross" viewBox="0 0 24 24">
                    <title>cross</title>
                    <path
                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                </symbol>
            </defs>
        </svg>
        <div class="searchOverlay page">
            <button id="btn-searchOverlay-close" class="btn btn--searchOverlay-close"
                aria-label="Close searchOverlay form">
                <svg class="icon icon--cross">
                    <use xlink:href="#icon-cross"></use>
                </svg>
            </button>
            <div class="searchOverlay__inner  searchOverlay__inner--up">
                <form class="searchOverlay__form" action="https://xvelopers.com/demos/html/rekord/index.html">
                    <input class="searchOverlay__input" name="searchOverlay" type="text" placeholder="Search"
                        autocomplete="off" spellcheck="false" />
                    <span class="searchOverlay__info">Hit enter to searchOverlay or ESC to close</span>
                </form>
            </div>
            <div class="searchOverlay__inner searchOverlay__inner--down">
                <div class="searchOverlay__related">
                    <div class="searchOverlay__suggestion">
                        <div class="card mb-3">
                            <div class="card-header transparent b-b">
                                <strong>New Artists</strong>
                            </div>
                            <ul class="playlist list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="col-10">
                                            <figure class="avatar avatar-md float-left  mr-3 mt-1">
                                                <img src="assets/img/demo/u1.jpg" alt="">
                                            </figure>
                                            <h6>Zoe Foe</h6>
                                            <small>5 Albums - 50 Songs</small>
                                        </div>
                                        <a href="#" class="ml-auto"><i class="icon-more"></i></a>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="col-10">
                                            <figure class="avatar avatar-md float-left  mr-3 mt-1">
                                                <img src="assets/img/demo/u2.jpg" alt="">
                                            </figure>
                                            <h6>Zoe Foe</h6>
                                            <small>5 Albums - 50 Songs</small>
                                        </div>
                                        <a href="#" class="ml-auto"><i class="icon-more"></i></a>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="col-10">
                                            <figure class="avatar avatar-md float-left  mr-3 mt-1">
                                                <img src="assets/img/demo/u3.jpg" alt="">
                                            </figure>
                                            <h6>Zoe Foe</h6>
                                            <small>5 Albums - 50 Songs</small>
                                        </div>
                                        <a href="#" class="ml-auto"><i class="icon-more"></i></a>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="col-10">
                                            <figure class="avatar avatar-md float-left  mr-3 mt-1">
                                                <img src="assets/img/demo/u6.jpg" alt="">
                                            </figure>
                                            <h6>Zoe Foe</h6>
                                            <small>5 Albums - 50 Songs</small>
                                        </div>
                                        <a href="#" class="ml-auto"><i class="icon-more"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="searchOverlay__suggestion">
                        <div class="card mb-3">
                            <div class="card-header transparent b-b">
                                <strong>Events</strong>
                            </div>
                            <ul class="playlist list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center ">
                                        <div class="col-8 ">
                                            <a href="video-single.html">
                                                <h6>Battal of Bands</h6>
                                            </a>
                                            <small class="mt-1"><i class="icon-placeholder-3 mr-1 "></i> London
                                                Music Hall
                                            </small>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="text-lg-center  bg-primary r-10 p-2 text-white primary-bg">
                                                <div class="s-18">24</div>
                                                <small>July, 2019</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center ">
                                        <div class="col-8 ">
                                            <a href="video-single.html">
                                                <h6>Battal of Bands</h6>
                                            </a>
                                            <small class="mt-1"><i class="icon-placeholder-3 mr-1 "></i> London
                                                Music Hall
                                            </small>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="text-lg-center  bg-primary r-10 p-2 text-white primary-bg">
                                                <div class="s-18">08</div>
                                                <small>July, 2019</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center ">
                                        <div class="col-8 ">
                                            <a href="video-single.html">
                                                <h6>Battal of Bands</h6>
                                            </a>
                                            <small class="mt-1"><i class="icon-placeholder-3 mr-1 "></i> London
                                                Music Hall
                                            </small>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="text-lg-center  bg-primary r-10 p-2 text-white primary-bg">
                                                <div class="s-18">12</div>
                                                <small>July, 2019</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <nav class="mainnav navbar navbar-default justify-content-between">
            <!--to center logo replace classess by:  navbar-center -->

            <!-- Navbar -->
            @if ($navbarType == 'top')
                {{-- @include('includes.navbar') --}}
                <div class="container relative  px-md-5 ">

                    <a class="offcanvas dl-trigger paper-nav-toggle" type="button" data-toggle="offcanvas"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i></i>
                    </a>
                    <a class="navbar-brand" href="index.html">
                        <div class="d-flex align-items-center s-14 l-s-2">
                            <span>RECORD</span>
                        </div>
                    </a>
                    <div class="paper_menu ml-auto">
                        <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                            <ul class="dl-menu align-items-center">

                                <li id="menu-item-1357"
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children parent dropdown menu-item-1357">
                                    <a href="#"><i class="menu-icon icon-home-1"></i><span>Home</span></a>
                                    <ul class="lg-submenu sub-menu">
                                        <li id="menu-item-1171"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1188 current_page_item menu-item-1171 ">
                                            <a title="" href="categories.html" aria-current="page"><i
                                                    class="menu-icon icon-home-1"></i>
                                                <span>Home Default</span></a>
                                        </li>
                                        <li id="menu-item-1356"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1356">
                                            <a class="" href="categories.html">
                                                <i class="menu-icon icon-microphone-1"></i><span>Podcasts Home</span>
                                            </a>
                                        </li>
                                        <li id="menu-item-1554"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1554">
                                            <a href="../../../wp/themes/rekord-top-menu/home-solo/index.html"><i
                                                    class="menu-icon icon-windows"></i><span>Home Solo</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=""><a href="{{ route('dashboard') }}">Home</a>

                                </li>

                                <li><a class="" href="{{ url('categories') }}">
                                        <i class="icon icon-layers-1"></i> <span>Categories</span>
                                    </a>

                                <li><a class="" href="{{ url('albums') }}">
                                        <i class="icon icon-windows "></i> <span>Albums</span>
                                    </a>
                                <li>

                                <li><a class="" href="{{ url('artist') }}">
                                        <i class="icon icon-users "></i> <span>Artists</span>
                                    </a>
                                <li><a href="#modalSignUp" class="btn btn-primary nav-btn" data-toggle="modal"
                                        data-target="#modalSignUp">Sign
                                        Up</a>
                                </li>
                            </ul>

                        </div>
                        <!-- Login modal -->
                    </div>


                </div>
            @endif

        </nav>

        <nav id="menu" class="navbar-wrapper navbar-bottom-fixed shadow">
            <!--footer-->
            @include('includes.footer')

        </nav>

        <!--Page Content-->
        <main id="pageContent" class="page has-sidebard">



            <div class="container-fluid relative animatedParent animateOnce no-p">
                <div class="animated fadeInUpShort">
                    <!--Content-->
                    @yield('content')



                </div>
            </div>
        </main>
        <!--@Page Content-->
    </div>
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')


</body>

<!-- Mirrored from xvelopers.com/demos/html/rekord/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 11:21:02 GMT -->

</html>

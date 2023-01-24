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

<body class="sidebar-mini sidebar-collapse theme-dark  sidebar-expanded-on-hover " style="display: none;">
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

    {{-- <!-- @Pre loader--> --}}
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
            @include('includes.sidebar')
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
                @include('includes.navbar')
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

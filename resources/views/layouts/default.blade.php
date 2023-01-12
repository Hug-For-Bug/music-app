<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from xvelopers.com/demos/html/rekord/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 11:18:38 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('img/basic/favicon.html') }}" type="image/x-icon">
    <title>Record</title>
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
        <aside class="control-sidebar fixed ">
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
        </aside>
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
            @include('includes.navbar')


        </nav>

        <!--footer-->
        @include('includes.footer')

        <!--Page Content-->
        <main id="pageContent" class="page has-sidebard">



            <div class="container-fluid relative animatedParent animateOnce no-p">
                <div class="animated fadeInUpShort">
                    <!--Banner Slider-->
                    <section>
                        <div class="text-white">
                            <div class="lightSlider" data-item="1" data-controls="true" data-slide-margin="0"
                                data-gallery="false" data-pause="8000" data-pauseonhover="true" data-auto="false"
                                data-pager="false" data-loop="true">
                                <div class="xv-slide" data-bg-possition="top"
                                    style="background-image:url('assets/img/demo/b1.jpg');">
                                    <div class="wrapper has-bottom-gradient">
                                        <div class="p-md-5 p-3">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 fadeInRight animated">
                                                    <div class="xv-slider-content clearfix color-white">
                                                        <h1 class="s-64 mt-5 font-weight-lighter">Mitaric</h1>
                                                        <p class="s-24 font-weight-lighter">Sed eget orci eleifend enim
                                                            mattis
                                                            suscipit. <br>Suspendisse
                                                            potenti non ipsum.</p>
                                                        <div class="pt-3">
                                                            <a href="#" class="btn btn-primary btn-lg">Buy Now
                                                                At iTunes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-gradient"></div>
                                </div>
                            </div>
                        </div>
                        <!--slider Wrap-->
                    </section>
                    <!--@Banner Slider-->
                    <div class="wrapper p-md-5 p-3  ">
                        <!--New Releases-->
                        <section class="section">
                            <div class="d-flex relative align-items-center justify-content-between">
                                <div class="mb-4">
                                    <h4>New Releases For You</h4>
                                    <p>Enjoy some new awesome music</p>
                                </div>
                                <a href="albums.html">View Albums<i class="icon-angle-right ml-3"></i></a>
                            </div>
                            <div class="lightSlider has-items-overlay playlist" data-item="6" data-item-lg="3"
                                data-item-md="3" data-item-sm="2" data-auto="false" data-pager="false"
                                data-controls="true" data-loop="false">
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a8.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track2.mp3"
                                                                data-wave="assets/media/track2.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a1.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track2.mp3"
                                                                data-wave="assets/media/track2.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a2.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track2.mp3"
                                                                data-wave="assets/media/track2.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a4.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track2.mp3"
                                                                data-wave="assets/media/track2.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a5.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track2.mp3"
                                                                data-wave="assets/media/track2.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a6.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track2.mp3"
                                                                data-wave="assets/media/track2.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a7.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track2.mp3"
                                                                data-wave="assets/media/track2.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>

                            </div>
                        </section>
                        <!--@New Releases-->

                        <!--Latest Posts-->
                        <section class="section">
                            <div class="d-flex relative">
                                <div class="mb-4">
                                    <h4>Latest Posts</h4>
                                    <p>Checkout What's new at our blog</p>
                                </div>
                            </div>
                            <div class="lightSlider has-items-overlay" data-item="3" data-item-lg="2"
                                data-item-md="1" data-item-sm="1" data-auto="false" data-pager="false"
                                data-controls="true" data-loop="false">
                                <div class="card">
                                    <figure class="card-img figure">
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/v5.jpg" alt="Card image">
                                        </div>
                                        <div class="img-overlay"></div>
                                        <div class="has-bottom-gradient">
                                            <div class="d-flex">
                                                <div class="card-img-overlay">
                                                    <div class="pt-3 pb-3">
                                                        <a href="video-single.html">
                                                            <figure class="float-left mr-3 mt-1">
                                                                <i class="icon-play s-36"></i>
                                                            </figure>
                                                            <div>
                                                                <h5>Alexander Pierce</h5>
                                                                <small> Latest Video Released</small>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="bottom-gradient bottom-gradient-thumbnail"></div>
                                </div>
                                <div class="card">
                                    <figure class="card-img figure">
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/v8.jpg" alt="Card image">
                                        </div>
                                        <div class="img-overlay text-white">
                                            <div class="figcaption">

                                            </div>
                                        </div>
                                        <div class="has-bottom-gradient">
                                            <div class="d-flex">
                                                <div class="card-img-overlay">
                                                    <div class="pt-3 pb-3">
                                                        <a href="video-single.html">
                                                            <figure class="float-left mr-3 mt-1">
                                                                <i class="icon-play s-36"></i>
                                                            </figure>
                                                            <div>
                                                                <h5>Alexander Pierce</h5>
                                                                <small> Latest Video Released</small>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="bottom-gradient bottom-gradient-thumbnail"></div>
                                </div>
                                <div>
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">Record Music & Events Template</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to
                                            additional content.</p>
                                    </div>
                                    <div class="p-3 d-none d-lg-block">
                                        <figure class="avatar avatar-md float-left mr-3 mt-1">
                                            <img src="assets/img/demo/u1.jpg" alt="">
                                        </figure>
                                        <div>
                                            <h6>Alexander Pierce</h6>
                                            alexander@paper.com
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <figure class="card-img figure">
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/v9.jpg" alt="Card image">
                                        </div>
                                        <div class="img-overlay text-white">
                                            <div class="figcaption">

                                            </div>
                                        </div>
                                        <div class="has-bottom-gradient">
                                            <div class="d-flex">
                                                <div class="card-img-overlay">
                                                    <div class="pt-3 pb-3">
                                                        <a href="video-single.html">
                                                            <figure class="float-left mr-3 mt-1">
                                                                <i class="icon-play s-36"></i>
                                                            </figure>
                                                            <div>
                                                                <h5>Alexander Pierce</h5>
                                                                <small> Latest Video Released</small>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="bottom-gradient bottom-gradient-thumbnail"></div>
                                </div>
                                <div class="card">
                                    <figure class="card-img figure">
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/v10.jpg" alt="Card image">
                                        </div>
                                        <div class="img-overlay text-white">
                                            <div class="figcaption">

                                            </div>
                                        </div>
                                        <div class="has-bottom-gradient">
                                            <div class="d-flex">
                                                <div class="card-img-overlay">
                                                    <div class="pt-3 pb-3">
                                                        <a href="video-single.html">
                                                            <figure class="float-left mr-3 mt-1">
                                                                <i class="icon-play s-36"></i>
                                                            </figure>
                                                            <div>
                                                                <h5>Alexander Pierce</h5>
                                                                <small> Latest Video Released</small>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="bottom-gradient bottom-gradient-thumbnail"></div>
                                </div>
                            </div>
                        </section>
                        <!--@New Releases-->

                        <!--PlayList & Events-->
                        <section class="section mt-4">
                            <div class="row row-eq-height">
                                <div class="col-lg-8">
                                    <div class="card no-b mb-md-3 p-2">
                                        <div class="card-header no-bg transparent">
                                            <div class="d-flex justify-content-between">
                                                <div class="align-self-center">
                                                    <div class="d-flex">
                                                        <!--<i class="icon-music s-36 mr-3  mt-2"></i>-->
                                                        <div>
                                                            <h4>Most Popular This Week</h4>
                                                            <p>Checkout What's new at our blog</p>
                                                            <div class="mt-3">
                                                                <ul class="nav nav-tabs card-header-tabs nav-material responsive-tab mb-1"
                                                                    role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active show" id="w2--tab1"
                                                                            data-toggle="tab" href="#w2-tab1"
                                                                            role="tab"
                                                                            aria-selected="true">Rock</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="w3--tab1"
                                                                            data-toggle="tab" href="#w2-tab1"
                                                                            role="tab"
                                                                            aria-selected="false">Jazz</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="w4--tab3"
                                                                            data-toggle="tab" href="#w2-tab3"
                                                                            role="tab"
                                                                            aria-selected="false">Classic</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="w5--tab1"
                                                                            data-toggle="tab" href="#w2-tab1"
                                                                            role="tab"
                                                                            aria-selected="false">Jazz</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="w6--tab3"
                                                                            data-toggle="tab" href="#w2-tab3"
                                                                            role="tab"
                                                                            aria-selected="false">Classic</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="card-body no-p">
                                            <div class="tab-content" id="v-pills-tabContent1">
                                                <div class="tab-pane fade show active" id="w2-tab1" role="tabpanel"
                                                    aria-labelledby="w2-tab1">
                                                    <div class="playlist pl-lg-3 pr-lg-3">
                                                        <div class="m-1 my-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="col-1">
                                                                    <a class="no-ajaxy media-url"
                                                                        href="assets/media/track1.mp3"
                                                                        data-wave="assets/media/track1.json">
                                                                        <i class="icon-play s-28"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <figure class="avatar-md float-left  mr-3 mt-1">
                                                                        <img class="r-3"
                                                                            src="assets/img/demo/a1.jpg"
                                                                            alt="">
                                                                    </figure>
                                                                    <h6>Dance with me tonight</h6>Joe Doe
                                                                </div>
                                                                <div class="col-md-5 d-none d-lg-block">
                                                                    <div class="d-flex">
                                                                        <span class="ml-auto"> 5:03</span>
                                                                        <a href="#" class="ml-auto"><i
                                                                                class="icon-share-1"></i></a>
                                                                        <div class="ml-auto">
                                                                            <a href="#"
                                                                                class="btn btn-outline-primary btn-sm">Buy
                                                                                at iTunes</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-1 ml-auto d-lg-none">
                                                                    <a href="#" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="icon-more-1"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="icon-share-1 mr-3"></i>
                                                                            Share</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="icon-shopping-bag mr-3"></i>Buy
                                                                            at iTunes</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-1 my-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="col-1">
                                                                    <a class="no-ajaxy media-url"
                                                                        href="assets/media/track2.mp3"
                                                                        data-wave="assets/media/track2.json">
                                                                        <i class="icon-play s-28"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <figure class="avatar-md float-left  mr-3 mt-1">
                                                                        <img class="r-3"
                                                                            src="assets/img/demo/a2.jpg"
                                                                            alt="">
                                                                    </figure>
                                                                    <h6>Dance with me tonight</h6>Joe Doe
                                                                </div>
                                                                <div class="col-md-5 d-none d-lg-block">
                                                                    <div class="d-flex">
                                                                        <span class="ml-auto"> 5:03</span>
                                                                        <a href="#" class="ml-auto"><i
                                                                                class="icon-share-1"></i></a>
                                                                        <div class="ml-auto">
                                                                            <a href="#"
                                                                                class="btn btn-outline-primary btn-sm">Buy
                                                                                at iTunes</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-1 ml-auto d-lg-none">
                                                                    <a href="#" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="icon-more-1"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="icon-share-1 mr-3"></i>
                                                                            Share</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="icon-shopping-bag mr-3"></i>Buy
                                                                            at iTunes</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-1 my-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="col-1">
                                                                    <a class="no-ajaxy media-url"
                                                                        href="assets/media/track3.mp3"
                                                                        data-wave="assets/media/track3.json">
                                                                        <i class="icon-play s-28"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <figure class="avatar-md float-left  mr-3 mt-1">
                                                                        <img class="r-3"
                                                                            src="assets/img/demo/a3.jpg"
                                                                            alt="">
                                                                    </figure>
                                                                    <h6>Dance with me tonight</h6>Joe Doe
                                                                </div>
                                                                <div class="col-md-5 d-none d-lg-block">
                                                                    <div class="d-flex">
                                                                        <span class="ml-auto"> 5:03</span>
                                                                        <a href="#" class="ml-auto"><i
                                                                                class="icon-share-1"></i></a>
                                                                        <div class="ml-auto">
                                                                            <a href="#"
                                                                                class="btn btn-outline-primary btn-sm">Buy
                                                                                at iTunes</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-1 ml-auto d-lg-none">
                                                                    <a href="#" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="icon-more-1"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="icon-share-1 mr-3"></i>
                                                                            Share</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="icon-shopping-bag mr-3"></i>Buy
                                                                            at iTunes</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-1 my-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="col-1">
                                                                    <a class="no-ajaxy media-url"
                                                                        href="assets/media/track1.mp3"
                                                                        data-wave="assets/media/track1.json">
                                                                        <i class="icon-play s-28"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <figure class="avatar-md float-left  mr-3 mt-1">
                                                                        <img class="r-3"
                                                                            src="assets/img/demo/a4.jpg"
                                                                            alt="">
                                                                    </figure>
                                                                    <h6>Dance with me tonight</h6>Joe Doe
                                                                </div>
                                                                <div class="col-md-5 d-none d-lg-block">
                                                                    <div class="d-flex">
                                                                        <span class="ml-auto"> 5:03</span>
                                                                        <a href="#" class="ml-auto"><i
                                                                                class="icon-share-1"></i></a>
                                                                        <div class="ml-auto">
                                                                            <a href="#"
                                                                                class="btn btn-outline-primary btn-sm">Buy
                                                                                at iTunes</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-1 ml-auto d-lg-none">
                                                                    <a href="#" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="icon-more-1"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="icon-share-1 mr-3"></i>
                                                                            Share</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="icon-shopping-bag mr-3"></i>Buy
                                                                            at iTunes</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-1 my-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="col-1">
                                                                    <a class="no-ajaxy media-url"
                                                                        href="assets/media/track2.mp3"
                                                                        data-wave="assets/media/track2.json">
                                                                        <i class="icon-play s-28"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <figure class="avatar-md float-left  mr-3 mt-1">
                                                                        <img class="r-3"
                                                                            src="assets/img/demo/a5.jpg"
                                                                            alt="">
                                                                    </figure>
                                                                    <h6>Dance with me tonight</h6>Joe Doe
                                                                </div>
                                                                <div class="col-md-5 d-none d-lg-block">
                                                                    <div class="d-flex">
                                                                        <span class="ml-auto"> 5:03</span>
                                                                        <a href="#" class="ml-auto"><i
                                                                                class="icon-share-1"></i></a>
                                                                        <div class="ml-auto">
                                                                            <a href="#"
                                                                                class="btn btn-outline-primary btn-sm">Buy
                                                                                at iTunes</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-1 ml-auto d-lg-none">
                                                                    <a href="#" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="icon-more-1"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="icon-share-1 mr-3"></i>
                                                                            Share</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="icon-shopping-bag mr-3"></i>Buy
                                                                            at iTunes</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-1 my-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="col-1">
                                                                    <a class="no-ajaxy media-url"
                                                                        href="assets/media/track2.mp3"
                                                                        data-wave="assets/media/track2.json">
                                                                        <i class="icon-play s-28"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <figure class="avatar-md float-left  mr-3 mt-1">
                                                                        <img class="r-3"
                                                                            src="assets/img/demo/a8.jpg"
                                                                            alt="">
                                                                    </figure>
                                                                    <h6>Dance with me tonight</h6>Joe Doe
                                                                </div>
                                                                <div class="col-md-5 d-none d-lg-block">
                                                                    <div class="d-flex">
                                                                        <span class="ml-auto"> 5:03</span>
                                                                        <a href="#" class="ml-auto"><i
                                                                                class="icon-share-1"></i></a>
                                                                        <div class="ml-auto">
                                                                            <a href="#"
                                                                                class="btn btn-outline-primary btn-sm">Buy
                                                                                at iTunes</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-1 ml-auto d-lg-none">
                                                                    <a href="#" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="icon-more-1"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="icon-share-1 mr-3"></i>
                                                                            Share</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="icon-shopping-bag mr-3"></i>Buy
                                                                            at iTunes</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="w2-tab3" role="tabpanel"
                                                    aria-labelledby="w2-tab3">
                                                    <div class="card-body has-items-overlay playlist p-5">
                                                        <div class="row">
                                                            <div class="col-md-3 mb-3">
                                                                <figure class="mb-2">
                                                                    <div class="img-wrapper r-10">
                                                                        <img class=" r-10"
                                                                            src="assets/img/demo/a7.jpg"
                                                                            alt="/">
                                                                        <div class="img-overlay text-white p-5">
                                                                            <div class="center-center">
                                                                                <a class="no-ajaxy media-url"
                                                                                    href="assets/media/track2.mp3"
                                                                                    data-wave="assets/media/track2.json">
                                                                                    <i class="icon-play s-48"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </figure>
                                                                <div class="figure-title">
                                                                    <h6>To Phir Ao</h6>
                                                                    <small>Atif Aslam</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <figure class="mb-2">
                                                                    <div class="img-wrapper r-10">
                                                                        <img class=" r-10"
                                                                            src="assets/img/demo/a6.jpg"
                                                                            alt="/">
                                                                        <div class="img-overlay text-white p-5">
                                                                            <div class="center-center">
                                                                                <a class="no-ajaxy media-url"
                                                                                    href="assets/media/track2.mp3"
                                                                                    data-wave="assets/media/track2.json">
                                                                                    <i class="icon-play s-48"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </figure>
                                                                <div class="figure-title">
                                                                    <h6>To Phir Ao</h6>
                                                                    <small>Atif Aslam</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <figure class="mb-2">
                                                                    <div class="img-wrapper r-10">
                                                                        <img class=" r-10"
                                                                            src="assets/img/demo/a5.jpg"
                                                                            alt="/">
                                                                        <div class="img-overlay text-white p-5">
                                                                            <div class="center-center">
                                                                                <a class="no-ajaxy media-url"
                                                                                    href="assets/media/track2.mp3"
                                                                                    data-wave="assets/media/track2.json">
                                                                                    <i class="icon-play s-48"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </figure>
                                                                <div class="figure-title">
                                                                    <h6>To Phir Ao</h6>
                                                                    <small>Atif Aslam</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <figure class="mb-2">
                                                                    <div class="img-wrapper r-10">
                                                                        <img class=" r-10"
                                                                            src="assets/img/demo/a4.jpg"
                                                                            alt="/">
                                                                        <div class="img-overlay text-white p-5">
                                                                            <div class="center-center">
                                                                                <a class="no-ajaxy media-url"
                                                                                    href="assets/media/track2.mp3"
                                                                                    data-wave="assets/media/track2.json">
                                                                                    <i class="icon-play s-48"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </figure>
                                                                <div class="figure-title">
                                                                    <h6>To Phir Ao</h6>
                                                                    <small>Atif Aslam</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3 mb-3">
                                                                <figure class="mb-2">
                                                                    <div class="img-wrapper r-10">
                                                                        <img class=" r-10"
                                                                            src="assets/img/demo/a3.jpg"
                                                                            alt="/">
                                                                        <div class="img-overlay text-white p-5">
                                                                            <div class="center-center">
                                                                                <a class="no-ajaxy media-url"
                                                                                    href="assets/media/track2.mp3"
                                                                                    data-wave="assets/media/track2.json">
                                                                                    <i class="icon-play s-48"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </figure>
                                                                <div class="figure-title">
                                                                    <h6>To Phir Ao</h6>
                                                                    <small>Atif Aslam</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <figure class="mb-2">
                                                                    <div class="img-wrapper r-10">
                                                                        <img class=" r-10"
                                                                            src="assets/img/demo/a2.jpg"
                                                                            alt="/">
                                                                        <div class="img-overlay text-white p-5">
                                                                            <div class="center-center">
                                                                                <a class="no-ajaxy media-url"
                                                                                    href="assets/media/track2.mp3"
                                                                                    data-wave="assets/media/track2.json">
                                                                                    <i class="icon-play s-48"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </figure>
                                                                <div class="figure-title">
                                                                    <h6>To Phir Ao</h6>
                                                                    <small>Atif Aslam</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <figure class="mb-2">
                                                                    <div class="img-wrapper r-10">
                                                                        <img class=" r-10"
                                                                            src="assets/img/demo/a1.jpg"
                                                                            alt="/">
                                                                        <div class="img-overlay text-white p-5">
                                                                            <div class="center-center">
                                                                                <a class="no-ajaxy media-url"
                                                                                    href="assets/media/track2.mp3"
                                                                                    data-wave="assets/media/track2.json">
                                                                                    <i class="icon-play s-48"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </figure>
                                                                <div class="figure-title">
                                                                    <h6>To Phir Ao</h6>
                                                                    <small>Atif Aslam</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <figure class="mb-2">
                                                                    <div class="img-wrapper r-10">
                                                                        <img class=" r-10"
                                                                            src="assets/img/demo/a8.jpg"
                                                                            alt="/">
                                                                        <div class="img-overlay text-white p-5">
                                                                            <div class="center-center">
                                                                                <a class="no-ajaxy media-url"
                                                                                    href="assets/media/track2.mp3"
                                                                                    data-wave="assets/media/track2.json">
                                                                                    <i class="icon-play s-48"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </figure>
                                                                <div class="figure-title">
                                                                    <h6>To Phir Ao</h6>
                                                                    <small>Atif Aslam</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3 card p-3">
                                        <div>
                                            <div class="mr-3 float-left text-center">
                                                <div class="s-36">09</div>
                                                <span>July</span>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="events-single.html">
                                                        <h4 class="text-primary">New York park live</h4>
                                                    </a>
                                                </div>
                                                <small> 33 Cliveden Close, Melbourne VIC 3000, Australia</small>
                                                <div class="mt-2">
                                                    <i class="icon-clock-o mr-1"> </i> 7:00 PM - 11:00 PM
                                                </div>
                                            </div>

                                        </div>

                                        <small class="my-3">Artist Performing</small>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="avatar-group">
                                                <figure class="avatar no-shadow">
                                                    <img src="assets/img/demo/u4.jpg" alt="">
                                                </figure>
                                                <figure class="avatar no-shadow">
                                                    <img src="assets/img/demo/u5.jpg" alt="">
                                                </figure>
                                                <figure class="avatar no-shadow">
                                                    <img src="assets/img/demo/u6.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div>
                                                <a href="events-single.html">Buy Tickets</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 card p-3">
                                        <div>
                                            <div class="mr-3 float-left text-center">
                                                <div class="s-36">09</div>
                                                <span>March</span>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="events-single.html">
                                                        <h4 class="text-primary">Linkin park live</h4>
                                                    </a>
                                                </div>
                                                <small> 33 Cliveden Close, Melbourne VIC 3000, Australia</small>
                                                <div class="mt-2">
                                                    <i class="icon-clock-o mr-1"> </i> 7:00 PM - 11:00 PM
                                                </div>
                                            </div>
                                        </div>

                                        <small class="my-3">Artist Performing</small>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="avatar-group">
                                                <figure class="avatar no-shadow">
                                                    <img src="assets/img/demo/u4.jpg" alt="">
                                                </figure>
                                                <figure class="avatar no-shadow">
                                                    <img src="assets/img/demo/u5.jpg" alt="">
                                                </figure>
                                                <figure class="avatar no-shadow">
                                                    <img src="assets/img/demo/u6.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div>
                                                <a href="events-single.html">Buy Tickets</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 card">
                                        <figure class="card-img figure">
                                            <div class="img-wrapper">
                                                <img class="r-3" src="assets/img/demo/v11.jpg" alt="Card image">
                                            </div>
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                </div>
                                            </div>
                                            <div class="has-bottom-gradient">
                                                <div class="d-flex">
                                                    <div class="card-img-overlay">
                                                        <div>
                                                            <div class="mr-3 float-left text-center">
                                                                <div class="s-36">24</div>
                                                                <span>July</span>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <a href="events-single.html">
                                                                        <h4 class="text-primary">Linkin park live</h4>
                                                                    </a>
                                                                </div>
                                                                <small> 33 Cliveden Close, Melbourne VIC 3000,
                                                                    Australia</small>
                                                                <div class="mt-2">
                                                                    <i class="icon-clock-o mr-1"> </i> 7:00 PM - 11:00
                                                                    PM
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>
                                        <div class="bottom-gradient"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--@PlayLIst & Events-->

                        <!--Recommend-->
                        <section class="section">
                            <div class="d-flex relative align-items-center justify-content-between">
                                <div class="mb-4">
                                    <h4>Recommended For You</h4>
                                    <p>Enjoy some new awesome music</p>
                                </div>
                                <a href="albums.html">View Albums<i class="icon-angle-right ml-3"></i></a>
                            </div>
                            <div class="lightSlider has-items-overlay playlist" data-item="6" data-item-lg="3"
                                data-item-md="3" data-item-sm="2" data-auto="false" data-pager="false"
                                data-controls="true" data-loop="false">
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a1.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track2.mp3"
                                                                data-wave="assets/media/track2.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a2.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track2.mp3"
                                                                data-wave="assets/media/track2.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a3.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track1.mp3"
                                                                data-wave="assets/media/track1.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a4.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track3.mp3"
                                                                data-wave="assets/media/track3.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a5.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track2.mp3"
                                                                data-wave="assets/media/track2.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a6.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track2.mp3"
                                                                data-wave="assets/media/track2.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="assets/img/demo/a7.jpg" alt="/">
                                            <div class="img-overlay text-white">
                                                <div class="figcaption">
                                                    <ul
                                                        class="list-inline d-flex align-items-center justify-content-between">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="snackbar"
                                                                data-text="Added to favourites" data-pos="top-right"
                                                                data-showAction="true" data-actionText="ok"
                                                                data-actionTextColor="#fff"
                                                                data-backgroundColor="#0c101b">
                                                                <i class="icon-heart-o s-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item ">
                                                            <a class="no-ajaxy media-url"
                                                                href="assets/media/track2.mp3"
                                                                data-wave="assets/media/track2.json">
                                                                <i class="icon-play s-48"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="album-single.html"><i
                                                                    class="icon-more s-18 pt-3"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center mt-5">
                                                        <h5>To Phir Ao</h5>
                                                        <span>Joe Doe</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="figure-title text-center p-2">
                                                <h5>To Phir Ao</h5>
                                                <span>Joe Doe</span>
                                            </div>
                                        </div>
                                    </figure>
                                </div>

                            </div>
                        </section>
                        <!--@Recommend-->

                    </div>
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

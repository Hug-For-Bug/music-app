<nav id="menu" class="navbar-wrapper navbar-bottom-fixed shadow">
    <div class="navbar navbar-expand player-header d-flex justify-content-center  bd-navbar text-center center">
        <!--Player-->
        <div id="mediaPlayer" class="player-bar col-lg-8 col-md-5 col-offset-2" data-auto="true">
            <div class="row align-items-center grid">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <button id="previousTrack" class="btn btn-link d-none d-sm-block">
                            <i class="icon-back s-18"></i>
                        </button>
                        <button class=" btn btn-link" id="playPause">
                            <span id="play"><i class="icon-play s-36"></i></span>
                            <span id="pause" style="display: none"><i
                                    class="icon-pause s-36 text-primary"></i></span>
                        </button>
                        <button id="nextTrack" class="btn btn-link d-none d-sm-block">
                            <i class="icon-next s-18"></i>
                        </button>
                    </div>
                </div>
                <div class="col-8 d-none d-lg-block">
                    <div id="waveform"></div>
                </div>
                <div class="col d-none d-lg-block">
                    <small class="track-time mr-2 text-primary align-middle"></small>
                    <a data-toggle="control-sidebar">
                        <i class="icon icon-menu-3  align-middle"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>

</nav>

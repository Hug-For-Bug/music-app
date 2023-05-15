<div class="navbar navbar-expand player-header d-flex justify-content-center  bd-navbar text-center center">
    <!--Player-->
    <div id="mediaPlayer" class="player-bar col-lg-8 col-md-5 col-offset-2" data-auto="true">
        <div class="row align-items-center grid">
            <div class="col">

                <audio id="myAudio">                   
                    <source src="https://cdns-preview-9.dzcdn.net/stream/c-9afd235c8032a20402ba60ca26246a2c-4.mp3" type="audio/mpeg">                    
                </audio>

                <div class="d-flex align-items-center">
                    <button id="previousTrack" class="btn btn-link d-none d-sm-block">
                        <i class="icon-back s-18"></i>
                    </button>
                    <button class=" btn btn-link" id="playPaus">
                        {{-- <span id="play"><i class="icon-play s-36"></i></span> --}}
                        <span id="playAudio" type="button"><i class="icon-play s-36"></i></span>
                        <span id="pauseAudio" type="button" style="display: none"><i class="icon-pause s-36"></i></span>
                        {{-- <span id="pause" style="display: none"><i class="icon-pause s-36 text-primary"></i></span> --}}
                        {{-- <span id="pause"><i class="icon-pause s-36 text-primary"></i></span> --}}
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

<script>

    const playAudio = document.querySelector("#playAudio");
    const pauseAudio = document.querySelector("#pauseAudio");
    const myAudio = document.getElementById("myAudio")

    playAudio.onclick = function() {
        myAudio.play();
        playAudio.style.display = "none"
        pauseAudio.style.display = "block"
        console.log("play music");
    }
    pauseAudio.onclick = function() {
        myAudio.pause();
        pauseAudio.style.display = "none"
        playAudio.style.display = "block"
        console.log("pause music");
    }
    
</script>

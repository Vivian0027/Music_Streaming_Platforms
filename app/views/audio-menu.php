<style>
    /* AUDIO CONTROL */

    #menu-audio {
        height: 90px;
        padding: 12px 12px 6px 12px;
        background-color: var(--black-color);
        border-top: 1px solid var(--orange-color);
        z-index: 5000;
    }

    #menu-audio i {
        color: var(--text_dark_theme-color);
        font-size: 20px;
    }


    #menu-audio p,
    #menu-audio h6 {
        font-family: Inter, sans-serif, 'Open Sans' !important;
    }

    #menu-audio p {
        font-size: 12px;
        margin-bottom: 0;
        z-index: 1000;
    }

    #play-music {
        border: 2px solid var(--white-color);
    }

    #play-music:hover {
        border: 2px solid var(--orange-color);
    }

    #play-music:active {
        border: 2px solid var(--orange-color) !important;
    }

    #progressVolume,
    #progressVolume-clean {
        width: 0;
        height: 3px;
        background: linear-gradient(to right, var(--orange-color), var(--pink_strong-color));
        position: absolute;
        top: 0px;
        left: 0;
        pointer-events: none;
        z-index: 2;
        border-radius: 4px;
    }

    .audioActive i {
        color: var(--orange-color) !important;
        font-weight: 600;
    }

    #progressBar {
        width: 0;
        height: 3px;
        background: linear-gradient(to right, var(--orange-color), var(--pink_strong-color));
        position: absolute;
        top: 0px;
        left: 0;
        pointer-events: none;
        z-index: 2;
        border-radius: 4px;
    }

    #audio-duration,
    #current-time {
        font-size: 12px;
        color: var(--text_dark_theme-color);
        font-weight: 500;
        padding: 0 12px 0 12px;
        line-height: 14px;
    }

    @media screen and (max-width: 992px) {

        /* MENU CONTROL */

        .menu-control-song-info {
            display: none;
        }

        .clean-audio-control {
            display: block;
        }

        .clean-audio-control-before {
            display: none !important;
        }

    }


    @media screen and (max-width: 576px) {
        #music_playing_info {
            display: none;
        }

        #menu-audio {
            height: 76px;
            padding: 4px 12px 10px 12px;
            background-color: var(--black-color);
            border-top: 1px solid var(--orange-color);
            z-index: 5000;
        }

    }
</style>

<!-- AUDIO CONTROL -->

<section>
    <div id="menu-audio" class="fixed-bottom row">
        <!-- LEFT MENU CONTROL -->
        <div class="col-1 col-lg-3 menu-left-audio">
            <div id="music_playing_info" class="row">

            </div>
        </div>

        <!-- MAIN MENU CONTROL -->

        <div class="col-10 col-lg-6 menu-control-audio">
            <div class="row">
                <!-- TOP MENU AUDIO CONTROL -->
                <div class="col-3"></div>
                <div class="col-6 d-flex justify-content-between">
                    <div class="btn btn-repeat ms-1 me-1">
                        <i class="fas fa-redo"></i>
                    </div>
                    <div class="btn btn-prev ms-1 me-1">
                        <i class="fa-solid fa-backward-step"></i>
                    </div>
                    <div id="play-music" class="btn btn-toggle-play rounded-circle ms-1 me-1">
                        <!-- <i class="fas fa-pause icon-pause"></i> -->
                        <i class="fas fa-play icon-play"></i>
                    </div>
                    <div class="btn btn-next ms-1 me-1">
                        <i class="fa-solid fa-forward-step"></i>
                    </div>
                    <div class="btn btn-random ms-1 me-1">
                        <i class="fas fa-random"></i>
                    </div>
                </div>
                <div class="col-3"></div>

                <!-- BOTTOM MENU AUDIO CONTROL -->

                <div class="col-12 col-sm-2"></div>

                <div class="col-12 col-sm-8 pt-2 pb-3 d-flex">
                    <div class="text-white-primary" id="current-time">
                        00:00
                    </div>
                    <div class="range-container mt-1">

                        <div id="progressBar"></div>
                        <input type="range" id="myRange" min="0" max="100" value="0" step="0.1">

                    </div>

                    <div class="text-white-primary" id="audio-duration">
                        00:00
                    </div>

                    <audio id="audio" src="" preload='auto'></audio>
                </div>

                <div class="col-12 col-sm-2"></div>

            </div>
        </div>

        <!-- RIGHT MENU CONTROL -->
        <div class="col-1 col-lg-3 d-flex align-self-center justify-content-between">
            <!-- LARGE SCREEN -->
            <div class="btn clean-audio-control-before">
                <i class="fa-solid fa-plus refer"></i>
            </div>
            <div class="btn clean-audio-control-before">
                <i class="fa-solid fa-music refer"></i>
            </div>
            <div class="d-flex clean-audio-control-before" style="width: 50%;">
                <div id="audio-status" class="btn">
                    <!-- <i class="fa-solid fa-volume-xmark"></i> -->
                    <!-- <i class="fa-solid fa-volume-high refer"></i> -->
                </div>
                <div class="range-container mt-3">
                    <div id="progressVolume"></div>
                    <input type="range" id="inputVolume" min="0" max="100" value="20">
                </div>
            </div>
            <div class="btn control-right-side clean-audio-control-before">
                <i class="fa-solid fa-list refer text-b-primary"></i>
            </div>

            <!-- NORMAL AND SMALL SCREEN -->

            <div class="clean-audio-control">

                <div class="dropdown me-3">
                    <div class="dropdown-toggle fw-medium text-nowrap text-white-primary refer"
                        data-bs-toggle="dropdown">
                        <i class="fa-solid fa-bars refer"></i>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end bg-dark_grey-color" style="width: 100px;">
                        <li>
                            <div class="btn dropdown-item">
                                <i class="fa-solid fa-plus refer"></i>
                            </div>
                        </li>
                        <li>
                            <div class="btn dropdown-item">
                                <i class="fa-solid fa-music refer"></i>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex" style="width: 80%;">
                                <div id="audio-status-clean" class="btn">
                                    <i class="fa-solid fa-volume-xmark"></i>
                                </div>
                                <div class="range-container mt-3">
                                    <div id="progressVolume-clean"></div>
                                    <input type="range" id="inputVolume-clean" min="0" max="100" value="20">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="btn dropdown-item">
                                <i class="fa-solid fa-list refer"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
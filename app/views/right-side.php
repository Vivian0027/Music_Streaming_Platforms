<style>
    /* RIGHT SIDE */

    .right-side {
        position: fixed;
        top: 70px;
        bottom: 10%;
        background-color: var(--black-color);
        z-index: 3000;
        width: 330px;
        right: -330px;
        transition: right 0.5s ease-in-out;
    }

    .right-side .container-song {
        cursor: pointer;
    }

    .right-side-appear {
        right: 0;
    }

    .option {
        background-color: var(--dark_grey-color);
    }

    .option .active {
        background-color: var(--grey-color);
    }

    .option-waiting,
    .option-recent {
        font-size: 13px;
        font-weight: 600;
        background-color: var(--dark_grey-color);
        color: var(--white-color);
        padding: 6px 12px;
        cursor: pointer;
    }

    .option-waiting:hover,
    .option-recent:hover {
        opacity: 0.6;
    }

    .song-info {
        font-size: 14px;
    }

    .playlist,
    .recentSongs {
        height: 85%;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .playlist i,
    .recentSongs i {
        color: var(--text_dark_theme-color);
    }

    .playlist li:not(.active):hover,
    .recentSongs li:not(.active):hover {
        background-color: var(--dark_grey-color) !important;
    }

    .playlist li.active,
    .recentSongs li.active {
        background: linear-gradient(to right, var(--orange-color), var(--pink_strong-color)) !important;
    }

    .playlist h6,
    .recentSongs h6 {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

<!-- RIGHT SIDE -->
<section>
    <div class="right-side">
        <div class="option rounded-5 option-list d-flex justify-content-between mt-3 mb-3"
            style="width: 240px; margin: auto;">
            <div class="rounded-4 option-waiting active">Danh sách phát</div>
            <div class="rounded-4 option-recent">Nghe gần đây</div>
        </div>
        <ul class="playlist ps-2 pe-2">
            <!-- JS -->
        </ul>
        <ul class="recentSongs ps-2 pe-2 d-none">
            <!-- JS -->
        </ul>
    </div>
</section>
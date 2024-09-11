<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="shortcut icon" href="../../public/images/other/favicon.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/base.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <style>
        .vip {
            position: absolute;
            top: 0;
            left: -8px;
            width: 50px;
            height: 22px;
            background-color: var(--yellow-color);
            border-radius: 4px 0 0 0;
            color: var(--white-color);
            border-top-left-radius: 10px;
            text-align: center;
            font-size: 16px;
            line-height: 16px;
            padding: 3px 0;
            font-family: Montserrat, 'Open Sans', Inter, sans-serif !important;
            font-weight: 600;
        }

        .vip::after {
            content: "";
            display: block;
            position: absolute;
            border-top: 8px solid var(--yellow-color);
            border-left: 8px solid transparent;
            top: 22px;
            left: 0;
            filter: brightness(80%);
        }

        .card-hover-song {
            position: absolute;
            width: 25%;
            height: 25%;
            bottom: 10%;
            right: 10%;
            max-width: 50px;
            max-height: 50px;
            min-width: 30px;
            min-height: 30px;
            background-color: var(--orange-color);
            color: var(--black-color);
            display: none;
        }

        .card-song:hover .card-hover-song {
            display: block;
        }

        .card-img-container {
            position: relative;
        }

        .song-img-active-container {
            width: 25%;
            max-width: 350px;
            min-width: 250px;
        }

        .song-img-active {
            width: 100%;
        }

        .song-active-detail-info p {
            font-size: 14px;
        }

        .song-active-lyric p {
            font-size: 14px;
            line-height: 14px;
            margin-bottom: 12px;
        }

        .lyric-container {
            overflow: hidden;
            height: 130px;
            transition: expanding 0.5s ease-out;
        }

        .expanded {
            height: auto;
        }

        .content {
            border-bottom: 3px solid var(--dark_grey-color);
        }

        main.container-fluid {
            padding-top: 96px;
        }

        .carousel-item img {
            height: 360px;
        }

        .card {
            border: none;
            position: relative;
        }

        .card_song-img {
            transition: transform 0.4s ease-in-out;
        }

        .card-song:hover {
            border-radius: 8px;
            background-color: var(--dark_grey-color) !important;
        }

        .card-song:hover .card_song-img {
            transform: scale(1.07);
        }

        .new-song:hover {
            border-radius: 5px;
            background-color: var(--dark_grey-color);
        }

        .clean-audio-control {
            display: none;
        }

        #elastic {
            cursor: pointer;
        }

        .song-active-banner {
            background: linear-gradient(to bottom, var(--dark_grey-color) 55%, var(--black-color));
            border-radius: 12px;
        }

        .avatar-comment-container {
            position: relative;
        }

        .avatar-comment {
            width: 40px;
        }

        .avatar-vip {
            position: absolute;
            top: -3px;
            left: -3px;
            width: 46px;
            height: 46px;
            border: 2px solid var(--yellow-color);
        }

        .account-comment-level {
            padding: 4px 12px;
            background-color: var(--yellow-color);
            border-radius: 5px;
            font-size: 14px;
            line-height: 14px;
            margin: 1px 12px;
            opacity: 0.9;
            font-weight: 600;
        }

        .comment-option {
            font-size: 14px;
            font-weight: 500;
        }

        .input-comment {
            background-color: transparent;
            outline: none;
            color: var(--text_dark_theme-color);
        }

        .input-content-container {
            width: 90%;
        }

        .input-content-container form {
            width: 100%;
        }

        .input-comment {
            width: 95%;
        }

        .comments-relied-container {
            display: none;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->

    <?php require './header.php'; ?>

    <!-- LEFT SIDE -->

    <?php require './left-side.php'; ?>

    <!-- RIGHT SIDE -->

    <?php require './right-side.php'; ?>

    <!-- CONTENT -->

    <main id="content" class="container-fluid bg-black-primary">
        <div class="row">

            <div class="col-2 bg-black-primary">
            </div>
            <div class="col-10 content p-4 pt-0">
                <div class="d-flex flex-wrap song-active-banner mb-5">
                    <div class="song-img-active-container pe-4">
                        <img src="../../public/images/music/vpop/daloyeuemnhieu-justatee.jpg" alt=""
                            class="song-img-active rounded-circle">
                    </div>
                    <div class="song-active-info d-flex flex-column-reverse pt-4">
                        <a href="" class="text-decoration-none text-white-primary refer">JustaTee</a>
                        <h1 class="text-white-primary">Đã lỡ yêu em nhiều</h1>
                    </div>
                </div>

                <div class="song-active-detail-info text-white-primary mb-5">
                    <h4 class="mb-4">Thông tin chi tiết</h4>
                    <p>
                        <strong>Ca sĩ: </strong>
                        <span>JustaTee</span>
                    </p>
                    <p>
                        <strong>Nhạc sĩ: </strong>
                        <span>JustaTee</span>
                    </p>
                    <p>
                        <strong>Bản quyền: </strong>
                        <span>JustaTee</span>
                    </p>
                    <p>
                        <strong>Lượt nghe: </strong>
                        <span>12.000.000</span>
                    </p>
                    <p>
                        <strong>Ngày phát hành: </strong>
                        <span>13/11/2017</span>
                    </p>
                </div>

                <div class="song-active-lyric text-white-primary mb-5">
                    <h4 class="mb-4">Lời bài hát</h4>
                    <div class="lyric-container">
                        <?php
                        $lyricFile = fopen('../../public/lyric/daloyeuemnhieu-justatee.txt', 'r') or die("Unable to open file!");

                        while (!feof($lyricFile)) {
                            echo '<p>' . fgets($lyricFile) . '</p>';
                        }

                        fclose($lyricFile);
                        ?>
                    </div>
                    <span id="elastic" class="refer">...Xem thêm</span>
                </div>

                <script>
                    const lyricContainer = document.querySelector('.lyric-container')
                    const elastic = document.querySelector('#elastic')

                    elastic.onclick = function() {
                        lyricContainer.classList.toggle('expanded')
                        if (lyricContainer.classList.contains('expanded')) {
                            this.textContent = 'Ấn bớt'
                        } else {
                            this.textContent = '...Xem thêm'
                        }
                    }
                </script>

                <div class="container song-suggestion mt-4 p-0">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="text-white-primary">CÓ THỂ BẠN MUỐN NGHE</h5>
                        <a href="" class="text-decoration-none text-support fw-bolder refer">Tất cả
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <div class="card-img-container overflow-hidden rounded-3 overflow-hidden rounded-3">
                                    <img class="card-img-top card_song-img rounded-3"
                                        src="../../public/images/music/vpop/thienlyoi-jack-j97.jpg" alt="Card image">
                                    <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                        <i class="fas fa-play icon-play"></i>
                                    </div>
                                </div>
                                <div class="card-body ps-0 pe-0">
                                    <h6 class="card-title card-song-name refer"
                                        style="color: var(--text_dark_theme-color);">Thiên Lý Ơi</h6>
                                    <p class="card-text card-song-singer text-support">Jack-J97</p>
                                </div>
                                <div class="vip">VIP</div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <div class="card-img-container overflow-hidden rounded-3">
                                    <img class="card-img-top card_song-img rounded-3"
                                        src="../../public/images/music/vpop/sonthuytrungmay-anhrong,jena.jpg"
                                        alt="Card image">
                                    <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                        <i class="fas fa-play icon-play"></i>
                                    </div>
                                </div>
                                <div class="card-body ps-0 pe-0">
                                    <h6 class="card-title card-song-name refer"
                                        style="color: var(--text_dark_theme-color);">Sơn Thủy Trùng Mây</h6>
                                    <p class="card-text card-song-singer text-support">Jena, Anh Rồng</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <div class="card-img-container overflow-hidden rounded-3 ">
                                    <img class="card-img-top card_song-img rounded-3"
                                        src="../../public/images/music/vpop/gaclaiaulo-dalab,miule.jpg"
                                        alt="Card image">
                                    <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                        <i class="fas fa-play icon-play"></i>
                                    </div>


                                </div>
                                <div class="card-body ps-0 pe-0">
                                    <h6 class="card-title card-song-name refer"
                                        style="color: var(--text_dark_theme-color);">Gác Lại Âu Lo</h6>
                                    <p class="card-text card-song-singer text-support">Da LAB, Miu Lê</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <div class="card-img-container overflow-hidden rounded-3 ">
                                    <img class="card-img-top card_song-img rounded-3"
                                        src="../../public/images/music/vpop/chanai-orange,khoi.jpg" alt="Card image">
                                    <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                        <i class="fas fa-play icon-play"></i>
                                    </div>
                                </div>
                                <div class="card-body ps-0 pe-0">
                                    <h6 class="card-title card-song-name refer"
                                        style="color: var(--text_dark_theme-color);">Chân Ái</h6>
                                    <p class="card-text card-song-singer text-support">Orange, Khói</p>
                                </div>
                                <div class="vip">VIP</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <div class="card-img-container overflow-hidden rounded-3 ">
                                    <img class="card-img-top card_song-img rounded-3"
                                        src="../../public/images/music/vpop/emlaai-keyo.jpg" alt="Card image">
                                    <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                        <i class="fas fa-play icon-play"></i>
                                    </div>
                                </div>
                                <div class="card-body ps-0 pe-0">
                                    <h6 class="card-title card-song-name refer"
                                        style="color: var(--text_dark_theme-color);">Em Là Ai?</h6>
                                    <p class="card-text card-song-singer text-support">Keyo</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <div class="card-img-container overflow-hidden rounded-3 ">
                                    <img class="card-img-top card_song-img rounded-3"
                                        src="../../public/images/music/vpop/hanhlangcu-longnonla,masew.jpg"
                                        alt="Card image">
                                    <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                        <i class="fas fa-play icon-play"></i>
                                    </div>


                                </div>
                                <div class="card-body ps-0 pe-0">
                                    <h6 class="card-title card-song-name refer"
                                        style="color: var(--text_dark_theme-color);">Hành Lang Cũ</h6>
                                    <p class="card-text card-song-singer text-support">Long Nón Lá, Masew</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="song-active-comment text-white-primary mb-5 pt-3">
                    <h4 class="mb-5">Bình luận</h4>
                    <div class="user-comment-container d-flex mb-4 align-items-center">
                        <div>
                            <img src="../../public/images/avatars/default-avatar.jpg" alt=""
                                class="avatar-comment rounded-circle">
                        </div>
                        <div
                            class="input-content-container bg-black-primary rounded-4 border border-2 d-flex align-items-center ps-4 pe-4 pt-2 pb-2 ms-4">
                            <form action="" class="d-flex align-items-center justify-content-between">
                                <input type="hidden" name="userId" id="userId">
                                <input type="text" placeholder="Nhập bình luận..." class="input-comment" autocomplete="off"
                                    name="commentContent">
                                <i class="fa-solid fa-paper-plane d-block refer ms-2"></i>
                            </form>
                        </div>
                    </div>
                    <div class="comments-container">
                        <div class="comment d-flex pt-3" data-commentLevel="1" data-commentId="">
                            <div class="avatar-comment-container">
                                <img src="../../public/images/avatars/default-avatar.jpg" alt=""
                                    class="avatar-comment rounded-circle">
                            </div>
                            <div class="comment-container-rightside d-flex flex-column ps-3">
                                <div class="comment-info d-flex flex-wrap">
                                    <span class="commenter-name d-block">Hồ Đức Tùng</span>
                                    <span class="comment-time text-support d-block">. 11 tháng 9</span>
                                </div>
                                <div class="comment-content-container pt-2">
                                    <p class="comment-content">Lâu rồi mới nghe lại bài này, có ai giống mình không 🥹</p>
                                </div>
                                <div class="comment-option text-support">
                                    <span class="comment-favorite refer me-4">
                                        <i class="fa-regular fa-heart"></i>
                                        <span class="numberOfFavorite">120</span>
                                    </span>
                                    <span class="refer commenting">Trả lời</span>
                                </div>
                                <div class="reply-comment">
                                    <div class="mt-2 text-support refer more-comments-rely">Xem phản hồi <i class="fa-solid fa-angle-down"></i></div>
                                    <div class="comments-relied-container">
                                        <div class="comment d-flex pt-3" data-commentLevel="2" data-commentId="">
                                            <div class="avatar-comment-container">
                                                <img src="../../public/images/avatars/default-avatar.jpg" alt=""
                                                    class="avatar-comment rounded-circle">
                                            </div>
                                            <div class="comment-container-rightside d-flex flex-column ps-3">
                                                <div class="comment-info d-flex flex-wrap">
                                                    <span class="commenter-name d-block">Phan Trọng Tín</span>
                                                    <span class="comment-time text-support d-block">. 11 tháng 9</span>
                                                </div>
                                                <div class="comment-content-container pt-2">
                                                    <p class="comment-content">Hông</p>
                                                </div>
                                                <div class="comment-option text-support">
                                                    <span class="comment-favorite refer me-4">
                                                        <i class="fa-regular fa-heart"></i>
                                                        <span class="numberOfFavorite">150</span>
                                                    </span>
                                                    <span class="refer commenting">Trả lời</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment d-flex pt-3" data-commentLevel="2" data-commentId="">
                                            <div class="avatar-comment-container">
                                                <img src="../../public/images/avatars/default-avatar.jpg" alt=""
                                                    class="avatar-comment rounded-circle">
                                            </div>
                                            <div class="comment-container-rightside d-flex flex-column ps-3">
                                                <div class="comment-info d-flex flex-wrap">
                                                    <span class="commenter-name d-block">Hồ Đức Tùng</span>
                                                    <span class="comment-time text-support d-block">. 11 tháng 9</span>
                                                </div>
                                                <div class="comment-content-container pt-2">
                                                    <p class="comment-content">
                                                        <strong>Phan Trọng Tín</strong>
                                                        Giỡn mặt hả :)))
                                                    </p>
                                                </div>
                                                <div class="comment-option text-support">
                                                    <span class="comment-favorite refer me-4">
                                                        <i class="fa-regular fa-heart"></i>
                                                        <span class="numberOfFavorite">10</span>
                                                    </span>
                                                    <span class="refer commenting">Trả lời</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="comment d-flex pt-3" data-commentLevel="1" data-commentId="">
                            <div class="avatar-comment-container">
                                <img src="../../public/images/avatars/default-avatar.jpg" alt=""
                                    class="avatar-comment rounded-circle">
                                <div class="avatar-vip rounded-circle"></div>
                            </div>
                            <div class="comment-container-rightside d-flex flex-column ps-3">
                                <div class="comment-info d-flex flex-wrap">
                                    <span class="commenter-name d-block">Hoàng Phương Vy</span>
                                    <span class="d-block account-comment-level">VIP</span>
                                    <span class="comment-time text-support d-block">. 1 tháng 6</span>
                                </div>
                                <div class="comment-content-container pt-2">
                                    <p class="comment-content">Hay quá!</p>
                                </div>
                                <div class="comment-option text-support">
                                    <span class="comment-favorite refer me-4">
                                        <i class="fa-regular fa-heart"></i>
                                        <span class="numberOfFavorite">50</span>
                                    </span>
                                    <span class="refer commenting">Trả lời</span>
                                </div>
                                <div class="reply-comment"></div>
                            </div>
                        </div>
                        <div class="comment d-flex pt-3" data-commentLevel="1" data-commentId="">
                            <div class="avatar-comment-container">
                                <img src="../../public/images/avatars/default-avatar.jpg" alt=""
                                    class="avatar-comment rounded-circle">
                            </div>
                            <div class="comment-container-rightside d-flex flex-column ps-3">
                                <div class="comment-info d-flex flex-wrap">
                                    <span class="commenter-name d-block">Ngô Thanh Lam</span>
                                    <span class="comment-time text-support d-block">. 5 tháng 5</span>
                                </div>
                                <div class="comment-content-container pt-2">
                                    <p class="comment-content">Bài này cuốn 🥰</p>
                                </div>
                                <div class="comment-option text-support">
                                    <span class="comment-favorite refer me-4">
                                        <i class="fa-regular fa-heart"></i>
                                        <span class="numberOfFavorite">5</span>
                                    </span>
                                    <span class="refer commenting">Trả lời</span>
                                </div>
                                <div class="reply-comment"></div>
                            </div>
                        </div>
                        <div class="comment d-flex pt-3" data-commentLevel="1" data-commentId="">
                            <div class="avatar-comment-container">
                                <img src="../../public/images/avatars/default-avatar.jpg" alt=""
                                    class="avatar-comment rounded-circle">
                            </div>
                            <div class="comment-container-rightside d-flex flex-column ps-3">
                                <div class="comment-info d-flex flex-wrap">
                                    <span class="commenter-name d-block">Nguyễn Thị Bảy</span>
                                    <span class="comment-time text-support d-block">. 16 tháng 2</span>
                                </div>
                                <div class="comment-content-container pt-2">
                                    <p class="comment-content">Cô năm nay U50 rồi nhưng cô rất thích nghe bài hát này 💐💐💐🌹🌹🌹🌷🌷🌷🌻🌻🌻🪻🪻🪻🍀🍀🍀🌺🌺🌺🪷🪷🪷🥀🥀🥀🌼🌼🌼☘️☘️☘️🌾🌾🌾🌿🌿🌿🎋🎋🎋</p>
                                </div>
                                <div class="comment-option text-support">
                                    <span class="comment-favorite refer me-4">
                                        <i class="fa-regular fa-heart"></i>
                                        <span class="numberOfFavorite">5</span>
                                    </span>
                                    <span class="refer commenting">Trả lời</span>
                                </div>
                                <div class="reply-comment"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script>
        const commentsContainer = document.querySelector('.comments-container')

        commentsContainer.onclick = (e) => {
            const moreCommentsRelied = e.target.closest('.more-comments-rely')
            if (moreCommentsRelied) {
                const RelyComments = e.target.closest('.reply-comment')
                const commentsReliedContainer = RelyComments.querySelector('.comments-relied-container')
                commentsReliedContainer.style.display = 'block'
                moreCommentsRelied.style.display = 'none'
            }
        }
    </script>

    <!-- AUDIO CONTROL -->

    <?php require './audio-menu.php'; ?>

    <!-- FOOTER -->

    <?php include './footer.php' ?>

    <script src="../../public/js/application.js"></script>

    <script>
        const dataPlayListSongs = [{
                name: 'Gác lại âu lo',
                singer: 'Da LAB, Miu Lê',
                path: '../../public/music/basic/vpop/GacLaiAuLo-DaLAB,MiuLe.mp3',
                img: '../../public/images/music/vpop/gaclaiaulo-dalab,miule.jpg'
            },
            {
                name: 'Thanh xuân',
                singer: 'Da LAB',
                path: '../../public/music/basic/vpop/ThanhXuan-DaLAB.mp3',
                img: '../../public/images/music/vpop/thanhxuan-dalab.jpg'
            },
            {
                name: 'Ái nộ',
                singer: 'Masew, Khôi Vũ',
                path: '../../public/music/basic/vpop/AiNo-Masew,KhoiVu.mp3',
                img: '../../public/images/music/vpop/aino-masew,khoivu.jpg'
            },
            {
                name: 'Mượn rượu tỏ tình',
                singer: 'Emily, BigDaddy',
                path: '../../public/music/basic/vpop/MuonRuouToTinh-Emily,BigDaddy.mp3',
                img: '../../public/images/music/vpop/muonruoutotinh-emily,bigdaddy.jpg'
            },
            {
                name: 'Túy âm',
                singer: 'Xesi, Masew, Nhật Nguyễn',
                path: '../../public/music/basic/vpop/TuyAm-Xesi,Masew,NhatNguyen.mp3',
                img: '../../public/images/music/vpop/tuyam-xesi,masew,nhatnguyen.jpg'
            },
            {
                name: 'Có em chờ',
                singer: 'Min, Mr.A',
                path: '../../public/music/basic/vpop/CoEmCho-Min,MrA.mp3',
                img: '../../public/images/music/vpop/coemcho-min,mra.jpg'
            },
            {
                name: 'Kém duyên',
                singer: 'Rum, NIT, Masew',
                path: '../../public/music/basic/vpop/KemDuyen-Rum,NIT,Masew.mp3',
                img: '../../public/images/music/vpop/kemduyen-rum,nit,masew.jpg'
            },
            {
                name: 'Khó vẽ nụ cười',
                singer: 'Đạt G, Du Uyên',
                path: '../../public/music/basic/vpop/KhoVeNuCuoi-DatG,DuUyen.mp3',
                img: '../../public/images/music/vpop/khovenucuoi-datg,duuyen.jpg'
            },
            {
                name: 'Đã lỡ yêu em nhiều',
                singer: 'JustaTee',
                path: '../../public/music/basic/vpop/DaLoYeuEmNhieu-JustaTee.mp3',
                img: '../../public/images/music/vpop/daloyeuemnhieu-justatee.jpg'
            },
            {
                name: 'Yêu là tha thu (Em chưa 18 OST)',
                singer: 'Only C',
                path: '../../public/music/basic/vpop/YeuLaThaThuEmChua18Ost-OnlyC.mp3',
                img: '../../public/images/music/vpop/yeulathathu-onlyc.jpg'
            },
            {
                name: 'Tháng tư là lời nói dối của em',
                singer: 'Hà Anh Tuấn',
                path: '../../public/music/basic/vpop/ThangTuLaLoiNoiDoiCuaEm-HaAnhTuan.mp3',
                img: '../../public/images/music/vpop/thangtulaloinoidoicuaem-haanhtuan.jpg'
            }
        ]

        const dataRecentSongs = [{
                name: 'Hoa Cỏ Lau',
                singer: 'Phong Max',
                path: '../../public/music/basic/vpop/HoaCoLau-PhongMax.mp3',
                img: '../../public/images/music/vpop/hoacolau-phongmax.jpg'
            },
            {
                name: 'Bồ Công Anh',
                singer: 'Phong Max',
                path: '../../public/music/basic/vpop/BoCongAnh-PhongMax.mp3',
                img: '../../public/images/music/vpop/boconganh-phongmax.jpg'
            },
            {
                name: 'Bên Trên Tầng Lầu',
                singer: 'Tăng Duy Tân',
                path: '../../public/music/basic/vpop/BenTrenTangLau-TangDuyTan.mp3',
                img: '../../public/images/music/vpop/bentrentanglau-tangduytan.jpg'
            },
            {
                name: 'Cao Ốc 20',
                singer: 'B Ray, Đạt G, Masew, K-ICM ',
                path: '../../public/music/basic/vpop/caooc20-BRay,DatG,Masew,K-ICM.mp3',
                img: '../../public/images/music/vpop/caooc20-bray,datg,masew,k-icm.jpg'
            },
            {
                name: 'Câu Hứa Chưa Vẹn Tròn',
                singer: 'Phát Huy T4',
                path: '../../public/music/basic/vpop/CauHuaChuaVenTron-PhatHuyT4.mp3',
                img: '../../public/images/music/vpop/cauhuachuaventron-phathuyt4.jpg'
            },
            {
                name: 'Đại Minh Tinh',
                singer: 'Văn Mai Hương',
                path: '../../public/music/basic/vpop/DaiMinhTinh-VanMaiHuong.mp3',
                img: '../../public/images/music/vpop/daiminhtinh-vanmaihuong.jpg'
            },
            {
                name: 'Buồn Thì Cứ Khóc Đi',
                singer: 'Lynk Lee',
                path: '../../public/music/basic/vpop/BuonThiCuKhocDi-LynkLee.mp3',
                img: '../../public/images/music/vpop/buonthicukhocdi-lynklee.jpg'
            },
            {
                name: 'Nevada',
                singer: 'CoziZuehsdorff, Vicetone',
                path: '../../public/music/basic/us-uk/Nevada-CoziZuehsdorff,Vicetone.mp3',
                img: '../../public/images/music/us-uk/nevada-cozizuehsdorff,vicetone.jpg'
            },
            {
                name: 'Faded',
                singer: 'Alan Walker',
                path: '../../public/music/basic/us-uk/Faded-AlanWalker.mp3',
                img: '../../public/images/music/us-uk/faded-alanwalker.jpg'
            },
            {
                name: 'Shape Of You',
                singer: 'Ed Sheeran',
                path: '../../public/music/basic/us-uk/ShapeOfYou-EdSheeran.mp3',
                img: '../../public/images/music/us-uk/shapeofyou-edsheeran.jpg'
            },
            {
                name: 'Pháo Hồng',
                singer: 'Đạt Long Vinh',
                path: '../../public/music/basic/vpop/PhaoHong-DatLongVinh.mp3',
                img: '../../public/images/music/vpop/phaohong-datlongvinh.jpg'
            },
            {
                name: 'Chân Ái',
                singer: 'Orange, Khói',
                path: '../../public/music/basic/vpop/ChanAi-Orange,Khoi.mp3',
                img: '../../public/images/music/vpop/chanai-orange,khoi.jpg'
            },
            {
                name: 'Hành Lang Cũ',
                singer: 'Long Nón Lá, Masew',
                path: '../../public/music/basic/vpop/HanhLangCu-LongNonLa,Masew.mp3',
                img: '../../public/images/music/vpop/hanhlangcu-longnonla,masew.jpg'
            },
            {
                name: 'Hãy Trao Cho Anh',
                singer: 'Sơn Tùng M-TP, Snoop Dogg',
                path: '../../public/music/basic/vpop/HayTraoChoAnh-SonTungM-TP,SnoopDogg.mp3',
                img: '../../public/images/music/vpop/haytraochoanh-sontungm-tp,snoopdogg.jpg'
            },
            {
                name: 'Lạc Trôi',
                singer: 'Sơn Tùng M-TP',
                path: '../../public/music/basic/vpop/LacTroi-SonTungM-TP.mp3',
                img: '../../public/images/music/vpop/lactroi-sontungm-tp.jpg'
            },
            {
                name: 'Nơi Này Có Anh',
                singer: 'Sơn Tùng M-TP',
                path: '../../public/music/basic/vpop/NoiNayCoAnh-SonTungM-TP.mp3',
                img: '../../public/images/music/vpop/noinaycoanh-sontungm-tp.jpg'
            },
            {
                name: 'Thiên Lý Ơi',
                singer: 'Jack-J97',
                path: '../../public/music/basic/vpop/ThienLyOi-Jack-J97.mp3',
                img: '../../public/images/music/vpop/thienlyoi-jack-j97.jpg'
            },
            {
                name: 'Lời Yêu Ngay Dại',
                singer: 'Kha',
                path: '../../public/music/basic/vpop/LoiYeuNgayDai-Kha.mp3',
                img: '../../public/images/music/vpop/loiyeungaydai-kha.jpg'
            },
            {
                name: 'CaFé Không Đường',
                singer: 'Jombie, Tkan, Bean',
                path: '../../public/music/basic/vpop/CaFéKhôngĐường-Jombie,Tkan,Bean.mp3',
                img: '../../public/images/music/vpop/cafekhongduong-jombie,tkan,bean.jpg'
            },
        ]

        app.setDataSongs(dataPlayListSongs)
        app.setDataRecentSongs(dataRecentSongs)
        app.init()
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
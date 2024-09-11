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
        /* Content */

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

        .card-song:hover .card-hover-song {
            display: block;
        }

        .clean-audio-control {
            display: none;
        }

        .card-img-container {
            position: relative;
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

        @media screen and (max-width: 992px) {

            /* CONTENT */

            .carousel-item img {
                height: 250px;
            }

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

    <main id="content" class="container-fluid bg-black-primary ps-0">
        <div class="row">

            <div class="col-2 bg-black-primary">
            </div>

            <div class="col-10 content p-4 pt-0">

                <!-- CAROUSEL -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../public/images/other/slide_of_carousel1.jpg" alt="Los Angeles"
                                class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../../public/images/other/slide_of_carousel2.png" alt="Chicago"
                                class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../../public/images/other/slide_of_carousel3.webp" alt="New York"
                                class="d-block w-100">
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>

                <!-- PLAYLIST SUGGESTION -->

                <div class="container playlist-suggestion mt-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="text-white-primary">PLAYLIST ĐỀ XUẤT</h5>
                        <a href="" class="text-decoration-none text-support fw-bolder refer">Tất cả
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/playlist/chill.jpg" alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Ở đây có nhạc chill</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/playlist/top10hitthemaskedsingervietnam.png"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">10 bài hát hay nhất The Masked
                                            Singer VietNam mùa 2</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/playlist/topvpop2018.webp" alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Top V-POP nửa năm 2018</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/playlist/remixhottiktok.jpg" alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Những bản remix hot Tik Tok</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/playlist/vpophit.jpg" alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Nhạc V-POP hit làm nên tên tuổi
                                            nghệ sĩ</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/playlist/haynhatcuabigdaddy.jpg" alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Những bài hát hay nhất cảu BigDaddy
                                        </h6>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- NEW SONGS -->

                <div class="container mt-4 new-songs-container mt-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="text-white-primary">MỚI PHÁT HÀNH</h5>
                        <a href="" class="text-decoration-none text-support fw-bolder refer">Tất cả
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 new-song d-flex p-2" data-index="">
                            <div class="new-song_img-container" style="width: 100px;">
                                <img src="../../public/images/music/vpop/haytraochoanh-sontungm-tp,snoopdogg.jpg"
                                    class="rounded-2" alt="" style="width: 67px; height: 67px;">
                            </div>
                            <div class="new-song-info">
                                <h6 class="new-song-name text-white-primary refer">Hãy trao cho anh</h6>
                                <p class="new-song-singer text-support m-0">Sơn Tùng M-TP</p>
                                <p class="new-song-time text-support m-0">Hôm qua</p>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 col-lg-4 new-song d-flex p-2" data-index="">
                            <div class="new-song_img-container" style="width: 100px;">
                                <img src="../../public/images/music/vpop/vuahanvuayeu-trungtu.jpg" class="rounded-2"
                                    alt="" style="width: 67px; height: 67px;">
                            </div>
                            <div class="new-song-info">
                                <h6 class="new-song-name text-white-primary refer">Vừa Hận Vừa Yêu</h6>
                                <p class="new-song-singer text-support m-0">Trung Tự</p>
                                <p class="new-song-time text-support m-0">3 ngày trước</p>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 col-lg-4 new-song d-flex p-2" data-index="">
                            <div class="new-song_img-container" style="width: 100px;">
                                <img src="../../public/images/music/vpop/camtucau-rayo,huynhvan.jpg" class="rounded-2"
                                    alt="" style="width: 67px; height: 67px;">
                            </div>
                            <div class="new-song-info">
                                <h6 class="new-song-name text-white-primary refer">Cẩm Tú Cầu</h6>
                                <p class="new-song-singer text-support m-0">Rayo, Huỳnh văn</p>
                                <p class="new-song-time text-support m-0">Hôm qua</p>
                            </div>

                        </div>


                        <div class="col-12 col-md-6 col-lg-4 new-song d-flex p-2" data-index="">
                            <div class="new-song_img-container" style="width: 100px;">
                                <img src="../../public/images/music/vpop/nonhaumotloi-phucchinh.jpg" class="rounded-2"
                                    alt="" style="width: 67px; height: 67px;">
                            </div>
                            <div class="new-song-info">
                                <h6 class="new-song-name text-white-primary refer">Nợ Nhau Một Lời</h6>
                                <p class="new-song-singer text-support m-0">Phúc Chinh</p>
                                <p class="new-song-time text-support m-0">2 ngày trước</p>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 col-lg-4 new-song d-flex p-2" data-index="">
                            <div class="new-song_img-container" style="width: 100px;">
                                <img src="../../public/images/music/vpop/hoacolau-phongmax.jpg" class="rounded-2" alt=""
                                    style="width: 67px; height: 67px;">
                            </div>
                            <div class="new-song-info">
                                <h6 class="new-song-name text-white-primary refer">Hoa Cỏ Lau</h6>
                                <p class="new-song-singer text-support m-0">Phong Max</p>
                                <p class="new-song-time text-support m-0">Hôm qua</p>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 col-lg-4 new-song d-flex p-2" data-index="">
                            <div class="new-song_img-container" style="width: 100px;">
                                <img src="../../public/images/music/vpop/cauhuachuaventron-phathuyt4.jpg"
                                    class="rounded-2" alt="" style="width: 67px; height: 67px;">
                            </div>
                            <div class="new-song-info">
                                <h6 class="new-song-name text-white-primary refer">Câu Hứa Chưa Vẹn Tròn</h6>
                                <p class="new-song-singer text-support m-0">Phát Huy T4</p>
                                <p class="new-song-time text-support m-0">2 ngày trước</p>
                            </div>

                        </div>


                        <div class="col-12 col-md-6 col-lg-4 new-song d-flex p-2" data-index="">
                            <div class="new-song_img-container" style="width: 100px;">
                                <img src="../../public/images/music/vpop/phaohong-datlongvinh.jpg" class="rounded-2"
                                    alt="" style="width: 67px; height: 67px;">
                            </div>
                            <div class="new-song-info">
                                <h6 class="new-song-name text-white-primary refer">Pháo Hồng</h6>
                                <p class="new-song-singer text-support m-0">Đạt Long Vinh</p>
                                <p class="new-song-time text-support m-0">2 ngày trước</p>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 col-lg-4 new-song d-flex p-2" data-index="">
                            <div class="new-song_img-container" style="width: 100px;">
                                <img src="../../public/images/music/vpop/coemcho-min,mra.jpg" class="rounded-2" alt=""
                                    style="width: 67px; height: 67px;">
                            </div>
                            <div class="new-song-info">
                                <h6 class="new-song-name text-white-primary refer">Có Em Chờ</h6>
                                <p class="new-song-singer text-support m-0">Min, Mr.A</p>
                                <p class="new-song-time text-support m-0">5 giờ trước</p>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 col-lg-4 new-song d-flex p-2" data-index="">
                            <div class="new-song_img-container" style="width: 100px;">
                                <img src="../../public/images/music/vpop/emlaai-keyo.jpg" class="rounded-2" alt=""
                                    style="width: 67px; height: 67px;">
                            </div>
                            <div class="new-song-info">
                                <h6 class="new-song-name text-white-primary refer">Em là ai</h6>
                                <p class="new-song-singer text-support m-0">Keyo</p>
                                <p class="new-song-time text-support m-0">1 giờ trước</p>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- TOP 100 RANKING -->

                <div class="container mt-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="text-white-primary">TOP 100 BÀI HÁT THỊNH HÀNH</h5>
                        <a href="" class="text-decoration-none text-support fw-bolder refer">Tất cả
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-3"></div>
                        <div class="col-3"></div>
                        <div class="col-3"></div>
                    </div>
                </div>

                <!-- LISTEN RECENTLY -->

                <div class="container listen-recently mt-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="text-white-primary">NGHE GẦN ĐÂY</h5>
                        <a href="" class="text-decoration-none text-support fw-bolder refer">Tất cả
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/boconganh-phongmax.jpg" alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>
                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Bồ Công Anh</h6>
                                        <p class="card-text card-song-singer text-support">Phong Max</p>
                                    </div>
                                    <div class="vip">VIP</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/bentrentanglau-tangduytan.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Bên Trên Tầng Lầu</h6>
                                        <p class="card-text card-song-singer text-support">Tăng Duy Tân</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/caooc20-bray,datg,masew,k-icm.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>

                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Cao Ốc 20</h6>
                                        <p class="card-text card-song-singer text-support">B Ray, Đạt G</p>
                                    </div>
                                    <div class="vip">VIP</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/daloyeuemnhieu-justatee.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Đã Lỡ Yêu Em Nhiều</h6>
                                        <p class="card-text card-song-singer text-support">JustaTee</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/muonruoutotinh-emily,bigdaddy.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Mượn Rượu Tỏ Tình</h6>
                                        <p class="card-text card-song-singer text-support">Emily, BigDaddy</p>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/tuyam-xesi,masew,nhatnguyen.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Túy Âm</h6>
                                        <p class="card-text card-song-singer text-support">Xesi, Masew, Nhật Nguyễn</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SONGS SUGGESTION -->

                <div class="container song-suggestion mt-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="text-white-primary">CÓ THỂ BẠN MUỐN NGHE</h5>
                        <a href="" class="text-decoration-none text-support fw-bolder refer">Tất cả
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
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
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
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
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
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
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
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
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
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
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
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

                <!-- HOT HIT -->

                <div class="container hot-hit mt-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="text-white-primary">HOT HIT</h5>
                        <a href="" class="text-decoration-none text-support fw-bolder refer">Tất cả
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/haytraochoanh-sontungm-tp,snoopdogg.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Hãy Trao Cho Anh</h6>
                                        <p class="card-text card-song-singer text-support">Sơn Tùng M-TP, Snoop Doggs</p>
                                    </div>
                                    <div class="vip">VIP</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/noinaycoanh-sontungm-tp.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Nơi Này Có Anh</h6>
                                        <p class="card-text card-song-singer text-support">Sơn Tùng M-TP</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/nguoiamphu-osad,vrt.jpg" alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Người Âm Phủ</h6>
                                        <p class="card-text card-song-singer text-support">Osad, VRT</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/cunganh-ngocdolil,,hagii,stee.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Cùng Anh</h6>
                                        <p class="card-text card-song-singer text-support">Ngọc Dolil, Hagii, STee</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/yeulathathu-onlyc.jpg" alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Yêu Là Tha Thứ (OST Em Chưa 18)
                                        </h6>
                                        <p class="card-text card-song-singer text-support">Only C</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/bentrentanglau-tangduytan.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Bên Trên Tầng Lầu</h6>
                                        <p class="card-text card-song-singer text-support">Tăng Duy Tân</p>
                                    </div>
                                    <div class="vip">VIP</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CHILL SONGS -->

                <div class="container chill-songs listen-recently mt-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="text-white-primary">NHẠC CHILL</h5>
                        <a href="" class="text-decoration-none text-support fw-bolder refer">Tất cả
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/thanhxuan-dalab.jpg" alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Thanh Xuân</h6>
                                        <p class="card-text card-song-singer text-support">Da LAB</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
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
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/cafekhongduong-jombie,tkan,bean.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Cùng Anh</h6>
                                        <p class="card-text card-song-singer text-support">Ngọc Dolil, Hagii, STee</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/coemcho-min,mra.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Có Em Chờ</h6>
                                        <p class="card-text card-song-singer text-support">Min, Mr.A</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/noinaycoanh-sontungm-tp.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Nơi Này Có Anh</h6>
                                        <p class="card-text card-song-singer text-support">Sơn Tùng M-TP</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/vpop/thangtulaloinoidoicuaem-haanhtuan.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Tháng Tư Là Lời Nói Dối Của Em</h6>
                                        <p class="card-text card-song-singer text-support">Hà Anh Tuấn</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- REMIX -->

                <div class="container chill-songs listen-recently mt-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="text-white-primary">NHẠC REMIX</h5>
                        <a href="" class="text-decoration-none text-support fw-bolder refer">Tất cả
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/remix/tuyetsac(remix)-thanhphong.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Tuyệt Sắc</h6>
                                        <p class="card-text card-song-singer text-support">Thanh Phong remix</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/remix/vokichcuaem(remix)-thereon,ntpvinahouse.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Vở Kịch Của Em</h6>
                                        <p class="card-text card-song-singer text-support">Thereon remix, NTP Vinahouse</p>
                                    </div>
                                    <div class="vip">VIP</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/remix/sonthuytrungmay(remix)-anhrong,jena,sinkra.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Sơn Thủy Trùng Mây</h6>
                                        <p class="card-text card-song-singer text-support">Anh Rồng, Jena, SinKra remix</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/remix/thithoi(remix)-tvk,nal.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Thì Thôi</h6>
                                        <p class="card-text card-song-singer text-support">TVK, Nal</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/remix/tinhtahainga(remix)-akikhoa,dori.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Tình Ta Hai Ngã</h6>
                                        <p class="card-text card-song-singer text-support">Aki Khoa, Dori remix</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/remix/khuatloi(remix)-nb3hoaibao,h2oremix.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Khuất Lối</h6>
                                        <p class="card-text card-song-singer text-support">NB3 Hoài Bảo, H2O remix</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- US-UK -->

                <div class="container chill-songs listen-recently mt-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="text-white-primary">US - UK</h5>
                        <a href="" class="text-decoration-none text-support fw-bolder refer">Tất cả
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/us-uk/nevada-cozizuehsdorff,vicetone.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>
                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Nevada</h6>
                                        <p class="card-text card-song-singer text-support">Da LAB</p>
                                    </div>
                                    <div class="vip">VIP</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/us-uk/faded-alanwalker.jpg" alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>
                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Faded</h6>
                                        <p class="card-text card-song-singer text-support">Alan Warker</p>
                                    </div>
                                    <div class="vip">VIP</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/us-uk/shapeofyou-edsheeran.jpg" alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>
                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Shape Of You</h6>
                                        <p class="card-text card-song-singer text-support">Ed Sheeran</p>
                                    </div>
                                    <div class="vip">VIP</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/us-uk/waitingforlove-avicii.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>
                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Waiting for love</h6>
                                        <p class="card-text card-song-singer text-support">Avicii</p>
                                    </div>
                                    <div class="vip">VIP</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/us-uk/youngandbeautiful-lanadelrey.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>
                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Young And Beautiful</h6>
                                        <p class="card-text card-song-singer text-support">Lana Del Rey</p>
                                    </div>
                                    <div class="vip">VIP</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/us-uk/cheapthrill-sia.jpg" alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>
                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Cheap Thrill</h6>
                                        <p class="card-text card-song-singer text-support">Sia</p>
                                    </div>
                                    <div class="vip">VIP</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NHẠC TRỮ TÌNH -->

                <div class="container chill-songs listen-recently mt-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="text-white-primary">NHẠC TRỮ TÌNH</h5>
                        <a href="" class="text-decoration-none text-support fw-bolder refer">Tất cả
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/nhactrutinh/chimtrangmocoi-camly,dantruong.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>
                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Chim Trắng Mồ Côi</h6>
                                        <p class="card-text card-song-singer text-support">Cẩm Ly, Đan Trường</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/nhactrutinh/hanhtrinhtrendatphussa-phinhung.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Hành Trình Trên Đát Phù Sa</h6>
                                        <p class="card-text card-song-singer text-support">Phi Nhung</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/nhactrutinh/dapvocaydan-quangle.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Đạp Vỡ Cây Đàn</h6>
                                        <p class="card-text card-song-singer text-support">Quang Lê</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/nhactrutinh/vunglamebay-nhuquynh.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Vùng Lá Me Bay</h6>
                                        <p class="card-text card-song-singer text-support">Như Quỳnh</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/nhactrutinh/vonguatrendoiconon-quocdai.jpg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Vó Ngựa Trên Đồi Cỏ Non</h6>
                                        <p class="card-text card-song-singer text-support">Quốc Đại</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="card card-song" data-index="" style="background-color: var(--black-color);">
                                <a href="song.php" class="text-decoration-none">
                                    <div class="card-img-container overflow-hidden rounded-3 ">
                                        <img class="card-img-top card_song-img rounded-3"
                                            src="../../public/images/music/nhactrutinh/sautimmthiephong-lequyen,quangle.jpeg"
                                            alt="Card image">
                                        <div class="card-hover-song rounded-circle text-center fs-5 lh-lg">
                                            <i class="fas fa-play icon-play"></i>
                                        </div>


                                    </div>
                                    <div class="card-body ps-0 pe-0">
                                        <h6 class="card-title card-song-name refer"
                                            style="color: var(--text_dark_theme-color);">Sầu Tím Thiệp Hồng</h6>
                                        <p class="card-text card-song-singer text-support">Lệ quyên, Quang Lê</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SPONSORS -->

                <div class="sponsor container mt-4">
                    <h5 class="text-white-primary">ĐỐI TÁC ÂM NHẠC</h5>
                    <div class="row p-5 pt-0">
                        <div class="col-12 col-sm-6 col-md-3 col-xl-2 mt-4">

                            <img style="width: 130px; height: 70px;"
                                src="../../public/images/sponsor/monstercat.jpg" alt="" class="rounded-4">

                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-xl-2 mt-4">

                            <img style="width: 130px; height: 70px;"
                                src="../../public/images/sponsor/sony-music.png" alt="" class="rounded-4">

                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-xl-2 mt-4">

                            <img style="width: 130px; height: 70px;"
                                src="../../public/images/sponsor/the-orchard.jpg" alt="" class="rounded-4">

                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-xl-2 mt-4">

                            <img style="width: 130px; height: 70px;" src="../../public/images/sponsor/emprire.png"
                                alt="" class="rounded-4">

                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-xl-2 mt-4">

                            <img style="width: 130px; height: 70px;"
                                src="../../public/images/sponsor/believe-entertainment.png" alt=""
                                class="rounded-4">

                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-xl-2 mt-4">

                            <img style="width: 130px; height: 70px;"
                                src="../../public/images/sponsor/dongtay-promotion.jpg" alt="" class="rounded-4">

                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-xl-2 mt-4">

                            <img style="width: 130px; height: 70px;"
                                src="../../public/images/sponsor/danal-entertainment.png" alt="" class="rounded-4">

                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-xl-2 mt-4">

                            <img style="width: 130px; height: 70px;"
                                src="../../public/images/sponsor/mtp-entertainment.jpg" alt="" class="rounded-4">

                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-xl-2 mt-4">

                            <img style="width: 130px; height: 70px;"
                                src="../../public/images/sponsor/universal_music.jpg" alt="" class="rounded-4">

                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-xl-2 mt-4">

                            <img style="width: 130px; height: 70px;"
                                src="../../public/images/sponsor/sm-entertainment.jpg" alt="" class="rounded-4">

                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-xl-2 mt-4">

                            <img style="width: 130px; height: 70px;" src="../../public/images/sponsor/genie.png"
                                alt="" class="rounded-4">

                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-xl-2 mt-4">

                            <img style="width: 130px; height: 70px;"
                                src="../../public/images/sponsor/kakao-entertainment.png" alt="" class="rounded-4">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

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
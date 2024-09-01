<style>
    .nav-link {
        font-family: Montserrat, 'Open Sans', Inter, sans-serif !important;
    }

    #avatar {
        background-image: url('../../public/images/avatars/default-avatar.jpg');
        width: 38px;
        height: 38px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        cursor: pointer;
    }

    #notification {
        position: relative;
    }

    .notification-number {
        position: absolute;
        color: var(--text_dark_theme-color);
        background-color: red;
        padding: 2px 4px;
        line-height: 10px;
        font-size: 8px;
        top: 0;
        right: -6px;
    }

    .clean-navbar {
        display: none;
    }

    @media screen and (max-width: 992px) {
        /* HEADER */

        .clean-navbar {
            display: block;
        }

        .clean-navbar-before {
            display: none;
        }

    }
</style>

<!-- NAVBAR -->

<header class="fixed-top">
    <nav class="navbar navbar-expand-lg pt-3 pb-3" style="background-color: var(--black-color);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 col-sm-2 pt-1 pb-1 ps-5">
                    <img id="logo" src="../../public/images/other/symphony-darktheme-icon.png" alt="logo"
                        style="width: 80%; min-width: 120px;">
                </div>
                <div class="col-6 col-sm-6 ps-5">
                    <form class="d-flex" role="search">
                        <i
                            class="fa-solid fa-magnifying-glass lh-lg bg-dark_grey-color text-white-primary rounded-start-4 ms-5 ps-3"></i>
                        <input
                            class="form-control no-outline me-2 shadow-none fs-6 bg-dark_grey-color rounded-start-0 rounded-end-4"
                            type="search" placeholder="Search" aria-label="Search"
                            style="width: 70%; color: var(--text_dark_theme-color);">
                    </form>
                </div>
                <div class="col-4 col-sm-4 p-0">
                    <div class="container d-flex justify-content-between">

                        <!-- LOGGED IN -->

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                            <li class="nav-item text-nowrap clean-navbar-before">
                                <button
                                    class="text-black-primary btn-sm bg-white-primary rounded-circle change_theme">
                                    <i class="fa-solid fa-moon refer" style="color: var(--black-color);"></i>
                                    <i class="fa-solid fa-sun d-none" style="color: var(--black-color);"></i>
                                </button>
                                <span class="ms-2 fw-medium text-nowrap text-white-primary refer">
                                    GIAO DIỆN
                                </span>
                            </li>
                            <li class="nav-item clean-navbar-before">
                                <div class="dropdown me-3">
                                    <div class="dropdown-toggle fw-medium text-nowrap text-white-primary refer"
                                        data-bs-toggle="dropdown">
                                        <i id="notification"
                                            class="fa-regular fa-bell refer text-white-primary lh-lg ms-3">
                                            <div class="notification-number rounded-circle">2</div>
                                        </i>
                                        <span class="ms-3">
                                            THÔNG BÁO
                                        </span>
                                    </div>
                                    <ul class="dropdown-menu dropdown-menu-end bg-dark_grey-color"
                                        style="width: 300px;">
                                        <li><a class="dropdown-item text-white-primary" href="#">Thông báo 1</a>
                                        </li>
                                        <li><a class="dropdown-item text-white-primary" href="#">Thông báo 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item clean-navbar">
                                <div class="dropdown me-3">
                                    <div class="dropdown-toggle fw-medium text-nowrap text-white-primary refer text-center"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-bars"></i>
                                    </div>
                                    <ul class="dropdown-menu dropdown-menu-end bg-dark_grey-color"
                                        style="width: 180px;">
                                        <li>
                                            <span class="dropdown-item text-white-primary" href="#">Thông báo
                                                <span class="ps-3 text-danger fw-bolder">2</span>
                                            </span>
                                        </li>
                                        <li class="change_theme-clean text-white-primary">
                                            <span class="dropdown-item text-white-primary">Giao diện
                                                <span class="ps-3">Dark</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!--
                                    
                                    // NO LOGIN
                                    
                                    <li>
                                        <a class="nav-link fw-medium text-nowrap text-white-primary refer" href="#">
                                            Đăng ký
                                        </a>
                                    </li>
                                    <li class="ms-4">
                                        <a class="nav-link fw-medium text-nowrap text-white-primary refer bg-orange-primary btn rounded-4" href="#">
                                            Đăng nhập
                                        </a>
                                    </li> -->


                        </ul>


                        <!-- LOGGED IN -->

                        <div class="dropdown">
                            <div class="rounded-circle me-5 dropdown-toggle" data-bs-toggle="dropdown" id="avatar">
                            </div>
                            <ul class="dropdown-menu dropdown-menu-end bg-dark_grey-color" style="width: 300px;">
                                <li>
                                    <div class="d-flex p-3">
                                        <img src="../../public/images/avatars/default-avatar.jpg"
                                            class="rounded-circle avatarInMenuBar"
                                            style="width: 60px; height: 60px;" alt="">
                                        <div class="ms-4">
                                            <h6 class="text-white-primary">Nguyễn Văn A</h6>
                                            <div class="btn bg-orange-primary text-white-primary">Basic</div>
                                        </div>
                                    </div>
                                </li>
                                <li><a class="dropdown-item text-white-primary" href="#">Hồ sơ</a></li>
                                <li><a class="dropdown-item text-white-primary" href="#">Nâng cấp tài khoản</a></li>
                                <li><a class="dropdown-item text-white-primary" href="#">Liên hệ</a></li>
                                <li><span class="dropdown-item border-top border-2 text-orange-primary">Đăng
                                        xuất</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
    </nav>
</header>
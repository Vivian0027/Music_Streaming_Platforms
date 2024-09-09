<style>
    /* LEFT SIDE */

    .left-side {
        z-index: 10;
    }

    .left-side-item.active,
    .left-side-item:hover {
        background-color: var(--dark_grey-color) !important;
        border-radius: 0;
        box-shadow: inset 5px 0 5px var(--orange-color);
        font-weight: 600;

    }

    .left-side-item:hover i,
    .left-side-item:hover a,
    .left-side-item.active a {
        color: var(--orange-color) !important;
    }

    .left-side-item a {
        font-size: 15px;
        display: block;
    }

    .left-side {
        padding-top: 96px;
    }

    .left-side h5 {
        color: var(--grey-color);
    }

    .list-group a,
    .list-group h5 {
        font-family: Montserrat, 'Open Sans', Inter, sans-serif !important;
    }

    @media screen and (max-width: 992px) {
        .left-side-info {
            display: none;
        }

        .left-side-title {
            display: none;
        }

        .left-side-icon {
            font-size: 20px;
            margin-top: 18px;
            margin-bottom: 20px;
        }

        .left-side-item {
            padding: 0 0 0 30px !important;
        }

        .left-side-item.active,
        .left-side-item:hover {
            background-color: var(--dark_grey-color) !important;
            border-radius: 0;
            box-shadow: inset 5px 0 5px var(--orange-color);
            font-weight: 600;

        }
    }

    @media screen and (max-width: 576px) {

        .left-side-item.active,
        .left-side-item:hover,
        .left-side-item:active {
            background-color: var(--black-color) !important;
            border-radius: 0;
            box-shadow: none;
            font-weight: 600;

        }


    }
</style>

<!-- LEFT SIDE -->

<section>
    <div class="row">
        <div class="col-1 col-lg-2 fixed-top left-side ps-0">
            <ul class="list-group">
                <h5 class="ps-5 pt-4 pb-2 left-side-title">Khám phá</h5>
                <li class="list-group-item left-side-item active bg-black-primary ps-5 border-0">
                    <a class="text-decoration-none text-white-primary" href="#">
                        <i class="left-side-icon pe-2 fa-solid fa-house"></i>
                        <span class="left-side-info">
                            Trang chủ
                        </span>
                    </a>
                </li>
                <li class="list-group-item left-side-item bg-black-primary ps-5 border-0">
                    <a class="text-decoration-none text-white-primary" href="#">
                        <i class="left-side-icon pe-2 fa-solid fa-ranking-star"></i>
                        <span class="left-side-info">
                            Top 100
                        </span>
                    </a>
                </li>
                <li class="list-group-item left-side-item bg-black-primary ps-5 border-0">
                    <a class="text-decoration-none text-white-primary" href="#">
                        <i class="left-side-icon pe-2 fa-solid fa-star"></i>
                        <span class="left-side-info">
                            Mới phát hành
                        </span>
                    </a>
                </li>
                <li class="list-group-item left-side-item bg-black-primary ps-5 border-0">
                    <a class="text-decoration-none text-white-primary" href="#">
                        <i class="left-side-icon pe-2 fa-solid fa-bookmark"></i>
                        <span class="left-side-info">
                            Thể loại
                        </span>
                    </a>
                </li>

                <h5 class="mt-5 ps-5 pb-2 left-side-title">Về Bạn</h5>
                <li class="list-group-item left-side-item bg-black-primary ps-5 border-0">
                    <a class="text-decoration-none text-white-primary" href="#">
                        <i class="left-side-icon pe-2 fa-solid fa-clock"></i>
                        <span class="left-side-info">
                            Nghe gần đây
                        </span>
                    </a>
                </li>
                <li class="list-group-item left-side-item bg-black-primary ps-5 border-0">
                    <a class="text-decoration-none text-white-primary" href="#">
                        <i class="left-side-icon pe-2 fa-regular fa-heart"></i>
                        <span class="left-side-info">
                            Yêu thích
                        </span>
                    </a>
                </li>
                <li class="list-group-item left-side-item bg-black-primary ps-5 border-0">
                    <a class="text-decoration-none text-white-primary" href="#">
                        <i class="left-side-icon pe-2 fa-solid fa-book"></i>
                        <span class="left-side-info">
                            Thư Viện
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-10">
        </div>
    </div>
</section>
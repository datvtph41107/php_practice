<style>
    .main {}

    .main-contain {
        width: 100%;
        height: 100%;
        flex: 1 1 0%;
    }

    .main-contain-slide {
        display: flex;
        flex-direction: column;
        margin-top: -192px;
        overflow: hidden;
        width: 100%;
        position: relative;
        padding-top: 192px;
        padding-left: 32px;
        padding-right: 32px;
    }

    .main-contain-background {
        z-index: 1;
        display: flex;
        position: absolute;
        inset: 0px 0px -1px;
        background-image: url(https://i.seadn.io/gcs/files/4d1ebbdca54f9e0cc2c9e801863c4b93.png?auto=format&dpr=1&w=1920);
        background-size: cover;
        transition: background 0.3s linear 0s;
    }

    .main-contain-background::after {
        backdrop-filter: blur(60px);
        background: linear-gradient(0deg, rgb(255, 255, 255) 5%, rgba(0, 0, 0, 0) 60%) rgba(0, 0, 0, 0.5);
        pointer-events: none;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    ul {
        margin: 0;
        padding: 0;
    }

    .contain-homepage {
        display: flex;
        margin: 24px 0px 32px;
        width: 100%;
        z-index: 2;
    }

    .list-item {
        display: flex;
        justify-content: left;
        gap: 8px;
        padding: 0px 8px;
    }

    .list-item-menu {
        position: relative;
    }

    .list-item-link {
        border-radius: 10px;
        transition: color 0.25s ease-in-out 0s;
        display: flex;
        padding: 8px 16px;
        width: fit-content;
        cursor: pointer;
        color: white;
    }

    .list-item-link.first {
        background: rgba(255, 255, 255, 0.12);
    }

    .list-item-link:hover {
        background: rgba(255, 255, 255, 0.12);
    }

    .slide_include {
        position: relative;
    }

    .slide_show {
        position: relative;
        overflow: hidden;
    }

    .slide_swiper {}

    .swiper-wrapper {}

    .swiper-slide {
        width: fit-content;
        margin-right: 16px;
        justify-content: center;
    }

    .img-swiper {
        position: relative;

    }

    .swiper-description {
        position: absolute;
        bottom: 0;
        color: white;
        margin-left: 12px;
        margin-bottom: 8px;
    }

    .swiper-description h5 {
        font-weight: 600;
        font-size: 16px;
        color: rgb(255, 255, 255);
        margin-bottom: 4px;
    }

    .swiper-description span {
        font-weight: 400;
        font-size: 14px;
    }

    .swiper-img {
        width: 100%;
        height: 100%;
        border-radius: 12px;
    }

    .swiper-button-next {}

    .swiper-button-prev {}

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-family: swiper-icons;
        font-size: 30px;
        font-weight: bold;
        text-transform: none !important;
        letter-spacing: 0;
        font-variant: initial;
        line-height: 1;
        color: white;
    }

    swiper-container {
        width: 100%;
        height: 100%;
    }

    swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 12px;
    }

    swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: white !important;
    }
</style>

<main class="main">
    <div class="main-contain">
        <div class="mb-4">
            <div class="main-contain-slide">
                <div class="main-contain-background">
                </div>
                <div class="contain-homepage">
                    <ul class="list-item">
                        <li class="list-item-menu">
                            <a class="list-item-link first" href="">Trang chủ</a>
                        </li>
                        <li class="list-item-menu">
                            <a class="list-item-link" href="/home/art">Giới thiệu</a>
                        </li>
                        <li class="list-item-menu">
                            <a class="list-item-link" href="">Liên hệ</a>
                        </li>
                        <li class="list-item-menu">
                            <a class="list-item-link" href="">Góp ý</a>
                        </li>
                        <li class="list-item-menu">
                            <a class="list-item-link" href="">Hỏi đáp</a>
                        </li>
                    </ul>
                </div>

                <!-- Slide -->
                <swiper-container class="mySwiper" navigation="true" centered-slides="true" autoplay-delay="2500" space-between="30" pagination="true" pagination-clickable="true" navigation="true" autoplay-disable-on-interaction="false">
                    <swiper-slide>
                        <div class="img-swiper">
                            <img class="swiper-img" src="https://www.apple.com/vn/iphone-15/images/overview/ios-17/ios17__e2zdgdkbpjue_large.jpg" alt="">
                            <div class="swiper-description">
                                <h5>Clothes sport</h5>
                                <span>19.00$</span>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="img-swiper">
                            <img class="swiper-img" src="https://www.apple.com/vn/iphone-15/images/overview/ios-17/ios17__e2zdgdkbpjue_large.jpg" alt="">
                            <div class="swiper-description">
                                <h5>Clothes sport</h5>
                                <span>19.00$</span>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="img-swiper">
                            <img class="swiper-img" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:80/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Dien-thoai-2.jpg" alt="">
                            <div class="swiper-description">
                                <h5>Clothes sport</h5>
                                <span>19.00$</span>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="img-swiper">
                            <img class="swiper-img" src="https://images.samsung.com/is/image/samsung/assets/vn/2307/pf/B5_Promotion-Card_PF_All-Colors_PC_1038x344.jpg?$ORIGIN_JPG$" alt="">
                            <div class="swiper-description">
                                <h5>Clothes sport</h5>
                                <span>19.00$</span>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper-container>
            </div>
            <!-- Products -->
            <div class="product_homepage" style="padding: 0 32px; margin-top: 32px;">
                <div class="product-heading d-flex justify-content-between">
                    <h2 class="fs-3 fw-bold mb-4">Top 10 sản phẩm</h2>
                    <a href="">See All</a>
                </div>
                <?php require_once 'layouts/part/product.php'; ?>
            </div>
        </div>
</main>
<style>
    a {
        text-decoration: none;
    }

    .logo-title {
        margin-left: 8px;
        font-weight: bold;
        font-size: 24px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-right: 24px;
        color: black;
    }

    .logo-div {
        position: relative;
    }

    .logo-div::after {
        content: '';
        position: absolute;
        height: 32px;
        width: 1px;
        background-color: rgba(255, 255, 255, 0.2);
        left: 0;
        top: 50%;
        transform: translateY(-50%);
    }

    .list-contain {
        display: flex;
        align-items: center;
        height: 60px;
        text-align: center;
        padding-left: 0;
    }

    .list-item {
        font-size: 16px;
        font-weight: bold;
        padding: 24px;
    }

    .list-item:nth-child(2) {
        padding-left: 8px;
    }

    .item-link {
        color: white;
    }

    .middle {
        display: flex;
        flex: 1;
        color: white;
    }

    .right {
        color: white;
        font-weight: bold;
        margin-left: 12px;
        color: black;
    }

    .right-first {
        display: flex;
        align-items: center;
        text-align: center;
        height: 100%;
        padding: 12px;
        background-color: rgba(255, 255, 255, 0.12);
        border-top-left-radius: 12px;
        border-bottom-left-radius: 12px;
        width: 100%;
        justify-content: center;
        border: 1px solid rgba(18, 18, 18, 0.12);
    }

    .right-second {
        position: relative;
        display: flex;
        align-items: center;
        text-align: center;
        height: 100%;
        padding: 12px;
        background-color: rgba(255, 255, 255, 0.12);
        border-top-right-radius: 12px;
        border-bottom-right-radius: 12px;
        width: 110px;
        justify-content: center;
        border: 1px solid rgba(18, 18, 18, 0.12);
    }

    .right-second::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 1px;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.2);
    }

    header {
        border-bottom: none;
        max-width: 100vw;
        height: 72px;
        top: 0px;
        position: sticky;
        z-index: 150;
    }

    .wrapper {
        display: flex;
        align-items: center;
        width: 100%;
        height: 48px;
        transition: background-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s, border-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s;
        background-color: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(20px);
        border-radius: 12px;
        border: 1px solid rgba(18, 18, 18, 0.12);
    }


    .search-input {
        padding: 8px;
        width: 100%;
        height: 100%;
        border: 1px solid transparent;
        color: rgb(255, 255, 255);
        transition: background-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s, border-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s;
        font-size: 16px;
        outline: none;
    }

    .icon {
        display: flex;
        padding: 0 6px 0 12px;
        height: 100%;
        align-items: center;
        transition: background-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s, border-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s;
        border-top-left-radius: 12px;
        border-bottom-left-radius: 12px;
    }

    .icon-right {
        display: flex;
        padding-right: 8px;
        height: 100%;
        align-items: center;
        transition: background-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s, border-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s;
        border-top-right-radius: 12px;
        border-bottom-right-radius: 12px;
    }

    .background {
        width: 26px;
        height: 26px;
        min-width: 26px;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 400;
        background-color: rgba(255, 255, 255, 0.16);
    }

    .icon-move {
        font-size: 18px;
        color: black;
        transition: background-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s, border-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s;
    }
</style>

<header class="bg-white d-flex" style="height: 72px; width: 100%; padding: 0 32px;">
    <div class="d-flex align-items-center justify-content-between" style="width: 100%;">
        <div class="d-flex" href="#" style="  height: 100%; ">
            <a href="/" class="d-flex align-items-center">
                <div style="height: 40px; width: 40px;">
                    <img src="/views/layouts/image/logo.svg" alt="">
                </div>
                <span class="logo-title">OpenShop</span>
            </a>

            <div class="logo-div">
                <ul class="list-contain mb-0 h-100">
                    <li class="list-item">
                        <a href="/about" style="text-decoration: none; color:black;">Giới thiệu</a>
                    </li>
                    <li class="list-item">
                        <a href="" style="text-decoration: none; color:black;">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="middle">
            <div class="wrapper">
                <div class="icon">
                    <i class="fa-solid fa-magnifying-glass icon-move"></i>
                </div>
                <input class="search-input" placeholder="Search items, collections, and accountants" />
                <div class="icon-right">
                    <div class="background">/</div>
                </div>
            </div>
        </div>

        <div class="right">
            <div class="d-flex">
                <a href="/login">
                    <div class="right-first">Đăng nhập</div>
                </a>
                <a href="/register">
                    <div class="right-second">Đăng ký</div>
                </a>
            </div>

            <div>
            </div>
        </div>
    </div>
</header>
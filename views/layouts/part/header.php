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
</style>
<header class="bg-transparent d-flex" style="height: 72px; width: 100%; padding: 0 32px;">
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
                        <a href="/about" style="text-decoration: none;">Thông tin</a>
                    </li>
                    <li class="list-item">
                        <a href="/contact" style="text-decoration: none;">Tương tác</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="middle">
            <?php require 'search.php' ?>
        </div>
        <div class="right">
            <div class="d-flex">
                <?php
                if (isset($_SESSION['user'])) {
                    if (isset($_SESSION['unique_id'])) {
                        $id_user = $_SESSION['unique_id'];
                        $fetchApi = "SELECT * FROM tai_khoan WHERE id = :id_user";
                        $data = [
                            ':id_user' => $id_user,
                        ];

                        $result = pdo_query_one($fetchApi, $data);
                    }
                ?>
                    <div class="dropdown" style="height: 48px;">
                        <button style="height:100%;" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img style="height: 100%; border-radius: 30px;" src="<?= $result['img'] != '' ? '../../../' . $result['img'] : 'https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=740&t=st=1697087993~exp=1697088593~hmac=2fea8f0f3e1a74bbe86e9bff01aa81f11be80c85ca96617453b2012e6ebc7d9a' ?> " alt="img">
                            <?php echo '<span style="margin-left: 6px;" >' . $_SESSION['user'] . '</span>'; ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile">Thông tin cá nhân</a></li>
                            <?php
                            if (isAdmin($_SESSION['user'])) {
                            ?>
                                <li><a class="dropdown-item" href="/admin">Quản trị website</a></li>
                            <?php
                            } else {
                            ?>
                                <li><a class="dropdown-item" href="#"></a></li>
                            <?php
                            }
                            ?>
                            <li><a class="dropdown-item" href="/logout">Đăng xuất</a></li>
                        </ul>
                    </div>
                <?php

                } else {
                ?>
                    <div>
                        <a href="/login" class="right-first">Đăng nhập</a>
                    </div>
                    <div>
                        <a href="/register" class="right-second">Đăng ký</a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</header>
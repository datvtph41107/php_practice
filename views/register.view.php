<?php
require 'views/layouts/part/headerOnly.php';
?>

<div class="main-form">
    <form action="" method="POST" class="form" id="form-1">
        <h3 class="heading fw-bold" style="font-size: 20px;">Thành viên đăng ký</h3>

        <div class="spacer"></div>

        <div class="form-group">
            <label for="" class="form-label">Tên đầy đủ</label>
            <input id="fullname" name="fullname" type="text" placeholder="VD: Tien Dat" class="form-control">
            <span style="<?= $userNameError ? "color: red;" : "" ?>" class="form-message"><?= $userNameError ?? '' ?></span>
        </div>

        <div class="form-group">
            <label for="" class="form-label">Email</label>
            <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
            <span style="<?= $emailError ? "color: red;" : "" ?>" class="form-message"><?= $emailError ?? '' ?></span>
        </div>
        <!-- 
        <div class="form-group">
            <label for="" class="form-label">Địa chỉ</label>
            <input id="address" name="address" type="text" placeholder="VD: Số nhà 67 ngõ 2..." class="form-control">
            <span style="<?= $emailError ? "color: red;" : "" ?>" class="form-message"><?= $emailError ?? '' ?></span>
        </div>

        <div class="form-group">
            <label for="" class="form-label">SĐT</label>
            <input id="phone" name="phone" type="text" placeholder="+849999" class="form-control">
            <span style="<?= $emailError ? "color: red;" : "" ?>" class="form-message"><?= $emailError ?? '' ?></span>
        </div> -->

        <div class="form-group">
            <label for="" class="form-label">Mật khẩu</label>
            <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
            <span style="<?= $passwordError ? "color: red;" : "" ?>" class="form-message"><?= $passwordError ?? '' ?></span>
        </div>

        <div class="form-group">
            <label for="" class="form-label">Nhập lại mật khẩu</label>
            <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="form-control">
            <span style="<?= $passwordConfirmError ? "color: red;" : "" ?>" class="form-message"><?= $passwordConfirmError ?? '' ?></span>
        </div>

        <button class="form-submit" name="form-register">Đăng ký</button>

    </form>
</div>
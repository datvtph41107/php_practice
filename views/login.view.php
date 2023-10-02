<?php
    require 'views/layouts/part/headerOnly.php';
?>
<div class="main-form">
    <form action="" method="POST" class="form" id="form-2">
        <h3 class="heading fw-bold fs-4">Đăng nhập</h3>

        <div class="spacer"></div>

        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
             <span style="<?= $emailErrorLogin ? "color: red;" : "" ?>" class="form-message"><?= $emailErrorLogin ?? '' ?></span>
        </div>

        <div class="form-group">
            <label for="password" class="form-label">Mật khẩu</label>
            <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
            <span style="<?= $passwordErrorLogin ? "color: red;" : "" ?>" class="form-message"><?= $passwordErrorLogin ?? '' ?></span>
        </div>

        <button class="form-submit" name="form-login">Đăng nhập</button>
    </form>
</div>
<form action="" method="post">
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username" value="<?= $username ?? '' ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="example@gmail.com..." value="<?= $email ?? '' ?>">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" value="<?= $password ?? '' ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="(Vietname) +849646994" value="<?= $phone ?? '' ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Địa chỉ hiện tại của bạn" value="<?= $address ?? '' ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Vai trò</label>
        <select class="form-select" name="role">
            <option value="0" <?= $role ?? null == '0' ? 'selected="selected"' : null ?>>user</option>
            <option value="1" <?= $role ?? null == '1' ? 'selected="selected"' : null ?>>admin</option>
        </select>
    </div>

    <div class="my-4">
        <button type="submit" name="add_user" class="btn btn-outline-primary">
            Thêm mới
        </button>
        <button type="button" class="btn btn-outline-primary mx-2" name="reset_form">Nhập lại</button>
        <a href="/admin/list-users">
            <button type="button" class="btn btn-outline-primary">
                Danh sách
            </button>
        </a>
    </div>
</form>
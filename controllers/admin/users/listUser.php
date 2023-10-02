<?php
$querySelect = "SELECT *  FROM tai_khoan";

$fetchApi = pdo_query($querySelect);

?>

<h2>Danh sách user</h2>

<div class="product-container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Chọn</th>
                <th scope="col">Tên tài khoản</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">SĐT</th>
                <th scope="col">Vai trò</th>
                <th scope="col">Xử lý</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($fetchApi as $key => $value) {
                extract($value);
            ?>
                <tr>
                    <th scope="row">
                        <input type="checkbox" name="" id="">
                    </th>
                    <td>
                        <?= $username ?>
                    </td>
                    <td>
                        <?= $password ?>
                    </td>
                    <td>
                        <?= $email ?>
                    </td>
                    <td>
                        <?= $address ?>
                    </td>
                    <td>
                        <?= $phone ?>
                    </td>
                    <td>
                        <?= $role === 1 ? 'admin' : 'user' ?>
                    </td>
                    <td class="d-flex">
                        <!-- Mang cua value -->
                        <a class="text-white" href="/admin/update-users?id=<?= $id ?>">
                            <button type="button" class="btn btn-dark me-2">
                                Sửa
                            </button>
                        </a>
                        <form action="/admin/delete-users" method="post">
                            <button type="submit" name="submit_delete" onclick="return confirm('Are you sure you want to delete?')" value="<?= $id ?>" class="btn btn-dark">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <div class="">
        <button id="select-all" type="button" name="add_category" class="btn btn-outline-primary">
            Chọn tất cả
        </button>
        <button type="button" class="btn btn-outline-primary mx-2" name="reset_form">Bỏ chọn tất cả</button>
        <button type="button" class="btn btn-outline-primary mx-2" name="reset_form">Xóa các mục đã chọn</button>
        <a href="/admin/users">
            <button type="button" class="btn btn-outline-primary">
                Nhập thêm
            </button>
        </a>
    </div>
</div>
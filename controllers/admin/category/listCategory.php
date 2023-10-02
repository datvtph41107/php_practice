<?php
require_once('./models/connect.php');
$query = "SELECT * FROM danh_muc";

$state = pdo_query($query);

// var_dump($state);
?>
<h2>Danh sách loại hàng</h2>

<div class="list-category">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">CHỌN</th>
                <th scope="col">MÃ LOẠI</th>
                <th scope="col">TÊN LOẠI</th>
                <th scope="col">XỬ LÝ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($state as $key => $value) {
                extract($value);
            ?>
                <tr>
                    <td>
                        <input type="checkbox" name="" id="">
                    </td>
                    <th scope="row"><?= $id ?></th>
                    <td><?= $name ?></td>
                    <td class="d-flex">
                        <a class="text-white" href="/admin/update-category?id=<?= $id ?>">
                            <button type="button" class="btn btn-dark me-2">
                                Sửa
                            </button>
                        </a>
                        <form action="/admin/delete-category" method="post">
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
        <a href="/admin/category">
            <button type="button" class="btn btn-outline-primary">
                Nhập thêm
            </button>
        </a>
    </div>
</div>
<?php
$querySelect = "SELECT * FROM binh_luan l JOIN tai_khoan k ON l.id_user = k.id";

$fetchApi = pdo_query($querySelect);

?>

<h1 class="mb-4">Listcomment</h1>

<div class="product-container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Chọn</th>
                <th scope="col">ID</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Người dùng</th>
                <th scope="col">ID profuct</th>
                <th scope="col">Ngày bình luận</th>
                <th scope="col">Xử lý</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($fetchApi as $key => $value) {
                // echo '<pre>';
                // var_dump($value[0]);
                // echo '</pre>';
                // echo '<pre>';
                // var_dump($value);
                // echo '</pre>';
            ?>
                <tr>
                    <th scope="row">
                        <input type="checkbox" name="" id="">
                    </th>
                    <td>
                        <?= $value[0] ?>
                    </td>
                    <td>
                        <?= $value['noidung'] ?>
                    </td>
                    <td>
                        <?= $value['email'] ?>
                    </td>
                    <td>
                        <?= $value['idsanpham'] ?>
                    </td>
                    <td>
                        <?= $value['created_at'] ?>
                    </td>
                    
                    <td class="d-flex">
                        <!-- Mang cua value -->
                        <a class="text-white" href="/admin/update-comments?id=<?= $value[0] ?>">
                            <button type="button" class="btn btn-dark me-2">
                                Sửa
                            </button>
                        </a>
                        <form action="/admin/delete-comments" method="post">
                            <button type="submit" name="submit_delete" onclick="return confirm('Are you sure you want to delete?')" value="<?= $value[0] ?>" class="btn btn-dark">Xóa</button>
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
        <a href="/admin/product">
            <button type="button" class="btn btn-outline-primary">
                Nhập thêm
            </button>
        </a>
    </div>
</div>
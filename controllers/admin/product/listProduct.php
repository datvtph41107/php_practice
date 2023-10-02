<?php
$querySelect = "SELECT *  FROM san_pham n JOIN danh_muc b ON n.iddm = b.id";

$fetchApi = pdo_query($querySelect);

?>

<h1 class="mb-4">List Product</h1>

<div class="product-container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Chọn</th>
                <th scope="col">Tên loại</th>
                <th scope="col">Thông báo</th>
                <th scope="col">Giá</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Lượt xem</th>
                <th scope="col">Thể loại</th>
                <th scope="col">Ảnh</th>
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
                        <?= $value[1] ?>
                    </td>
                    <td>
                        <?= $value['sp_notice'] ?>
                    </td>
                    <td>
                        <?= $value['price'] ?>
                    </td>
                    <td>
                        <?= $value['mota'] ?>
                    </td>
                    <td>
                        <?= $value['luotxem'] ?>
                    </td>
                    <td>
                        <?= $value['name'] ?>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center" style="height: 140px; width: 140px;">
                            <img style="height: 100%; " src="<?= '../../../' . $value['img'] ?>" alt="img-error">
                        </div>
                    </td>
                    <td class="d-flex">
                        <!-- Mang cua value -->
                        <a class="text-white" href="/admin/update-product?id=<?= $value[0] ?>">
                            <button type="button" class="btn btn-dark me-2">
                                Sửa
                            </button>
                        </a>
                        <form action="/admin/delete-product" method="post">
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
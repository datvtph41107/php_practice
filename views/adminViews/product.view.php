<?php
$queryFetch = "SELECT * FROM danh_muc";
$excuted = pdo_query($queryFetch);

// *** 
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="add-product">
        <div class="input-group mb-3">
            <span class="input-group-text">Tên sản phẩm</span>
            <input type="text" class="form-control" name="product_name" placeholder="Nhập tên sản phẩm" value="<?= $name ?? '' ?>">
        </div>

        <label class="form-label">Nhập giá sản phẩm</label>
        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" name="product_price" value="<?= $price ?? '' ?>">
            <span class="input-group-text">.00</span>
        </div>

        <div class="mb-3">
            <label class="form-label">Nhập thể loại</label>
            <select class="form-select" name="product_category">
                <?php
                foreach ($excuted as $key => $value) {
                ?>
                    <option value="<?= $value['id'] ?>" <?= $iddm ?? null == $value['id'] ? 'selected="selected"' : null ?> ><?= $value['name'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Tải lên file ảnh</label>
            <div class="mb-3">
                <input class="form-control" type="file" name="product_img" value="<?= $img ?? '' ?>">
            </div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Thông báo sản phẩm</span>
            <input type="text" class="form-control" name="product_notice" placeholder="Mới" value="<?= $sp_notice ?? '' ?>">
        </div>

        <div class="input-group">
            <span class="input-group-text">Mô tả</span>
            <textarea class="form-control" name="product_description">
                <?= $mota ?? '' ?>
            </textarea>
        </div>

        <div class="my-4">
            <button type="submit" name="add_product" class="btn btn-outline-primary">
                Thêm mới
            </button>
            <button type="button" class="btn btn-outline-primary mx-2" name="reset_form">Nhập lại</button>
            <a href="/admin/list-product">
                <button type="button" class="btn btn-outline-primary">
                    Danh sách
                </button>
            </a>
        </div>
    </div>
</form>
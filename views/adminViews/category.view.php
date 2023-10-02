<form action="" method="post">
    <div class="mb-3">
        <label class="form-label">Mã loại</label>
        <input type="text" class="form-control" id="id_category" value="<?php echo $result_row['id'] ?? '' ?>" disabled>
        <div id="emailHelp" class="form-text">Tạo loại sản phẩm mới.</div>
    </div>
    <div class="mb-3">
        <label class="form-label">Tên loại</label>
        <input type="text" class="form-control" id="name_category" name="name_category" value="<?php echo $result_row['name'] ?? '' ?>">
    </div>

    <div class="">
        <button type="submit" name="add_category" class="btn btn-outline-primary">
            Thêm mới
        </button>
        <button type="button" class="btn btn-outline-primary mx-2" name="reset_form">Nhập lại</button>
        <a href="/admin/list-category">
            <button type="button" class="btn btn-outline-primary">
                Danh sách
            </button>
        </a>
    </div>
</form>
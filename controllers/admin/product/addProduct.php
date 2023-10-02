<h1 class="mb-4">Thêm sản phẩm</h1>
<?php
    require './controllers/validate.php';
    
    if (isset($_POST['add_product'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_category = $_POST['product_category'];
        $product_notice = $_POST['product_notice'];
        $product_description = $_POST['product_description'];

        if (empty($product_name) == false && empty($product_price) == false && empty($product_category) == false && empty($product_notice) == false && empty($product_description) == false) {
            if (isset($_FILES['product_img'])) {
                $destinationPath = UPLOADS_IMG_URL;
                $targetFile = $destinationPath . basename($_FILES['product_img']["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                move_uploaded_file($_FILES["product_img"]["tmp_name"], $targetFile);
            }

            $query = "INSERT INTO san_pham (name, sp_notice, price, img, mota, iddm) VALUES (:name, :notice, :price, :image, :mota, :danhmuc)";

            $data = [
                ':name' => $product_name,
                ':notice' => $product_notice,
                ':price' => $product_price,
                ':image' => $targetFile,
                ':mota' => $product_description,
                ':danhmuc' => $product_category,
            ];

            $excuted = pdo_execute($query, $data);

            if ($excuted) {
                echo getMessageSucceed('Thêm sản phẩm thành công');
            } 
        } else {
            echo getMessageError('Nhập dữ liệu');
        }
    }   
    require './views/adminViews/product.view.php';
?>

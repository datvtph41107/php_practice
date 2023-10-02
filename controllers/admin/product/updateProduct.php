<h1 class="mb-4">Cập nhật sản phẩm</h1>

<?php
    $id = $_GET['id'];
    if (isset($id)) {
        $query_select = "SELECT * FROM san_pham WHERE id = :_id ";

        $dataSelect =[
            ':_id' => $id,
        ];

        // Hien thi thong tin cu cua san pham
        $state = pdo_query_user($query_select, $dataSelect);
        $itemProduct = $state->fetchAll();
        foreach ($itemProduct as $key => $product) {
            extract($product);
        }

        if ($state->rowCount() > 0) {
            $result_row = $state->fetch(PDO::FETCH_ASSOC);
            // echo $result_row['name'];
            if (isset($_POST['add_product'])) {
                $name = $_POST['product_name'];
                $price = $_POST['product_price'];
                $category = $_POST['product_category'];
                $notice = $_POST['product_notice'];
                $description = $_POST['product_description'];

                if (empty($name) == false && empty($price) == false && empty($category) == false && empty($notice) == false && empty($description) == false) {
                    var_dump($name);
                    var_dump($price);

                    if (isset($_FILES['product_img'])) {
                        $destinationPath = UPLOADS_IMG_URL;
                        $targetFile = $destinationPath . basename($_FILES['product_img']["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                        move_uploaded_file($_FILES["product_img"]["tmp_name"], $targetFile);
                    }

                    $query = "UPDATE san_pham SET name=:name, sp_notice=:notice, price=:price, img=:img, mota=:mota, iddm=:iddm WHERE id = :_id";

                    $data = [
                        ':name' => $name,
                        ':notice' => $notice,
                        ':price' => $price,
                        ':img' => $targetFile,
                        ':mota' => $mota,
                        ':iddm' => $category,
                        ':_id' => $id,
                    ];

                    $excuted = pdo_execute($query, $data);

                    if ($excuted) {
                        echo getMessageSucceed('Cập nhật dữ liệu thành công');
                    }
                } else {
                    echo getMessageError('Nhập dữ liệu');
                }
            }
        }
    } 

    require './views/adminViews/product.view.php';
?>
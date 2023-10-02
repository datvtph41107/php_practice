<?php
if (isset($_POST['add_category'])) {
    $name_category = $_POST['name_category'];

    if (empty($name_category)) {
        echo getMessageError('Hãy nhập dữ liệu');
    } else {
        $query_name = "SELECT * FROM danh_muc WHERE name = :name";
        $data = [
            ':name' => $name_category,
        ];

        $stmt = pdo_query_user($query_name, $data);
        if ($stmt->rowCount() > 0) {
            echo getMessageError('Tên loại đã tồn tại');
        } else {
            $query = "INSERT INTO danh_muc (name) VALUES (:name)";

            $data = [
                ':name' => $name_category,
            ];
            $excuted = pdo_execute($query, $data);

            if ($excuted) {
                echo getMessageSucceed('Thêm dữ liệu thành công');
            }
        }
    }
}
?>
<h2>Thêm mới loại hàng hóa</h2>

<?php
require './views/adminViews/category.view.php';
?>
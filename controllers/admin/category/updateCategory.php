<?php
$id = $_GET['id'];
if (isset($id)) {
    $query_select = "SELECT * FROM danh_muc WHERE id = :_id";

    $dataSelect =[
        ':_id' => $id,
    ];

    $state = pdo_query_user($query_select, $dataSelect);
    if ($state->rowCount() > 0) {
        $result_row = $state->fetch(PDO::FETCH_ASSOC);
        // echo $result_row['name'];
        if (isset($_POST['add_category'])) {
            $name = $_POST['name_category'];
            $query = "UPDATE danh_muc SET name=:name WHERE id = :_id";

            $data = [
                ':name' => $name,
                ':_id' => $id,
            ];

            $excuted = pdo_execute($query, $data);

            if ($excuted) {
                echo getMessageSucceed('Cập nhật dữ liệu thành công');
            }
        }
    }
} 

?>
<h2>Cập nhật hàng hóa</h2>
<?php
require './views/adminViews/category.view.php';
?>
<?php 

if (isset($_SESSION['unique_id'])) {
    $id_user = $_SESSION['unique_id'];
    $fetchApi = "SELECT * FROM tai_khoan WHERE id = :id_user";
    $data = [
        ':id_user' => $id_user,
    ];

    $result = pdo_query_one($fetchApi, $data);
}
require './views/profile.view.php';
?>
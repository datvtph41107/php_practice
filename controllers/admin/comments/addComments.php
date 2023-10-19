<?php
session_start();
require '../../../views/message/notifyMessage.php';
require '../../../models/connect.php';

if (isset($_SESSION['unique_id'])) {
    $id_user = $_SESSION['unique_id'];
    $id_sanpham = $_POST['product_id'];
    $message = $_POST['message'];
    if (!empty($message)) {
        $sql = "INSERT INTO binh_luan (noidung, id_user, idsanpham) VALUES (:message, :id_user, :id_sanpham)" or die();
        $data = [
            ':message' => $message,
            ':id_user' => $id_user,
            ':id_sanpham' => $id_sanpham,
        ];
        $result = pdo_execute($sql, $data);
    }
}
?>
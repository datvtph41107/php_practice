<?php
if (isset($_POST['submit_delete'])) {
    $id = $_POST['submit_delete'];
    $query_select = "DELETE FROM tai_khoan WHERE id = :_id";

    $dataSelect = [
        ':_id' => $id,
    ];

    $state = pdo_execute($query_select, $dataSelect);

    if ($state) {
        require_once('listUser.php');
        exit;
    }
}

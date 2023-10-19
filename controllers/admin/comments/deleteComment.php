<?php
if (isset($_POST['submit_delete'])) {
    $id = $_POST['submit_delete'];
    $query_select = "DELETE FROM binh_luan WHERE id = :_id";

    $dataSelect = [
        ':_id' => $id,
    ];

    $state = pdo_execute($query_select, $dataSelect);

    if ($state) {
        header('location: /admin/comments');
    }
}

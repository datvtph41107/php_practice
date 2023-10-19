<?php
    require 'models/connect.php';

    function isAdmin($username) {
        $query = "SELECT * FROM tai_khoan WHERE username = :username";
        $data = [
            ':username' => $username,
        ];

        $stmt = pdo_query_user($query, $data);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && $result['role'] === 1) {
            return true; // Người dùng là admin
        } else {
            
            return false;
        }
    }
?>
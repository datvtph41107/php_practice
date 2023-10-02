<?php
require 'validate.php';
require 'views/message/notifyMessage.php';
// require 'models/connect.php';

$emailErrorLogin = '';
$passwordErrorLogin = '';

if (isset($_POST['form-login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $emailErrorLogin = validateEmail($email);
    $passwordErrorLogin = validatePassword($password);

    if ($emailErrorLogin == false && $passwordErrorLogin == false) {
        $query = "SELECT * FROM tai_khoan WHERE email = :email";
        $data = [
            ':email' => $email,
        ];

        $stmt = pdo_query_user($query, $data);

        if ($stmt->rowCount() > 0) {
            $result_row = $stmt->fetch(PDO::FETCH_ASSOC);
            $matching_username = $result_row['username'];
            $matching_password = $result_row['password'];

            if ($password === $matching_password) {
                // Đăng nhập thành công, thực hiện các hành động sau khi đăng nhập
                echo getMessageSucceed('Đăng nhập thành công');
                // setcookie('user', $matching_username, time() + 3600);
                $_SESSION['user'] = $matching_username;
                // Redirect hoặc hiển thị trang chính
                // Chuyển hướng đến trang chính
                header('Location: /');
                die();
            } else {
                // Sai mật khẩu
                echo getMessageError('Sai mật khẩu');
            }
        }else {
            echo getMessageError('Tài khoản không tồn tại');
        }
    }
}   

require './views/login.view.php';

<?php
// require 'models/connect.php';
require 'validate.php';
require 'views/message/notifyMessage.php';

$userNameError = '';
$emailError = '';
$passwordError = '';
$passwordConfirmError = '';

if (isset($_POST['form-register'])) {
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['password_confirmation'];
    // $address = $_POST['address'];
    // $phone = $_POST['phone'];
    // $role = 1;

    $userNameError = validateName($username);
    $emailError = validateEmail($email);
    $passwordError = validatePassword($password);
    $passwordConfirmError = validatePasswordConfirm($confirm_password, $password);

    if ($userNameError == false && $emailError == false && $passwordError == false && $passwordConfirmError == false) {
        $query = "SELECT * FROM tai_khoan WHERE username = :username OR email = :email";
        $data = [
            ':username' => $username,
            ':email' => $email,
        ];

        $result = pdo_query_user($query, $data);

        if ($result->rowCount() > 0) {
            echo getMessageError('Tài khoản đã tồn tại. Vui lòng tạo tài khoản khác');
        } else {
            $query = "INSERT INTO tai_khoan (username, password, email) VALUES (:username, :password, :email)";

            $data = [
                ':username' => $username,
                ':password' => $password,
                ':email' => $email,
            ];

            $excuted = pdo_execute($query, $data);

            echo getMessageSucceed('Đăng ký thành công. đăng nhập ngay !!');
        }

        
    }
}

// echo $_POST['fullname'];
// header('location: /');
require 'views/register.view.php';
?>

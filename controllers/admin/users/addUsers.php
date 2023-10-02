<h2>Thêm người dùng</h2>

<?php
if (isset($_POST['add_user'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    
    if (empty($username) == false && empty($email) == false && empty($password) == false && empty($address) == false && empty($phone) == false) {
        $query = "SELECT * FROM tai_khoan WHERE username = :username OR email = :email";
        $data = [
            ':username' => $username,
            ':email' => $email,
        ];

        $result = pdo_query_user($query, $data);

        if ($result->rowCount() > 0) {
            echo getMessageError('Tài khoản đã tồn tại. Vui lòng tạo tài khoản khác');
        } else {
            $query = "INSERT INTO tai_khoan (username, password, email, address, phone, role) VALUES (:username, :password, :email, :address, :phone, :role)";

            $data = [
                ':username' => $username,
                ':password' => $password,
                ':email' => $email,
                ':address' => $address,
                ':phone' => $phone,
                ':role' => $role,
            ];

            $excuted = pdo_execute($query, $data);

            echo getMessageSucceed('Tạo user thành công');
        }
    }else {
        echo getMessageError('Hãy nhập dữ liệu');
    }
}


require './views/adminViews/user.view.php';
?>
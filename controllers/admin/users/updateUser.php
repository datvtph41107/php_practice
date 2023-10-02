<?php
$id = $_GET['id'];
if (isset($id)) {
    $query_select = "SELECT * FROM tai_khoan WHERE id = :_id ";

    $dataSelect = [
        ':_id' => $id,
    ];

    // Hien thi thong tin cu cua san pham
    $state = pdo_query_user($query_select, $dataSelect);
    $users = $state->fetchAll();
    foreach ($users as $key => $user) {
        extract($user);
    }

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
            $temp = $result->fetch();

            echo '<pre>';
            var_dump($temp);
            echo '</pre>';
            if () {
                echo getMessageError('User đã tồn tại');
            } else {
                $query = "UPDATE tai_khoan SET username=:username, password=:password, email=:email, address=:address, phone=:phone, role=:role WHERE id = :_id";

                $data = [
                    ':username' => $username,
                    ':password' => $password,
                    ':email' => $email,
                    ':address' => $address,
                    ':phone' => $phone,
                    ':role' => $role,
                    ':_id' => $id,
                ];

                $excuted = pdo_execute($query, $data);

                echo getMessageSucceed('Cập nhật thành công');
            }
        } else {
            echo getMessageError('Hãy nhập dữ liệu');
        }
    }
}

?>
<h2>Cập nhật user</h2>
<?php
require './views/adminViews/user.view.php';
?>
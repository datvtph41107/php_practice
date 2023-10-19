<?php
if (isset($_SESSION['unique_id'])) {
    $id_user = $_SESSION['unique_id'];
    $fetchApi = "SELECT * FROM tai_khoan WHERE id = :id_user";
    $data = [
        ':id_user' => $id_user,
    ];

    $result = pdo_query_one($fetchApi, $data);
    if (isset($_POST['test_profile'])) {
        echo $_FILES['edit_profile']["name"];
        if (isset($_FILES['edit_profile'])) {
            $destinationPath = UPLOADS_IMG_URL;
            $targetFile = $destinationPath . basename($_FILES['edit_profile']["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            move_uploaded_file($_FILES["edit_profile"]["tmp_name"], $targetFile);
        }

        $query = "UPDATE tai_khoan SET img=:img WHERE id = :_id";
        $dataUploads = [
            ':img' => $targetFile,
            ':_id' => $id_user,
        ];
        $check = pdo_execute($query, $dataUploads);

        if ($check) {
            header('location: /edit-profile');
        }
    }
    
}
require './views/editProfile.view.php';
?>
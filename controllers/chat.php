<?php
    session_start();
    require '../views/message/notifyMessage.php';
    require '../models/connect.php';

    $checkValid = $_POST['another_data'];
    if (!isset($_SESSION['unique_id']) && $checkValid >= 2) {
        echo getMessageError('Hãy đăng nhập trước');
    }
    // xhr.send(incoming_id ) du lieu cua $id_product = $_POST['incoming_id'];
    $id_product = $_POST['incoming_id'];
    $outgoing_id = $_SESSION['unique_id'] ?? null;
    $sql = "SELECT * FROM binh_luan WHERE idsanpham=:id_product ORDER BY id DESC";
    $data = [
        ':id_product' => $id_product,
    ];
    $find_product = pdo_query_user($sql, $data);
    $output = "";

    if ($find_product->rowCount() > 0) {
        if (isset($id_product)) {
            $fetch = "SELECT * FROM tai_khoan k JOIN binh_luan l ON k.id = l.id_user WHERE l.idsanpham=:id_product ORDER BY l.id ASC";
            $dataFetch = [
                ':id_product' => $id_product,
            ];
            $result = pdo_query_user($fetch, $dataFetch);
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $output .= '
                    <div class="d-flex flex-start mt-4">
                        <img class="rounded-circle shadow-1-strong me-3" style="width: 60px; height: 60px;" src="'. $row['img']  .'" alt="avatar" width="65" height="65" />
                        <div class="flex-grow-1 flex-shrink-1">
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-1">
                                        ' . $row['username'] . '<span class="small">' . $row['created_at'] . ' - ' . $row['id'] . ' hours ago</span>
                                    </p>
                                    <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small"> reply</span></a>
                                </div>
                                <p class="small mb-0">
                                    ' . $row['noidung'] . '
                                </p>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }
        } 
    } else {
        $output .= "<div>No comments are available to chat</div>";
    }
    echo $output;
?>
<?php
$querySelect = "SELECT danh_muc.id as madm, danh_muc.name as tendm, count(san_pham.id) soluongdm, max(san_pham.price) as giamax, min(san_pham.price) as giamin, avg(san_pham.price) as giatb FROM san_pham LEFT JOIN danh_muc on danh_muc.id = san_pham.iddm GROUP BY danh_muc.id ORDER BY danh_muc.id DESC";

$fetchApi = pdo_query($querySelect);

require './views/adminViews/statistics.view.php';
?>
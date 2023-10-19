<?php
    // require 'views/layouts/part/headerOnly.php';
    $getId = $_GET['id'];
    if ($getId) {
        $getProduct = "SELECT luotxem FROM san_pham WHERE id = :id;";
        $result = pdo_query_one($getProduct, [':id' => $getId]); 
        if ($result) {
            $currentViews = $result['luotxem'];
            $updatedViews = $currentViews + 1;

            // Update the luotxem value in the database
            $updateProduct = "UPDATE san_pham SET luotxem = :index WHERE id = :id;";
            $data = [
                    ':index' => $updatedViews,
                    ':id' => $getId,
                ];
            pdo_execute($updateProduct, $data);
        }
    }

    require './views/product.view.php';
?>

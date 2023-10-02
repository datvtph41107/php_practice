<style>
    li {
        list-style: none;
    }

    .admin-container {
        padding-top: 40px;
        margin: 0 auto;
        width: 1150px;
    }
</style>
<?php
require_once ('./views/layouts/part/header.php');
?>
<div class="admin-container">
    <?php
    require './views/message/notifyMessage.php';
    require './views/adminViews/menu.view.php';
    
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    // echo dirname(__DIR__) . '/../views/adminViews/admin.view.php';
    // echo dirname(__DIR__) .  '/product/product.php';

    $routes = [
        '/admin' => [
            '' => 'controllers/admin/home/home.php',
            'product' => 'controllers/admin/product/addProduct.php',
            'list-product' => 'controllers/admin/product/listProduct.php',
            'update-product' => 'controllers/admin/product/updateProduct.php',
            'delete-product' => 'controllers/admin/product/deleteProduct.php',
            'category' => 'controllers/admin/category/addCategory.php',
            'list-category' => 'controllers/admin/category/listCategory.php',
            'update-category' => 'controllers/admin/category/updateCategory.php',
            'delete-category' => 'controllers/admin/category/deleteCategory.php',
            'users' => 'controllers/admin/users/addUsers.php',
            'list-users' => 'controllers/admin/users/listUser.php',
            'update-users' => 'controllers/admin/users/updateUser.php',
            'delete-users' => 'controllers/admin/users/deleteUser.php',

            'comments' => 'controllers/admin/comments/comments.php',
            'statistics' => 'controllers/admin/statistics/statistics.php',
        ],
    ];

    if (strpos($uri, '/admin/') === 0 || strpos($uri, '/admin') === 0) {
        // Nếu URL bắt đầu bằng '/admin/', xử lý tác vụ admin
        $adminRoute = substr($uri, strlen('/admin/'));
        // var_dump($adminRoute);
        if (array_key_exists($adminRoute, $routes['/admin'])) {
            require $routes['/admin'][$adminRoute];
        } else {
            http_response_code(404);
            require 'views/404.php';
            die();
        }
    }
    ?>
</div>
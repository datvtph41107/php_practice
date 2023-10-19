<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="global.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

<body>
    <div class="app-center">
        <div class="app" style="width: 100%;">
            <?php
            session_start();
            $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

            require './config.php';
            require_once('./views/auth/authMiddleware.php');
            // Việc sử dụng ob_start() để bắt đầu bộ đệm đầu ra (output buffering) có thể giúp bạn tránh được lỗi "Cannot modify header information". Khi bạn gọi ob_start(), tất cả đầu ra sẽ được đặt vào bộ đệm, cho phép bạn thay đổi tiêu đề HTTP sau khi bắt đầu xuất ra nội dung.
            ob_start();
            // đầu ra 28 sẽ được lưu vào bộ nhớ đệm ob_start()
            require_once('views/layouts/part/header.php');
            // Lưu bộ đệm và lấy ra
            $headerContent = ob_get_contents();
            // var_dump($headerContent);
            // Dừng bộ đệm
            // ob_end_clean();
            $routes = [
                '/' => 'controllers/home.php',
                '/about' => 'controllers/about.php',
                '/contact' => 'controllers/contact.php',
                '/product' => 'controllers/product.php',
                '/profile' => 'controllers/profile.php',
                '/edit-profile' => 'controllers/editProfile.php',
                '/login' => 'controllers/login.php',
                '/register' => 'controllers/register.php',
                '/logout' => 'controllers/logout.php',
                '/admin' => 'controllers/admin/index.php',
            ];
            // if ($_SESSION['user'] ?? null &&  $uri === '/login') {
            //     header('location: /');
            // }
            if (array_key_exists($uri, $routes) || strpos($uri, '/admin/') === 0) {
                if (strpos($uri, '/admin') === 0 && isAdmin($_SESSION['user'])) {
                    require 'controllers/admin/index.php';
                    exit();
                } else {
                    if (strpos($uri, '/admin') === 0) {
                        header('Location: /');
                    }
                }
                require $routes[$uri];
            } else {
                http_response_code(404);
                require 'views/404.php';

                die();
            }
            ?>
        </div>
    </div>
    <script src="chat.js"></script>

    <script>
        const scrollDemo = document.querySelector(".app");
        const output = document.querySelector("header");
        const a = document.querySelectorAll("header a");
        const logo = document.querySelector(".logo-title");
        const search = document.querySelector("header .wrapper")

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
                output.classList.remove('bg-transparent');
                output.classList.add('bg-white');
                logo.classList.add('text-black');
                a.forEach((item) => {
                    item.classList.add('text-black')
                })
                search.classList.add("border");
            } else {
                logo.classList.remove('text-black');
                a.forEach((item) => {
                    item.classList.remove('text-black')
                })
                output.classList.add('bg-transparent');
                search.classList.remove("border");
            }
        }
    </script>

</body>

</html>
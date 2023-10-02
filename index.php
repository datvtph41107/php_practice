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
            require './config.php';
            require './views/auth/authMiddleware.php';

            $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

            if ($uri === '/') {
                require 'views/layouts/part/header.php';
            }
            
            $routes = [
                '/' => 'controllers/home.php',
                '/about' => 'controllers/about.php',
                '/contact' => 'controllers/contact.php',
                '/product' => 'controllers/product.php',
                '/login' => 'controllers/login.php',
                '/register' => 'controllers/register.php',
                '/logout' => 'controllers/logout.php',
                '/admin' => 'controllers/admin/index.php',
            ];

            if (isset($_SESSION['user']) && $uri === '/login') {
                echo '123';
                header('Location: /');
            }

            if (array_key_exists($uri, $routes) || strpos($uri, '/admin/') === 0) {
                if (strpos($uri, '/admin') === 0) {
                        if (isAdmin($_SESSION['user'] ?? null)) {
                        require 'controllers/admin/index.php';
                        exit();
                    }
                }else {
                    if (strpos($uri, '/admin') === 0) {
                        echo '<script language="javascript">';
                        echo 'alert("message successfully sent")';
                        echo '</script>';

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
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            slidesPerGroup: 4,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
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
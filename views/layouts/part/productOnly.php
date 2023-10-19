<div class="product-container new w-100">
    <?php
    try {
        $dburl = "mysql:host=localhost;dbname=datvtph41107_wd18342_duanmau;charset=utf8";
        $username = 'root';
        $password = '';
        $conn = new PDO($dburl, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if (!isset($_POST['pageValue']) && !isset($_POST['debounceValue'])) {
            $query = "SELECT * FROM san_pham";
            $stmt = $conn->prepare($query);
            $stmt->execute();
        } else if (isset($_POST['debounceValue'])) {
            $debounce_value = $_POST['debounceValue'];
            $query = "SELECT * FROM san_pham WHERE name LIKE :debounceValue";
            $stmt = $conn->prepare($query);
            // Lỗi này xuất hiện do PHP không cho phép truyền 
            // một giá trị trực tiếp (ví dụ như một chuỗi 
            // hoặc số) vào phương thức bindParam()
            // vì nó yêu cầu một tham chiếu. Điều này có nghĩa 
            // là bạn cần gán giá trị đó cho một biến và sau đó truyền
            //  biến đó vào bindParam()
            $likeValue = '%' . $debounce_value . '%';
            $stmt->bindParam(':debounceValue', $likeValue, PDO::PARAM_STR);
            $stmt->execute();
        } else {
            $iddm = (int)$_POST['pageValue'];
            if ($iddm == 20) {
                $query = "SELECT * FROM san_pham";
                $stmt = $conn->prepare($query);
                $stmt->execute();
            } else {
                $query = "SELECT * FROM san_pham WHERE iddm=:iddm";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':iddm', $iddm, PDO::PARAM_INT);
                $stmt->execute();
            }
        }
        $resultFilter = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    if ($resultFilter) {
        foreach ($resultFilter as $key => $filter) {
    ?>
            <a style="padding: 0px 8px; width:25%;" href="/product?id=<?= $filter['id'] ?>">
                <div class="box-product">
                    <div class="product-item">
                        <div class="product-description">
                            <span class="text-danger fs-6 mb-6"><?= $filter['sp_notice'] ?></span>
                            <h3 style="font-size: 28px; font-weight: bold; width: 252px;"><?= $filter['name'] ?></h3>
                        </div>
                        <div class="d-flex position-relative justify-content-center" style="height: 235px;">
                            <img class="h-100 rounded-3 object-fit-cover" style="border-bottom-left-radius: 0; border-bottom-right-radius: 0;" src="<?= '../../../' . $filter['img'] ?>" alt="">
                        </div>
                        <div class="product-description">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Bản giới hạn</h5>
                                    <span><?= $filter['price'] . ' $' ?></span>
                                </div>
                                <button class=" text-white rounded-4 fw-bold h-100" style="font-size: 14px; padding: 8px 18px; border: none; background-color: #2081E2;">
                                    Mua ngay
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
    <?php
        }
    }
    


    ?>
</div>
<style>
    .product-wrapper {
        width: 25%;
        height: 100%;
        padding-left: 8px;
        padding-right: 8px;
    }

    .product-container {
        display: flex;
        flex-wrap: wrap;
        margin-left: -8px;
        margin-right: -8px;
    }

    .product-img {
        display: flex;
        position: relative;
        width: 100%;
        height: 235px;
        justify-content: center;
    }

    .product-description {
        padding: 22px 18px;
        color: black;
    }

    .product-description h5 {
        font-size: 16px;
        font-weight: 600;
        color: rgb(18, 18, 18);
    }

    .box-product {
        /* margin-right: 16px !important; */
        border-radius: 12px;
        cursor: pointer;
        border-radius: 12px;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 16px;
        transition: box-shadow 0.25s ease-in-out 0s, transform 0.25s ease 0s;
        margin-bottom: 32px;
    }

    .product-img img {
        height: 100%;
        border-radius: 12px;
        object-fit: cover;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    .box-product:hover {
        box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 24px;
        background: rgb(255, 255, 255);
        transform: translate(0px, -4px);
    }

    a {
        color: white;
    }
</style>



<div class="product-container">
    <?php
    $query = "SELECT * FROM san_pham";

    $fetchProduct = pdo_query($query);

    foreach ($fetchProduct as $key => $product) {
    ?>
        <a href="/product" class="product-wrapper">
            <div class="box-product">
                <div class="product-item">
                    <div class="product-description">
                        <span class="text-danger fs-6 mb-6"><?= $product['sp_notice'] ?></span>
                        <h3 style="font-size: 28px; font-weight: bold; width: 252px;"><?= $product['name'] ?></h3>
                    </div>
                    <div class="product-img">
                        <img src="<?= '../../../' . $product['img'] ?>" alt="">
                    </div>
                    <div class="product-description">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Bản giới hạn</h5>
                                <span><?= $product['price'] . '$' ?></span>
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
    ?>
</div>
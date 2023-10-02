<style>
    .product {
        padding-top: 40px;
        margin: 0 auto;
        width: 958px;
    }

    .grid {
        display: flex;
        background: #fafafa;
        border-radius: 12px;
    }

    .product_left {
        padding: 15px;
    }

    .product_left-img {
        height: 300px;
    }

    .product_right {
        padding: 20px 35px 0 20px;
    }

    .product_right-title {
        width: 650px;
    }

    .product_right-title span {
        font-size: 20px;
    }

    .product_right-review {
        padding-top: 12px;
        display: flex;
        color: #767676;
    }

    .review {
        position: relative;
        padding-right: 20px;
    }

    .review::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 1px;
        background-color: black;
    }

    .wasBuyed {
        display: flex;
        padding-left: 20px;
    }

    .wasBuyed-2 {
        padding: 0 8px;
    }

    .product_price-main {
        padding-top: 8px;
    }

    .product_price {
        padding: 15px 20px;
        background: #fafafa;
        display: flex;
        align-items: center;
    }

    .product_price-display {
        font-size: 24px;
        font-weight: 400;
        color: black;
    }

    .product_size {
        display: flex;
        text-align: center;
        align-items: center;
        padding: 0 20px;
        margin: 30px 0;
    }

    .product_size-name {
        display: flex;
        width: 110px;
        color: #767676;
        text-transform: capitalize;
        font-size: 14px;
    }

    .product_size-btn {
        margin: 0 8px;
    }

    .product_size-btn-items {
        padding: 8px 26px;
        align-items: center;
        text-align: center;
        border: 1px solid rgba(0, 0, 0, .09);
        border-radius: 2px;
        cursor: pointer;
        color: rgba(0, 0, 0, .8);
    }

    .product_btn-push {
        height: 48px;
        font-size: 16px;
        padding: 0 20px;
        color: black;
        border: 1px solid black;
        box-shadow: 0 1px 1px 0 rgb(0 0 0 / 3%);
        background: rgb(67 69 70 / 10%);
        border-radius: 12px;
    }

    .product_btn-buy {
        font-size: 16px;
        padding: 0 20px;
        background: #2081E2;
        color: white;
        height: 48px;
        border: 1px solid #2081E2;
        margin-left: 10px;
        border-radius: 12px;
        font-weight: bold;
    }

    .product_input {
        display: flex;
    }

    .product_input-btn {
        cursor: pointer;
        border: 0;
        align-items: center;
        border: 1px solid rgba(0, 0, 0, .09);
        border-radius: 2px;
        background: transparent;
        color: rgba(0, 0, 0, .8);
        width: 32px;
        height: 32px;
    }

    .product_input-value {
        width: 52px;
        height: 32px;
        font-size: 16px;
        text-align: center;
        align-items: center;
        border: 1px solid rgb(0 0 0 / 10%);
    }

    .btns_fillter {
        padding: 8px 16px;
        width: 100px;
        color: #ee4d2d;
        background-color: white;
        border: 1px solid #ee4d2d;
        margin: 0 8px;
        border-radius: 4px;
        font-size: 14px;
        font-weight: bold;
        transition: 0.2s ease-in;
    }

    .btns_fillter:hover {
        background-color: #ee4d2d;
        color: white;

    }
</style>

<div class="product">
    <div class="grid">
        <div class="product_left">
            <img class="product_left-img" src="views/layouts/image/slide2.png" alt="">
        </div>
        <div class="product_right">
            <div class="product_right-title">
                <span>iPhone 15 Pro Max & iPhone 15 Plus</span>
            </div>
            <div class="product_right-review">
                <div class="review">Chưa có đánh giá</div>
                <div class="wasBuyed">
                    <div class="wasBuyed-1">0</div>
                    <div class="wasBuyed-2">Đã Bán</div>
                    <div class="wasBuyed-1">0</div>
                </div>
            </div>
            <div class="product_price-main">
                <div class="product_price">
                    <div class="product_price-display">
                        999.$
                    </div>
                </div>
            </div>
            <div class="product_size">
                <div class="product_size-name">
                    Số lượng
                </div>
                <div class="product_input">
                    <button class="product_input-btn">-</button>
                    <input class="product_input-value" value="1" type="text">
                    <button class="product_input-btn">+</button>
                </div>
                <div class="prodcut_have-appear">
                    78 sản phẩm có sẵn
                </div>
            </div>
            <div class="product_btn">
                <button class="product_btn-push">
                    <i class="fa-solid fa-cart-plus"></i>
                    Thêm vào giỏ hàng
                </button>
                <button class="product_btn-buy">
                    Mua Ngay
                </button>
            </div>
        </div>
    </div>
</div>
</div>
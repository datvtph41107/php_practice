<h1>Thống kê</h1>
<div class="product-container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Chọn</th>
                <th scope="col">Mã danh mục</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Gía cao nhất</th>
                <th scope="col">Gía thấp nhất</th>
                <th scope="col">Gía trung bình</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($fetchApi as $key => $value) {

            ?>
                <tr>
                    <th scope="row">
                        <input type="checkbox" name="" id="">
                    </th>
                    <td>
                        <?= $value[0] ?>
                    </td>
                    <td>
                        <?= $value[1] ?>
                    </td>
                    <td>
                        <?= $value['soluongdm'] ?>
                    </td>
                    <td>
                        <?= $value['giamax'] ?>
                    </td>
                    <td>
                        <?= $value['giamin'] ?>
                    </td>
                    <td>
                        <?= $value['giatb'] ?>
                    </td>

                    <td class="d-flex">
                        <!-- Mang cua value -->
                        <a class="text-white" href="/admin/update-comments?id=<?= $value[0] ?>">
                            <button type="button" class="btn btn-dark me-2">
                                Sửa
                            </button>
                        </a>
                        <form action="/admin/delete-comments" method="post">
                            <button type="submit" name="submit_delete" onclick="return confirm('Are you sure you want to delete?')" value="<?= $value[0] ?>" class="btn btn-dark">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <div class="">
        <button id="select-all" type="button" name="add_category" class="btn btn-outline-primary">
            Chọn tất cả
        </button>
        <button type="button" class="btn btn-outline-primary mx-2" name="reset_form">Bỏ chọn tất cả</button>
        <button type="button" class="btn btn-outline-primary mx-2" name="reset_form">Xóa các mục đã chọn</button>
        <a href="/admin/product">
            <button type="button" class="btn btn-outline-primary">
                Nhập thêm
            </button>
        </a>
    </div>
</div>
<div id="vis_div" style="width: 600px; height: 400px;"></div>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        // Set Data
        const data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php
            foreach ($fetchApi as $key => $unit) {
                echo '["' . $unit['tendm'] . '", ' . $unit['soluongdm'] . '],';
            }
            ?>
        ]);

        // Set Options
        const options = {
            title: 'Thống kê số lượng sản phẩm'
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('vis_div'));
        chart.draw(data, options);

    }
</script>
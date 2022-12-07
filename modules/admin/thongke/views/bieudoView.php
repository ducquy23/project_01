<?php get_header(''); 
// foreach ($list_thong_ke as $values) {
//     echo $values['name_cate'] . "<br>";
//     echo $values['count_products'] . "<br>";
// }
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="content-main">
    <h3 class="title-content">Biểu đồ sản phẩm</h3>
</div>
<div id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php
            $totalCate = count($list_thong_ke);
            $i = 0;
            foreach ($list_thong_ke as $values) {
                if ($i == $totalCate) {
                    $dauphay = "";
                } else {
                    $dauphay = ",";
                }
                echo "['" . $values['name_cate'] . "'," . $values['count_products'] . "]" . $dauphay;
                $i += 1;
            }
            ?>
        ]);
        var options = {
            title: 'Thống kê sản phẩm theo danh mục',
            is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }
</script>

<?php get_footer('') ?>
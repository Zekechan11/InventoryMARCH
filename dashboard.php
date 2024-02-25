<?php
require_once('inc/header.php');
require_once('dbconfig.php');
require_once('function/statistics.php');
?>
<style>
    .card {
        border-radius: 10px;
        /* Optional: Add rounded corners to the cards */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        /* Optional: Add a subtle box shadow */
        margin-bottom: 20px;
        /* Optional: Add some spacing between cards */
    }
/* 
    .card1 {
        background: linear-gradient(-45deg, #fd77e4 0%, #1ff4f1 100% );
    }

    .card2 {
        background: linear-gradient(-45deg, #fd77e4 0%, #1ff4f1 100% );
    }

    .card3 {
        background: linear-gradient(-45deg, #fd77e4 0%, #1ff4f1 100% );
    }

    .card4 {
        background: linear-gradient(-45deg, #fd77e4 0%, #1ff4f1 100% );
    }

    .card5 {
        background: linear-gradient(-45deg, #fd77e4 0%, #1ff4f1 100% );
    } */

    .card-body {
        text-align: left;
        /* Optional: Align the text to the left within the card body */
    }

    .card-header {
        background: linear-gradient(-45deg, #fd77e4 0%, #1ff4f1 100% );
        /* Optional: Change the background color of the card header */
        border-bottom: 1px solid #dee2e6;
        /* Optional: Add a bottom border to the card header */
    }

    .highest {
        background-color: #B3061A;
        /* Optional: Change the background color of the card header */
        border-bottom: 1px solid #dee2e6;
        /* Optional: Add a bottom border to the card header */
    }

    .card-title {
        color: #ffff;
        /* Optional: Change the color of the card title */
    }

    .table {
        margin-bottom: 0;
        /* Optional: Remove the default margin-bottom from tables in cards */
    }

    .badge {
        color: black;
    }

    .logo {
        position: relative;
        bottom: 16px;
        right: 40px;
        width: 65px;
        height: 65px;
        border-radius: 10%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-left: 7px;
    }

    .card1 {
        height: 65px;
        background-color: #EEF5FF;
    }

    .logo i {
        color: #fff;
        /* Example icon color */
        font-size: 25px;
        /* Example icon size */
    }
</style>

<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Category', 'Products', 'Inventory', 'Returned', 'Sales'],
            ['2021', 1000, 400, 1000, 400, 100],
            ['2022', 1170, 460, 1000, 400, 100],
            ['2023', 660, 1120,  1000, 400, 100],
            ['2024', 1030, 540,  1000, 400, 100]
        ]);

        var options = {
            // title: 'Sales and Expenses Over Time',
            curveType: 'function',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>


<div class="wrapper">
    <main class="content">
        <header class="bg-white px-2 py-2" style="background-color: red;">
            <div class="container-fluid">
                <h2 class="mb-2">Dashboard</h2>
            </div>
        </header>
        <div class="custom-layout col-12 d-flex w-100 text-center">

        <!-- CATEGORY -->

        <div class="card border-0 px-4 card1">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="logo" style="background-color:#E8C872;">
                            <i class="fa-solid fa-rectangle-list pe-4" style="position: relative;left:9px;"></i>
                        </div>
                        <div class="text-center" style="font-size: 20px; text-align: center;position:relative;right:30px;">
                            <p>Category</p>
                        </div>
                        <div class="text">
                            <p class="mb-2" style="font-size: large; font-weight:600;position:relative;top:2px;right:15px; color:#3E3D41;">
                                <?php echo getCategoryCount($conn); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRODUCT -->
            <div class="card border-0 px-4 card1">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="logo" style="background-color:#F9B572;">
                        <i class="fa-solid fa-box pe-4" style="position: relative;left:9px;"></i>
                        </div>
                        <div class="text-center" style="font-size: 20px; text-align: center;position:relative;right:30px;">
                            <p>Product</p>
                        </div>
                        <div class="text">
                        <p class="mb-2" style="font-size: large; font-weight:600;position:relative;top:2px;right:15px; color:#3E3D41;">
                                    <?php echo getProductCount($conn); ?>
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- INVENTORY -->
            <div class="card border-0 px-4 card1">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="logo" style="background-color:#40A2D8;">
                        <i class="fa-solid fa-boxes-stacked pe-4" style="position: relative;left:9px;"></i>
                        </div>
                        <div class="text-center" style="font-size: 20px; text-align: center;position:relative;right:30px;">
                            <p>Inventory</p>
                        </div>
                        <div class="text">
                        <p class="mb-2" style="font-size: large; font-weight:600;position:relative;top:2px;right:15px; color:#3E3D41;">
                                    <?php echo getInventoryCount($conn); ?>
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- RETURNED ITEM -->
            <div class="card border-0 px-2 card1">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="logo" style="background-color:#FF8080;">
                        <i class="fa-solid fa-people-carry-box pe-4" style="position: relative;left:9px;"></i>
                        </div>
                        <div class="text-center" style="font-size: 17px; text-align: center;position:relative;right:25px; top:7px;">
                            <p style="position: relative;bottom:10px;">Returned Item</p>
                        </div>
                        <div class="text">
                        <p class="mb-2" style="font-size: large; font-weight:600;position:relative;top:2px;right:10px; color:#3E3D41;">
                                    300
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SALES -->
            <div class="card border-0 px-4 card1">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="logo" style="background-color:#7ED7C1;">
                        <i class="fa-solid fa-boxes-packing pe-4" style="position: relative;left:9px;"></i>
                        </div>
                        <div class="text-center" style="font-size: 20px; text-align: center;position:relative;right:30px;">
                            <p>Sales</p>
                        </div>
                        <div class="text">
                        <p class="mb-2" style="font-size: large; font-weight:600;position:relative;top:2px;right:15px; color:#3E3D41;">
                                    300
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-0 px-2">
            <div class="card mb-0 border-0 col-md-11">
                <div id="chart_div" style="height: 300px;"></div>
            </div>
        </div>


        <!-- RECENTLY ADDED PRODUCTS -->
        <div class="row g-0 px-2">
            <div class="card mb-0 border-0 col-md-7">
                <div class="card-header">
                    <h5 class="card-title mb-0 py-2" style="color:#3E3D41;">
                        Recently Added Products
                    </h5>
                </div>
                <div class="card-body text-center" style="max-height: 300px; overflow-y: scroll;">
                    <table class="table mb-0 table-striped table-lg">
                    <?php if (!empty($recentlyAddedProducts)) { ?>
                        <thead>
                            <tr>
                                <th class="text-center">Product Id</th>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Price</th>
                            </tr>
                        </thead>
                    <?php } ?>
                        <tbody>
                            <?php

                            if (empty($recentlyAddedProducts)) {
                                echo "No products added in the last 7 days.\n";
                            } else {
                                foreach ($recentlyAddedProducts as $product) {
                            ?>
                                    <tr>
                                        <td><?= $product['product_id'] ?></td>
                                        <td><?= $product['product_name'] ?></td>
                                        <td><?= $product['quantity'] ?></td>
                                        <td>₱ <?= $product['price'] ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- HIGHEST SELLING PRODUCTS -->
            <div class="card mb-0 border-0 col-4">
                <div class="card-header highest">
                    <h5 class="card-title mb-0 py-2" style="color:#3E3D41;">
                        Highest Selling Products
                    </h5>
                </div>
                <div class="card-body text-center" style="max-height: 300px; overflow-y: scroll;">
                    <table class="table mb-0 table-striped table-lg">
                        <thead>
                            <tr>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Total Quantity</th>
                                <th class="text-center">Total Sold</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Coco Lumber</td>
                                <td>10</td>
                                <td>50</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

<?php require_once('inc/footer.php'); ?>
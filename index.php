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
    }

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
</style>

<div class="wrapper">
    <main class="content">
        <header class="bg-white px-2 py-2">
            <div class="container-fluid">
                <h2 class="mb-2">Dashboard</h2>
            </div>
        </header>
        <div class="custom-layout col-12 d-flex w-100 text-center">

        <!-- CATEGORY -->

            <div class="card border-0 px-4 card1">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-2">
                                <i class="fa-solid fa-rectangle-list pe-2"></i>Category
                            </h4>
                            <center>
                            <p class="mb-2" style="font-size: large; font-weight:600; color:#3E3D41;">
                                <?php echo getCategoryCount($conn); ?>
                            </p>
                            </center>
                            <div class="mb-0">
                                <span class="badge me-2">
                                    +9.0%
                                </span>
                                <span class="text-muted">
                                    Since last months
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRODUCT -->
            <div class="card border-0 px-4 card2">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-2">
                                <i class="fa-solid fa-box pe-2"></i>Products
                            </h4>
                            <center>
                            <p class="mb-2" style="font-size: large; font-weight:600; color:#3E3D41;">
                                <?php echo getProductCount($conn); ?>
                            </p>
                            </center>
                            <div class="mb-0">
                                <span class="badge me-2">
                                    +9.0%
                                </span>
                                <span class="text-muted">
                                    Since last months
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- INVENTORY -->
            <div class="card border-0 px-4 card3">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-2">
                                <i class="fa-solid fa-box pe-2"></i>Inventory
                            </h4>
                            <center>
                            <p class="mb-2" style="font-size: large; font-weight:600; color:#3E3D41;">
                                <?php echo getInventoryCount($conn); ?>
                            </p>
                            </center>
                            <div class="mb-0">
                                <span class="badge me-2">
                                    +9.0%
                                </span>
                                <span class="text-muted">
                                    Since last months
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- RETURNED ITEM -->
            <div class="card border-0 px-4 card4">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-2">
                                <i class="fa-solid fa-box pe-2"></i>Returned Items
                            </h4>
                            <center>
                            <p class="mb-2" style="font-size: large; font-weight:600; color:#3E3D41;">
                                300
                            </p>
                            </center>
                            <div class="mb-0">
                                <span class="badge me-2">
                                    +9.0%
                                </span>
                                <span class="text-muted">
                                    Since last months
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SALES -->
            <div class="card border-0 px-4 card5">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-2">
                                <i class="fa-solid fa-box pe-2"></i>Sales
                            </h4>
                            <center>
                            <p class="mb-2" style="font-size: large; font-weight:600; color:#3E3D41;">
                                300
                            </p>
                            </center>
                            <div class="mb-0">
                                <span class="badge me-2">
                                    +9.0%
                                </span>
                                <span class="text-muted">
                                    Since last months
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
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
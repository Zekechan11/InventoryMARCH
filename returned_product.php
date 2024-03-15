<?php
require_once('inc/header.php');
require_once('dbconfig.php');
?>

<div class="content-inner">

<?php
include('inc/alert_success.php');
include('inc/alert_error.php');
?>

    <!-- Page Header-->
    <header class="bg-white px-4">
        <div class="container-fluid px-0">
            <h2 class="mb-0">Returned Products</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="bg-white">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 px-3 py-1">
                    <li class="breadcrumb-item"><a class="fw-light" href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Returned Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="tables py-4">
        <div class="card border-0">
            <div class="card-body">
                <div class="table-body col-12 text-center">
                    <table id="example" class=" display" style="width:100%;">
                        <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Customer Name</th>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Returned Stock</th>
                                <th class="text-center">Reason</th>
                                <th class="text-center">Returned Date</th>
                            </tr>
                        </thead>
                        <tbody style="vertical-align: middle;">
                        <?php
                            // get connection
                            $connection = $newconnection->openConnection();
                            // prepare statement
                            $stmt = $connection->prepare("SELECT * FROM returned_table");
                            // execute
                            $stmt->execute();
                            // fetch
                            $result = $stmt->fetchAll();

                            if ($result) {
                                foreach ($result as $row) {

                            ?>
                            <tr>
                                <td><?= $row['returned_id'] ?></td>
                                <td><?= $row['customer_name'] ?></td>
                                <td><?= $row['product_name'] ?></td>
                                <td>₱ <?= $row['price'] ?></td>
                                <td><?= $row['return_quantity'] ?></td>
                                <td><?= $row['reason'] ?></td>
                                <td><?= $row['return_date'] ?></td>
                            </tr>
                           <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
// require_once('modal/returned_products.php');
// require_once('modal/customer_purchased.php');
require_once('inc/footer.php'); ?>
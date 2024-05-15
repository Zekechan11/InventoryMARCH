<?php
require_once('inc/header.php');
require_once('dbconfig.php');
require_once('function/return_product.php');

$transaction_code = $_GET['transaction_code'] ?? '';
$customer_name = $_GET['name'] ?? '';
?>

<div class="content-inner">
<?php
include('inc/alert_success.php');
include('inc/alert_error.php');
?>
    <!-- Page Header-->
    <header class="bg-white px-4 ">
        <div class="container-fluid px-0">
            <h2 class="mb-0">Purchased History</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="bg-white">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 px-3 py-1">
                    <li class="breadcrumb-item"><a class="fw-light" href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a class="fw-light" href="transaction.php">Manage Transactions</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Purchased History</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card mb-0">
        <div class="card-header">
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#add-category">
               <?php echo $customer_name ?>
            </button>
        </div>
        <div class="col-lg-12">
            <div class="card-body text-center">
                <div class="table-responsive">
                    <table id="example" class="display" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Transaction Id</th>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            // get connection
                            $connection = $newconnection->openConnection();
                            // prepare statement
                            $stmt = $connection->prepare("SELECT * FROM transaction_table
                                                          WHERE status='PAID' AND transaction_code = '$transaction_code'");
                            // execute
                            $stmt->execute();
                            // fetch
                            $result = $stmt->fetchAll();

                            if ($result) {
                                foreach ($result as $row) { ?>
                            <tr>
                                <td><?= $row['transaction_id'] ?></td>
                                <td><?= $row['product_name'] ?></td>
                                <td><?= $row['price'] ?></td>
                                <td><?= $row['quantity'] ?></td>
                                <td>
                                    <i class="fa-solid fa-minus minus-icon" style="color: red" data-bs-toggle="modal" data-bs-target="#return-product"
                                    onclick="openReturnMod(
                                        '<?= $row['transaction_id'] ?>',
                                        '<?= $row['customer_name'] ?>',
                                        '<?= $row['product_name'] ?>',
                                        '<?= $row['price'] ?>',
                                        '<?= $row['quantity'] ?>',
                                        '<?= $row['transaction_code'] ?>',
                                        )"></i>
                                </td>
                            </tr>
                        <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once('modal/returned_products.php');
require_once('inc/footer.php');
?>

<script>
</script>
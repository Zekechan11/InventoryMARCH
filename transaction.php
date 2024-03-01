<?php
require_once('inc/header.php');
include_once('function/sales.php');
include_once('function/remove_transaction.php');
include_once('function/customer.php');
include_once('status.php');
require_once('dbconfig.php');


// $sql = "SELECT * FROM sales_table";
// $stmt = $conn->query($sql);
// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<link rel="stylesheet" href="css/badge.css">
<div class="content-inner">
    <!-- Page Header-->
    <header class="bg-white px-4">
        <div class="container-fluid px-0">
            <h2 class="mb-0">Manage Transactions</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="bg-white">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 px-3 py-1">
                    <li class="breadcrumb-item"><a class="fw-light" href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Manage Transactions</li>
                </ol>
            </nav>
        </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" style="color: black;" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Transaction</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="history-tab" style="color: black;" data-bs-toggle="tab" data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">History</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"> 
        <div class="card mb-0">
        <div class="card-header">
        <form action="" method="POST">
            <input type="hidden" id="cus_id" name="train_customer_id">
            <button type="submit" class="btn btn-warning" style="float: right;" name="add_transaction">
                <i class="fa fa-plus"></i> Add Transaction</button>
        </form>
            <div class="col-md-3">
                <select id="inputState" class="form-select" onchange="updateProcessButton(this.value)">
                    <option hidden>Choose Customer</option>
                    <?php
                        $newconnection = new Connection();

                        try {
                            $pdo = $newconnection->openConnection();
                            $query = "SELECT customer_id, full_name FROM customer_table WHERE status='NONE'";
                            $stmt = $pdo->query($query);
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<option value='" . $row['customer_id'] . "|" . $row['full_name'] . "'>" . $row['full_name'] . "</option>";
                            }
                        } catch (PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        } finally {
                            $newconnection->closeConnection();
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card-body text-center">
                <div class="table-responsive">
                    <table id="example" class=" display" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Customer Id</th>
                                <th class="text-center">Customer Name</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            // get connection
                            $connection = $newconnection->openConnection();
                            // prepare statement
                            $stmt = $connection->prepare("SELECT * FROM customer_table WHERE status='PENDING'");
                            // execute
                            $stmt->execute();
                            // fetch
                            $result = $stmt->fetchAll();

                            if ($result) {
                                foreach ($result as $row) {

                            ?>
                            <tr>
                                <td><?= $row['customer_id'] ?></td>
                                <td><?= $row['full_name'] ?></td>
                                <td><?= $row['address'] ?></td>
                                <td>
                                    <a href="view_item.php?id=<?= $row['customer_id'] ?>&name=<?= $row['full_name'] ?>"><i type="button" class="fa-solid fa-plus" type="button" style="color: green"></i></a>  | 
                                    <i type="button" class="fa fa-trash _delete_cus" style="color:red" title="Delete" data-bs-toggle="modal" data-bs-target="#remove-trans"
                                        onclick="openRevCustomer('<?= $row['customer_id'] ?>')"></i>
                                </td>
                            </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        </div>

        <div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab" tabindex="0">
            <section class="tables py-3">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="table-body col-12 text-center">
                            <table class="table table-striped table-hover" style="width:100%;">
                                <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
                                    <tr>
                                        <th class="text-center">Customer Id</th>
                                        <th class="text-center">Customer Name</th>
                                        <th class="text-center">Pending</th>
                                        <th class="text-center">Date</th>
                                    </tr>
                                </thead>
                                <tbody style="vertical-align: middle;">
                                    <?php

                                    foreach ($sales_data as $row) {

                                        switch ($row['status']) {
                                            case 1:
                                                $status_icon = 'fa-solid fa-clock-rotate-left';
                                                $status_color = 'th-color-orange ';
                                                break;
                                            case 2:
                                                $status_icon = 'fa-check-circle';
                                                $status_color = 'th-color-green';
                                                break;
                                        }
                                    ?>
                                        <tr>
                                            <td><?= $row['product_id'] ?></td>
                                            <td><?= $row['product_name'] ?></td>
                                            <td>
                                                <span class="th-badge <?php echo $status_color ?>">
                                                    <?= $status[$row['status']] ?>
                                                    <i class="fas <?php echo $status_icon ?> ml-1"></i>

                                                </span>
                                            </td>

                                            <td><?= $row['date'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php
require_once('modal/add_sales.php');
require_once('modal/remove_transaction.php');
require_once('modal/cart.php');
require_once('modal/add_transaction.php');
require_once('inc/footer.php');
// require_once('modal/view_transaction_history.php');
// require_once('modal/view_customer_purchased.php');
?>

<script>
    function updateProcessButton(selectedValue) {
        var values = selectedValue;
        var customerId = values[0];

        document.getElementById('cus_id').value = customerId;
    }
</script>

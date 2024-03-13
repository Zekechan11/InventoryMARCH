<?php
require_once('inc/header.php');
require_once('dbconfig.php');
?>

<div class="content-inner">
    <!-- Page Header-->
    <header class="bg-white px-4">
        <div class="container-fluid px-0">
            <h2 class="mb-0">Sales Report</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="bg-white">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 px-3 py-1">
                    <li class="breadcrumb-item"><a class="fw-light" href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Sales Report</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container">
        <form action="">
            <div class="row" style="position: relative;left:226px;top:20px;">
                <div class="col-md-4">
                    <label for="inputState" class="form-label">From Date</label>
                    <input type="date" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">To Date</label>
                    <input type="date" class="form-control" id="inputCity">
                </div>
            </div>
            <div class="col-md-11">
                <button type="submit" name="filter" class="btn btn-primary btn-sm float-end" style="position: relative;bottom:15px;">pink</button>
            </div>
        </form>
    </div>
    <section class="tables py-4">
        <div class="card border-0">
            <div class="card-body">
                <div class="table-body col-12 text-center">
                    <table id="example" class=" display" style="width:100%;">
                        <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
                            <tr>
                                <th class="text-center">Product Id</th>
                                <th class="text-center">Customer Name</th>
                                <th class="text-center">Discount</th>
                                <th class="text-center">Subtotal</th>
                                <th class="text-center">Cash</th>
                                <th class="text-center">Total</th>
                                <th class="text-center">Change</th>
                                <th class="text-center">Date</th>
                            </tr>
                        </thead>
                        <tbody style="vertical-align: middle;">
                        <?php
                            // get connection
                            $connection = $newconnection->openConnection();
                            // prepare statement
                            $stmt = $connection->prepare("SELECT * FROM sales_table");
                            // execute
                            $stmt->execute();
                            // fetch
                            $result = $stmt->fetchAll();

                            if ($result) {
                                foreach ($result as $row) {

                            ?>
                            <tr>
                                <td><?= $row['sale_id'] ?></td>
                                <td><?= $row['customer_name'] ?></td>
                                <td><?= $row['voucher'] ?>%</td>
                                <td>₱ <?= $row['subtotal'] ?></td>
                                <td>₱ <?= $row['cash'] ?></td>
                                <td>₱ <?= $row['total'] ?></td>
                                <td>₱ <?= $row['remainder'] ?></td>
                                <td><?= $row['date'] ?></td>
                            </tr>
                           <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require_once('inc/footer.php'); ?>
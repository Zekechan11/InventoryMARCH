<?php require_once('inc/header.php');
include_once('function/sales.php');
include_once('function/add_transaction.php');
include_once('status.php');
require_once('dbconfig.php');

$sql = "SELECT * FROM sales_table";
$stmt = $conn->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="content-inner">
    <!-- Page Header-->
    <header class="bg-white px-4 ">
        <div class="container-fluid px-0">
            <h2 class="mb-0">View Items</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="bg-white">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 px-3 py-1">
                    <li class="breadcrumb-item"><a class="fw-light" href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a class="fw-light" href="transaction.php">Manage Transactions</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">View Items</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card border-0">
                <div class="card-header shadow-sm">
            <button type="button" class="btn btn-success float-end ms-3" data-bs-toggle="modal" data-bs-target="#view-transaction">
                <i class="fa fa-circle-arrow-right" onclick="openViewCart(<?php echo isset($_GET['id']) ? (int)$_GET['id'] : ''; ?>)"></i>
            </button>

            <button type="button" class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#view-purchased">
                <i class="fa fa-eye"></i> View
            </button>
                    <div class="col-md-3">
                        <select id="inputState" class="form-select" onchange="updateProcessButton(this.value)">
                        <option hidden>Choose Customer</option>
                        <?php
                        $newconnection = new Connection();

                        try {
                            $pdo = $newconnection->openConnection();
                            $query = "SELECT customer_id, full_name FROM customer_table";
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
                            <div class="col-md-2 bg-black " style="position: relative;width:50px;height:30px;left:310px;bottom:35px;border-radius:5px;">
                            <p class=" mb-0 text-center" style="font-size: 15px; font-weight:600;color:white;position:relative;top:5px;">
                            10
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-body col-12 text-center">
                        <table id="example1" class=" display" style="width:100%;">
                            <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
                                <tr>
                                    <th class="text-center">Product Id</th>
                                    <th class="text-center">Product Name</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Total Price</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $stmt = $conn->prepare('SELECT p.product_id, COALESCE(c.category_name, "Category Deleted") AS category_name,
                                c.category_id,p.product_name,p.image,p.quantity,p.price,
                                p.date_added,(p.quantity * p.price) AS total_price FROM products_table p
                                LEFT JOIN category_table c ON p.category_id = c.category_id ORDER BY p.product_id ASC');
                                $stmt->execute();
                                $productList = $stmt->fetchAll();

                                foreach ($productList as $row) {
                                ?>
                                    <tr>
                                        <td><?= $row['product_id'] ?></td>
                                        <td><?= $row['product_name'] ?></td>
                                        <td><?= (number_format($row['quantity'])); ?></td>
                                        <td>₱ <?= (number_format($row['price'], 2)); ?></td>
                                        <td>₱ <?= (number_format($row['total_price'], 2)); ?></td>
                                        <td><?= $row['date_added'] ?></td>
                                        <td>
                                            <i class="fa-solid fa-cart-plus" name="add_sales" type="button" style="color: green" data-bs-toggle="modal" data-bs-target="#addto-cart"
                                            onclick="openPorn(
                                                '<?= $row['product_id'] ?>',
                                                '<?= $row['product_name'] ?>',
                                                '<?= $row['quantity'] ?>',
                                                '<?= $row['price'] ?>'
                                            )"></i>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>


<?php
require_once('modal/add_sales.php');
require_once('modal/view_transaction_history.php');
require_once('modal/view_customer_purchased.php');
require_once('modal/cart.php');
require_once('inc/footer.php');
?>

<script>
    function updateProcessButton(selectedValue) {
        var values = selectedValue.split("|");
        var customerId = values[0];
        var customerName = values[1];

        document.getElementById('iamkiraId').value = customerId;
        document.getElementById('iamkira').value = customerName;

        var newUrl = window.location.href.split('?')[0] + '?id=' + customerId;
        window.history.pushState({
            path: newUrl
        }, '', newUrl);
    }
</script>
<?php
require_once('inc/header.php');
require_once('function/inventory.php');
require_once('add_stonk.php');
?>

<div class="content-inner">
    <!-- Page Header-->
    <header class="bg-white px-4">
        <div class="container-fluid px-0">
            <h2 class="mb-0">Manage Inventory</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="bg-white">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 px-3 py-1">
                    <li class="breadcrumb-item"><a class="fw-light" href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Manage Inventory</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="tables py-4">
        <div class="card border-0">
            <div class="card-body">
                <div class="table-responsive text-center">
                    <table id="example" class=" display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">Inventory Id</th>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Stock In</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($inventoryData as $row) : ?>
                                <tr>
                                    <td><?= $row['inventory_id'] ?></td>
                                    <td><?= $row['product_name'] ?></td>
                                    <td><?= $row['stock_in'] ?></td>
                                    <td>
                                        <i class="fa-solid fa-plus" type="button" style="color: green" data-bs-toggle="modal" data-bs-target="#add-stock" onclick="addStock(<?= $row['stock_in'] ?>)"></i>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include_once('modal/add_stock.php');?>
<?php include_once('modal/delete_stock.php');?>
<?php require_once('inc/footer.php'); ?>
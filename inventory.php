<?php
require_once('inc/header.php');
require_once('function/inventory.php');
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
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" style="color: black;" data-bs-toggle="tab" data-bs-target="#stock-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Stock</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" style="color: black;" data-bs-toggle="tab" data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">History</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="stock-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
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
                                                <i class="fa-solid fa-plus" type="button" style="color: green" data-bs-toggle="modal" data-bs-target="#add-stock"></i>
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
        <div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <section class="tables py-4">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="table-responsive text-center">
                            <table id="example1" class=" display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">Inventory Id</th>
                                        <th class="text-center">Product Name</th>
                                        <th class="text-center">Stock In</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</div>

<?php include_once('modal/add_stock.php'); ?>
<?php require_once('inc/footer.php'); ?>
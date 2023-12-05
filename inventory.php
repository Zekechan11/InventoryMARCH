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
    <section class="tables py-4">
        <div class="card border-0">
            <div class="card-body">
                <div class="table-responsive text-center" style="max-height: 500px; overflow-y: scroll;">
                    <label for="inputEmail3" class="col-form-label" style="position: relative; left:480px; font-size:16px;">Search :</label>
                    <div class="col-sm-2 mb-2 float-end" style="position: relative; right:30px;">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                    <label for="show" class="col-form-label" style="position: relative; right:440px; font-size:16px;">Show</label>
                    <div class="col-sm-1 mb-2 float-end" style="position: relative; right:815px;">
                        <select id="inputState" class="form-select" style="width: 70px;">
                            <option>10</option>
                            <option>20</option>
                        </select>
                    </div>
                    <table class="table mb-0 table-striped table-lg"
                        <thead>
                            <tr>
                                <th scope="col">Inventory Id</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Stock In</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($inventoryData as $row) : ?>
                                <tr>
                                    <td><?= $row['inventory_id'] ?></td>
                                    <td><?= $row['product_name'] ?></td>
                                    <td><?= $row['stock_in'] ?></td>
                                    <td>
                                        <i class="fa fa-edit edit_C" type="button" style="color: green" data-bs-toggle="modal" data-bs-target="#edit-inventory"></i> |
                                        <i class="fa fa-trash _delete_cat" type="button" style="color:red" title="Delete" data-bs-toggle="modal" data-bs-target="#del-inventory"></i>
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

<?php require_once('inc/footer.php'); ?>
<?php require_once('inc/header.php');
include_once('function/sales.php');
?>

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
                    <li class="breadcrumb-item"><a class="fw-light" href="index.php">Dashboard</a></li>
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
            <button class="nav-link" id="profile-tab" style="color: black;" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Transaction History</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <section class="tables py-3">
                <div class="card border-0">
                    <div class="card-header shadow-sm">
                        <button type="button" class="btn btn-warning" style="float: right;" data-bs-toggle="modal" data-bs-target="#add-sales">
                            <i class="fa fa-plus"></i> Add Sales</button>
                        <div class="col-md-3">
                            <select id="inputState" class="form-select">
                                <option hidden>Choose Customer</option>
                                <option>Edison Pagatpat</option>
                            </select>
                            <div class="col-md-2 bg-black " style="position: relative;width:50px;height:30px;left:310px;bottom:35px;border-radius:5px;"">
                                <p class=" mb-0 text-center" style="font-size: 15px; font-weight:600;color:white;position:relative;top:5px;">
                                10
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-body col-12 text-center">
                            <table id="example" class=" display" style="width:100%;">
                                <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
                                    <tr>
                                        <th class="text-center">Product Id</th>
                                        <th class="text-center">Product Name</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Total Price</th>
                                        <th class="text-center">Discount</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody style="vertical-align: middle;">
                                    <?php foreach ($sales_data as $sale) : ?>
                                        <tr>
                                            <td><?= $sale['sale_id'] ?></td>
                                            <td><?= $sale['product_name'] ?></td>
                                            <td><?= $sale['quantity'] ?></td>
                                            <td><?= $sale['price'] ?></td>
                                            <td><?= number_format($sale['quantity'] * $sale['price'], 2) ?></td>
                                            <td>10%</td>
                                            <td><?= $sale['date'] ?></td>
                                            <td>
                                                <i class="fa-solid fa-cart-plus" type="button" style="color: green" data-bs-toggle="modal" data-bs-target="#"></i> |
                                                <i class="fa fa-trash _delete_cat" type="button" style="color:red" title="Delete" data-bs-toggle="modal" data-bs-target="#del-sales"></i>
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
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <section class="tables py-3">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="table-body col-12 text-center">
                            <table class="table table-striped table-hover" style="width:100%;">
                                <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
                                    <tr>
                                        <th class="text-center">Customer Id</th>
                                        <th class="text-center">Customer Name</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody style="vertical-align: middle;">
                                    <?php foreach ($sales_data as $sale) : ?>
                                        <tr>
                                            <td><?= $sale['sale_id'] ?></td>
                                            <td><?= $sale['product_name'] ?></td>
                                            <td>
                                                <i class="fas fa-eye" type="button" style="color: blue;" data-bs-toggle="modal" data-bs-target="#view-transaction"></i>
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
    </div>
</div>

<?php require_once('modal/add_sales.php'); ?>
<?php require_once('modal/view_transaction_history.php'); ?>
<?php require_once('inc/footer.php'); ?>
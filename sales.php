<?php require_once('inc/header.php');
include_once('function/sales.php');
?>

<div class="content-inner">
    <!-- Page Header-->
    <header class="bg-white px-4">
        <div class="container-fluid px-0">
            <h2 class="mb-0">Manage Product</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="bg-white">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 px-3 py-1">
                    <li class="breadcrumb-item"><a class="fw-light" href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Manage Product</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="tables py-4">
        <div class="card border-0">
            <div class="card-header shadow-sm">
               
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#add-sales">
                    Launch static backdrop modal
                </button>
                 <div class="col-md-4">
                    <select id="inputState" class="form-select">
                        <option hidden>Choose Customer</option>
                        <option>Edison Pagatpat</option>
                    </select>
                </div>
                <div class="card border-0 px-4" style="width: 50px;height:50px;">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <p class="mb-2" style="font-size: large; font-weight:600;">
                                    10
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="card-body">
                <div class="table-body col-12 text-center">
                    <table id="example" class="table table-striped table-sm mx-auto">
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
                        <tbody style="vertical-align: middle;">
                            <?php foreach ($sales_data as $sale) : ?>
                                <tr>
                                    <td><?= $sale['sale_id'] ?></td>
                                    <td><?= $sale['product_name'] ?></td>
                                    <td><?= $sale['quantity'] ?></td>
                                    <td><?= $sale['price'] ?></td>
                                    <td><?= number_format($sale['quantity'] * $sale['price'], 2) ?></td>
                                    <td><?= $sale['date'] ?></td>
                                    <td>
                                        <i class="fa fa-add edit_C" type="button" style="color: green" data-bs-toggle="modal" data-bs-target="#"></i> |
                                        <i class="fa fa-edit edit_C" type="button" style="color: green" data-bs-toggle="modal" data-bs-target="#edit-sales"></i> |
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

<?php require_once('modal/add_sales.php'); ?>
<?php require_once('inc/footer.php'); ?>
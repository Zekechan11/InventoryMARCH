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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-sales">
                    Launch static backdrop modal
                </button>
            </div>
            <div class="card-body">
                <label for="inputEmail3" class="col-form-label" style="position: relative; left:875px; font-size:16px;">Search :</label>
                <div class="col-sm-2 mb-2 float-end" style="position: relative; right:30px;">
                    <input type="email" class="form-control" id="inputEmail3">
                </div>
                <label for="show" class="col-form-label" style="position: relative; right:45px; font-size:16px;">Show</label>
                <div class="col-sm-1 mb-2 float-end" style="position: relative; right:815px;">
                    <select id="inputState" class="form-select" style="width: 70px;">
                        <option>10</option>
                        <option>20</option>
                    </select>
                </div>
                <div class="table-body col-12 text-center" style="max-height: 390px; overflow-y: scroll;">
                    <table class="table table-striped table-sm mx-auto">
                        <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
                            <tr>
                                <th scope="col">Product Id</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
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
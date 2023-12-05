<?php require_once('inc/header.php');
require_once('function/add.php');
include_once('function/update_product.php');
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
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#add-product">
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
                                <th scope="col">Product Code</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Media</th>
                                <th scope="col">Instock</th>
                                <th scope="col">Price</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody style="vertical-align: middle;">
                            <?php

                            $stmt = $conn->prepare('SELECT p.product_id, c.category_name, p.product_name, p.product_code, p.image, p.quantity, p.price, p.date_added
                            FROM products_table p
                            INNER JOIN category_table c ON p.category_id = c.category_id
                            ORDER BY p.product_id ASC');
                            $stmt->execute();
                            $productList = $stmt->fetchAll();

                            foreach ($productList as $row) {
                            ?>
                                <tr>
                                    <td><?= $row['product_id'] ?></td>
                                    <td><?= $row['product_code'] ?></td>
                                    <td><?= $row['category_name'] ?></td>
                                    <td><?= $row['product_name'] ?></td>
                                    <td><img src="<?= $row['image'] ?>" width='50' height='50'></td>
                                    <td><?= (number_format($row['quantity'])); ?></td>
                                    <td>₱ <?= (number_format($row['price'], 2)); ?></td>
                                    <td><?= $row['date_added'] ?></td>
                                    <td>
                                        <i class="fas fa-eye" type="button" style="color: blue;"></i> |
                                        <i class="fa fa-edit edit_C" type="button" style="color: green" data-bs-toggle="modal" data-bs-target="#edit-product"></i> |
                                        <i class="fa fa-trash _delete_cat" type="button" style="color:red" title="Delete" data-bs-toggle="modal" data-bs-target="#del-product"></i>
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
    </section>
</div>

<?php require_once('modal/add_product.php'); ?>
<?php require_once('modal/delete_product.php'); ?>
<?php require_once('modal/edit_product.php'); ?>
<?php require_once('inc/footer.php'); ?>
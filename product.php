<?php require_once('inc/header.php');
require_once('function/add.php');
require_once('function/update_product.php');
require_once('function/delete_product.php');
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
    <div class="card border-0">
        <div class="card-header shadow-sm">
            <button type="button" class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#add-product">
                <i class="fa fa-plus"></i> Add Product
            </button>
        </div>
        <div class="col-lg-12">
            <div class="card-body text-center">
                <div class="table-responsive">
                    <table id="example" class=" display" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Product Id</th>
                                <th class="text-center">Category Name</th>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Instock</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Date</th>
                                <th class="text-center" style="display: none;">Image</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $stmt = $conn->prepare('SELECT p.product_id, c.category_name, p.product_name, p.image, p.quantity, p.price, p.date_added
                            FROM products_table p
                            INNER JOIN category_table c ON p.category_id = c.category_id
                            ORDER BY p.product_id ASC');
                            $stmt->execute();
                            $productList = $stmt->fetchAll();

                            foreach ($productList as $row) {
                            ?>
                                <tr>
                                    <td><?= $row['product_id'] ?></td>
                                    <td><?= $row['category_name'] ?></td>
                                    <td><?= $row['product_name'] ?></td>
                                    <td><?= (number_format($row['quantity'])); ?></td>
                                    <td>₱ <?= (number_format($row['price'], 2)); ?></td>
                                    <td><?= $row['date_added'] ?></td>
                                    <td style="display: none;"><?= $row['image'] ?></td>
                                    <td>
                                        <i class="fas fa-eye view_P" type="button" style="color: blue;" data-bs-toggle="modal" data-bs-target="#view-modal"></i> |
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
    </div>
</div>

<?php require_once('modal/add_product.php'); ?>
<?php require_once('modal/delete_product.php'); ?>
<?php require_once('modal/edit_product.php'); ?>
<?php require_once('modal/view_products.php'); ?>
<?php require_once('inc/footer.php'); ?>
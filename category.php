<?php require_once('inc/header.php');
require_once('function/category.php');
require_once('function/updel_category.php');
?>

<div class="content-inner">
    <!-- Page Header-->
    <header class="bg-white px-4 ">
        <div class="container-fluid px-0">
            <h2 class="mb-0">Manage Categories</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="bg-white" >
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 px-3 py-1">
                    <li class="breadcrumb-item"><a class="fw-light" href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Manage Categories</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card mb-0">
        <div class="card-header">
            <button type="button" class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#add-category">
                <i class="fa fa-plus"></i> Add Category
            </button>
        </div>
        <div class="col-lg-12">
            <div class="card-body text-center">
                <div class="table-responsive">
                    <table id="example" class="display" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Category Id</th>
                                <th class="text-center">Category Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // get connection
                            $connection = $newconnection->openConnection();
                            // prepare statement
                            $stmt = $connection->prepare("SELECT * FROM category_table");
                            // execute
                            $stmt->execute();
                            // fetch
                            $result = $stmt->fetchAll();

                            if ($result) {
                                foreach ($result as $row) {

                            ?>
                                    <tr>
                                        <td><?= $row['category_id'] ?></td>
                                        <td><?= $row['category_name'] ?></td>
                                        <td>
                                            <i class="fas fa-eye view_P" type="button" style="color: blue;" data-bs-toggle="modal" data-bs-target="#view-category" onclick="openViewCategory('<?= $row['category_id'] ?>')"></i> |
                                            <i class="fa fa-edit edit_C" type="button" style="color: green" data-bs-toggle="modal" data-bs-target="#edit-category"></i> |
                                            <i class="fa fa-trash _delete_cat" type="button" style="color:red" title="Delete" data-bs-toggle="modal" data-bs-target="#del-category"></i>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('modal/add_category.php'); ?>
<?php require_once('modal/view_category.php'); ?>
<?php require_once('modal/edit_category.php'); ?>
<?php require_once('modal/delete_category.php'); ?>
<?php require_once('inc/footer.php'); ?>
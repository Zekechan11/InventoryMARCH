<?php require_once('inc/header.php'); ?>

<div class="content-inner">
    <!-- Page Header-->
    <header class="bg-white px-4 ">
        <div class="container-fluid px-0">
            <h2 class="mb-0">Manage Customer</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="bg-white">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 px-3 py-1">
                    <li class="breadcrumb-item"><a class="fw-light" href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Manage Customer</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card mb-0">
        <div class="card-header">
            <button type="button" class="btn btn-warning" style="float: right;" data-bs-toggle="modal" data-bs-target="#add-customer"><i class="fa fa-plus"></i> Add Customer</button>
        </div>
        <div class="col-lg-12">
            <div class="card-body text-center">
                <div class="table-responsive">
                    <table id="example" class=" display" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Customer Id</th>
                                <th>Customer Name</th>
                                <th>Contact Number</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>wqie</td>
                                <td>Kakashi</td>
                                <td>9870758</td>
                                <td><i type="button" class="fa fa-edit edit_E" style="color: green" data-bs-toggle="modal" data-bs-target="#edit-customer"></i> |
                                    <i type="button" class="fa fa-trash _delete_cus" style="color:red" title="Delete" data-bs-toggle="modal" data-bs-target="#del-customer"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('modal/add_customer.php'); ?>
<?php require_once('inc/footer.php'); ?>
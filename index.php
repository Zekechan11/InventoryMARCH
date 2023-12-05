<?php
require_once('inc/header.php');
require_once('dbconfig.php');
?>

<div class="wrapper">
    <main class="content">
        <header class="bg-white px-2 py-2">
            <div class="container-fluid">
                <h2 class="mb-2">Dashboard</h2>
            </div>
        </header>
        <div class="custom-layout col-12 d-flex w-100 text-center" style="position: relative; left:3    0px;">
            <div class="card border-0 px-4">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-2">
                                <i class="fa-solid fa-rectangle-list pe-2"></i></i>Category
                            </h4>
                            <p class="mb-2" style="font-size: large; font-weight:600;">
                                <?php echo getCategoryCount($conn); ?>
                            </p>
                            <div class="mb-0">
                                <span class="badge text-success me-2">
                                    +9.0%
                                </span>
                                <span class="text-muted">
                                    Since last months
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 px-4">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-2">
                                <i class="fa-solid fa-box pe-2"></i>Products
                            </h4>
                            <p class="mb-2" style="font-size: large; font-weight:600;">
                                <?php echo getProductCount($conn); ?>
                            </p>
                            <div class="mb-0">
                                <span class="badge text-success me-2">
                                    +9.0%
                                </span>
                                <span class="text-muted">
                                    Since last months
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 px-4">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-2">
                                <i class="fa-solid fa-box pe-2"></i>Inventory
                            </h4>
                            <p class="mb-2" style="font-size: large; font-weight:600;">
                                <?php echo getInventoryCount($conn); ?>
                            </p>
                            <div class="mb-0">
                                <span class="badge text-success me-2">
                                    +9.0%
                                </span>
                                <span class="text-muted">
                                    Since last months
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 px-4">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-2">
                                <i class="fa-solid fa-box pe-2"></i>Returned Items
                            </h4>
                            <p class="mb-2" style="font-size: large; font-weight:600;">
                                300
                            </p>
                            <div class="mb-0">
                                <span class="badge text-success me-2">
                                    +9.0%
                                </span>
                                <span class="text-muted">
                                    Since last months
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 px-4">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-2">
                                <i class="fa-solid fa-box pe-2"></i>Sales
                            </h4>
                            <p class="mb-2" style="font-size: large; font-weight:600;">
                                300
                            </p>
                            <div class="mb-0">
                                <span class="badge text-success me-2">
                                    +9.0%
                                </span>
                                <span class="text-muted">
                                    Since last months
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-2">
        <div class="card border-0 col-md-7">
            <div class="card-header">
                <h5 class="card-title mb-0 py-2">
                    Recently Added Products
                </h5>
            </div>
            <div class="card-body text-center" style="max-height: 300px; overflow-y: scroll;">
                <table class="table mb-0 table-striped table-lg">
                    <thead>
                        <tr>
                            <th scope="col">Product Id</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Code</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card border-0 col-4">
            <div class="card-header">
                <h5 class="card-title mb-0 py-2">
                    Highest Selling Products
                </h5>
            </div>
            <div class="card-body text-center" style="max-height: 300px; overflow-y: scroll;">
                <table class="table mb-0 table-striped table-lg">
                    <thead>
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Total Quantity</th>
                            <th scope="col">Total Sold</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
</div>

<?php require_once('inc/footer.php'); ?>
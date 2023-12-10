<?php require_once('inc/header.php');
?>

<div class="content-inner">
    <!-- Page Header-->
    <header class="bg-white px-4">
        <div class="container-fluid px-0">
            <h2 class="mb-0">Returned Products</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="bg-white">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 px-3 py-1">
                    <li class="breadcrumb-item"><a class="fw-light" href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Returned Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="tables py-4">
        <div class="card border-0">
        <div class="card-header shadow-sm">
                <button type="button" class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#returned-products">
                    <i class="fa fa-plus"></i> Returned Product
                </button>
            </div>
            <div class="card-body">
                <div class="table-body col-12 text-center">
                    <table id="example" class=" display" style="width:100%;">
                        <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
                            <tr>
                                <th class="text-center">Product Id</th>
                                <th class="text-center">Customer Name</th>
                                <th class="text-center">Category Name</th>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Instock</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody style="vertical-align: middle;">
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require_once('modal/returned_products.php'); ?>
<?php require_once('inc/footer.php'); ?>
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
            <div class="card-body">
                <label for="inputEmail3" class="col-form-label" style="position: relative; left:875px; font-size:16px;">Search :</label>
                <div class="col-sm-2 mb-2 float-end" style="position: relative; right:30px;">
                    <input type="email" class="form-control" id="inputEmail3">
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
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require_once('inc/footer.php'); ?>
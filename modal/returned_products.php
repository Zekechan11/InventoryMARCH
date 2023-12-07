<?php require_once('inc/header.php'); ?>
<!-- Edit Product Modal -->
<div class="modal fade" id="returned-products" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit-product-label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="edit-product-label">Customer's Returned Products</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method='post' action='' enctype='multipart/form-data'>
                    <section class="tables py-4">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="table-body col-12 text-center">
                                    <table id="example" class="table table-striped table-sm mx-auto">
                                        <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
                                            <tr>
                                                <th class="text-center">Product Id</th>
                                                <th class="text-center">Customer Name</th>
                                                <th class="text-center">Category Name</th>
                                                <th class="text-center">Product Name</th>
                                                <th class="text-center">Media</th>
                                                <th class="text-center">Instock</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody style="vertical-align: middle;">
                                                <tr>

                                                <td>
                                                    awkpoqkodwq
                                                </td>
                                                
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="update_product" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<?php require_once('inc/footer.php'); ?>
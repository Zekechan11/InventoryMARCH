<!-- Edit Product Modal -->
<div class="modal fade" id="edit-product" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit-product-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" style="background-color: #227EA2;">Edit Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method='post' action='' enctype='multipart/form-data'>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="edit_category_name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="edit_category_name" id="edit_category_name">
                        </div>
                        <div class="col-md-6">
                            <label for="edit_product_name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="edit_product_name" id="edit_product_name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="edit_quantity" class="form-label">In Stock</label>
                            <input type="number" class="form-control" id="edit_quantity" name="edit_quantity">
                        </div>
                        <div class="col-6">
                            <label for="edit_price" class="form-label">Product Price</label>
                            <input type="text" class="form-control" id="edit_price" placeholder="₱ 00.0" name="edit_price">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="edit_product_image" class="form-label">Product Image</label>
                        <input type="file" class="form-control" name="edit_files[]">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="update_product" class="btn btn-success">Save Changes</button>
            </div>
        </div>
    </div>
</div>
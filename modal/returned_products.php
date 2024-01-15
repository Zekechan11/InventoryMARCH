
<!-- Return Product Modal -->
<div class="modal fade" id="return-product" tabindex="-1" role="dialog" aria-labelledby="del-category-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="del-category-label">Returned Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        <p>Are you sure you want to returned this product?</p>
                        <div class="col-md-10 mb-2">
                            <label for="edit_quantity" class="form-label">Description</label>
                            <input type="text" class="form-control" id="edit_quantity" name="edit_quantity">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="edit_quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="edit_quantity" name="edit_quantity">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <!-- Close and Delete buttons -->
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger" name="return_product">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
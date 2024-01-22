<!-- add_minus_quantity_modal.php -->
<div class="modal fade" id="addto-cart" tabindex="-1" role="dialog" aria-labelledby="add-minus-quantity-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add-minus-quantity-label">Adjust Quantity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                <div class="input-group mb-3">
                    <button type="button" class="btn btn-secondary" onclick="">-</button>
                        <input type="text" class="form-control" id="quantity" name="quantity" value="0" min="0">
                        <button type="button" class="btn btn-secondary" onclick="">+</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" name="save_quantity">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

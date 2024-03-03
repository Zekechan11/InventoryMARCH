<!-- delete_category.php -->
<div class="modal fade" id="remove-cart-item" tabindex="-1" role="dialog" aria-labelledby="del-category-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="remove-cart-label">Remove Transaction</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <p>Are you sure you want to remove this Transactions?</p>
                    <p class="text-danger text-center">This action cannot be undone</p>
                </div>
                <div class="modal-footer">
                    <!-- Input fields to store category_id and category_name -->
                    <input type="hidden" id="cart_id_rem" name="cart_id_rem" value="">
                    <!-- Close and Delete buttons -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" name="removeCartItem">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function openRemoveCartI(transaction_id) {
        document.getElementById('cart_id_rem').value = transaction_id;
    }
</script>
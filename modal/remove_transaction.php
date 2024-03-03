<!-- delete_category.php -->
<div class="modal fade" id="remove-trans" tabindex="-1" role="dialog" aria-labelledby="del-category-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="remove-trans-label">Delete Customer Transaction</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <p>Are you sure you want to remove this Transactions?</p>
                    <p class="text-danger text-center">This action cannot be undone</p>
                </div>
                <div class="modal-footer">
                    <!-- Input fields to store category_id and category_name -->
                    <input type="hidden" id="customer_id_rev" name="customer_id_rev" value="">
                    <!-- Close and Delete buttons -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" name="removeTransaction">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function openRevCustomer(customer_id) {
        document.getElementById('customer_id_rev').value = customer_id;
    }
</script>
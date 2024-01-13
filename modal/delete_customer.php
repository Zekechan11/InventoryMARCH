<!-- delete_category.php -->
<div class="modal fade" id="del-customer" tabindex="-1" role="dialog" aria-labelledby="del-category-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="del-category-label">Delete Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <p>Are you sure you want to delete this Customer?</p>
                </div>
                <div class="modal-footer">
                    <!-- Input fields to store category_id and category_name -->
                    <input type="hidden"  id="delete_customer_id" name="delete_category_id" value="">
                    <!-- Close and Delete buttons -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" name="delete_category">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function openCustomer(customer_id) {
        document.getElementById('delete_customer_id').value = customer_id;
    }
</script>
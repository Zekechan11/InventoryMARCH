<!-- delete_category.php -->
<div class="modal fade" id="del-category" tabindex="-1" role="dialog" aria-labelledby="del-category-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="del-category-label">Delete Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <p>Are you sure you want to delete this category?</p>
                </div>
                <div class="modal-footer">
                    <!-- Input fields to store category_id and category_name -->
                    <input type="hidden" id="delete-category-id" name="delete_category_id" value="">
                    <input type="hidden" id="delete-category-name" name="delete_category_name" value="">
                    <!-- Close and Delete buttons -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" name="delete_category">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // JavaScript to handle the delete button click and set the category id and name for deletion
    document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('._delete_cat');
    const deleteCategoryIdInput = document.getElementById('delete-category-id');
    const deleteCategoryNameInput = document.getElementById('delete-category-name');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const row = button.closest('tr');
            const categoryId = row.querySelector('td:first-child').innerText;
            const categoryName = row.querySelector('td:nth-child(2)').innerText; // Assuming category_name is in the second column

            deleteCategoryIdInput.value = categoryId;
            deleteCategoryNameInput.value = categoryName;
        });
    });
});
</script>

<!-- Edit Category Modal -->
<div class="modal fade" id="edit-category" tabindex="-1" aria-labelledby="edit-category-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-category-label">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit-category-name" class="col-form-label">Category Name:</label>
                        <input type="text" class="form-control" id="edit-category-name" name="edit_category_name">
                    </div>
                    <input type="hidden" id="edit-category-id" name="edit_category_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="update_category">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // JavaScript to handle the edit button click and fill the modal with category details
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.edit_C');
        const editCategoryNameInput = document.getElementById('edit-category-name');
        const editCategoryIdInput = document.getElementById('edit-category-id');

        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const row = button.closest('tr');
                const categoryId = row.querySelector('td:first-child').innerText;
                const categoryName = row.querySelector('td:nth-child(2)').innerText;

                editCategoryIdInput.value = categoryId;
                editCategoryNameInput.value = categoryName;
            });
        });
    });
</script>
<!-- Modal -->
<div class="modal fade" id="add-category" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="category_name" name="category_name">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Category Description</label>
                        <input type="text" class="form-control" id="category_description" name="category_description">
                    </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="add_category" class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>
    </div>
</div>

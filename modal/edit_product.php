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
                            <label type="hidden" for="edit_product_id" class="form-label">Product Id</label>
                            <input type="text" class="form-control" name="edit_product_id" id="edit_product_id">
                        </div>
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

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update_product" class="btn btn-success">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const viewButton = document.querySelectorAll('.view_P');
        const viewProductId = document.getElementById('edit_product_id');
        const viewProductName = document.getElementById('edit_product_name');
        const viewCategory = document.getElementById('edit_category_name');
        const viewInstock = document.getElementById('edit_quantity');
        const viewPrice = document.getElementById('edit_price');

        viewButton.forEach(button => {
            button.addEventListener('click', function () {
                const row = button.closest('tr');
                const productId = row.querySelector('td:nth-child(1)').innerText;
                const productName = row.querySelector('td:nth-child(2)').innerText;
                const categoryName = row.querySelector('td:nth-child(3)').innerText;
                const instockNum = row.querySelector('td:nth-child(4)').innerText;
                const pricePrice = row.querySelector('td:nth-child(5)').innerText;

                viewProductId.value = productId;
                viewProductName.value = productName;
                viewCategory.value = categoryName;
                viewInstock.value = instockNum;
                viewPrice.value = pricePrice;
            });
        });
    });
</script>
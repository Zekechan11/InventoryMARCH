
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
                        <input type="hidden" id="return_transactId" name="return_transactId">
                        <input type="hidden" id="return_transactCode" name="return_transactCode">
                        <input type="hidden" id="return_price" name="return_price">
                        <div class="col-md-10 mb-2">
                            <label for="edit_quantity" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" id="return_customer" name="return_customer" readonly>
                        </div>
                        <div class="col-md-10 mb-2">
                            <label for="edit_quantity" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="return_productName" name="return_productName" readonly>
                        </div>
                        <div class="col-md-10 mb-2">
                            <label for="edit_quantity" class="form-label">Reason</label>
                            <input type="text" class="form-control" name="return_reason" required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="edit_quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="return_quantity" name="return_quantity" required>
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

<script>
    function openReturnMod(transaction_id, customer_name, product_name, price, quantity, transaction_code) {

        document.getElementById('return_transactId').value = transaction_id;
        document.getElementById('return_customer').value = customer_name;
        document.getElementById('return_productName').value = product_name;
        document.getElementById('return_price').value = price;
        document.getElementById('return_quantity').value = quantity;
        document.getElementById('return_transactCode').value = transaction_code;
    }
</script>
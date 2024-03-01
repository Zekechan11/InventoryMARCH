<?php require_once('inc/header.php'); ?>
<!-- Edit Product Modal -->
<div class="modal fade" id="view-transaction" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit-product-label" aria-hidden="true">
    <div class="modal-dialog modal-min">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="edit-product-label">Customer's Purchased</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method='post' action='' enctype='multipart/form-data'>
                    <div class="col-md-1" style="position: relative;left:1000px;">
                        <label for="text" class="form-label">Voucher :</label>
                        <select class="form-select" name="edit_category_name" id="edit_category_name">
                            <option selected disabled value=""></option>
                            <option>10%</option>
                            <option>30%</option>
                            <option>50%</option>
                        </select>
                    </div>
                    <div class="col">
                    <div class="col-md-3">
                        <label for="text" class="form-label">Cash :</label>
                        <input type="text" placeholder="₱ 00.0">
                    </div>
                    <div class="col-md-3">
                        <label for="text" class="form-label">Total :</label>
                        <input type="text" placeholder="₱ 00.0">
                    </div>
                    <div class="col-md-3">
                        <label for="text" class="form-label">Change :</label>
                        <input type="text" placeholder="₱ 00.0">
                    </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" name="process_transaction">Pay</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('inc/footer.php'); ?>
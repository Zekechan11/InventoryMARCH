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
                    <div class="">
                        <label for="text" class="form-label">Voucher:</label>
                        <select class="form-select" name="selected_voucher" id="selected_voucher">
                            <option selected value="0">None</option>
                            <option value="0.10">10%</option>
                            <option value="0.30">30%</option>
                            <option value="0.50">50%</option>
                        </select>
                    </div>
                    <div class="col">
                        <div class="col-md-3">
                            <label for="text" class="form-label">Sub Total :</label>
                            <input type="text" id="subtotal" placeholder="₱ 00.0" value="100">
                        </div>
                        <div class="col-md-3">
                            <label for="text" class="form-label">Cash :</label>
                            <input type="text" id="cash" placeholder="₱ 00.0">
                        </div>
                        <div class="col-md-3">
                            <label for="text" class="form-label">Total :</label>
                            <input type="text" id="total" placeholder="₱ 00.0" readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="text" class="form-label">Change :</label>
                            <input type="text" id="change" placeholder="₱ 00.0" readonly>
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

<script>
    const cashInput = document.getElementById('cash');
    const totalInput = document.getElementById('total');
    const changeInput = document.getElementById('change');
    const subtotalInput = document.getElementById('subtotal');
    const voucherSelect = document.getElementById('selected_voucher');

    function calculate() {
        let cash = parseFloat(cashInput.value);
        let subtotal = parseFloat(subtotalInput.value);

        cash = isNaN(cash) ? 0 : cash;
        subtotal = isNaN(subtotal) ? 0 : subtotal;

        let total = subtotal;

        const voucherDiscount = parseFloat(voucherSelect.value);
        if (voucherDiscount > 0) {
            total -= (total * voucherDiscount) / 100;
        }

        totalInput.value = total.toFixed(2);

        let change = cash - total;
        change = change < 0 ? 0 : change;

        changeInput.value = change.toFixed(2);
    }

    cashInput.addEventListener('input', calculate);
    voucherSelect.addEventListener('change', calculate);

    calculate();
</script>
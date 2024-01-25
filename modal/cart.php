<!-- add_minus_quantity_modal.php -->
<div class="modal fade" id="addto-cart" tabindex="-1" role="dialog" aria-labelledby="add-minus-quantity-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add-minus-quantity-label">Adjust Quantity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                <div class="input-group mb-3">
                        <input type="" id="prody_id" name="prody_id">
                        <input type="" id="prody_name" name="prody_name">
                        <!-- <input type="" id="quantimmy" name="quantimmy"> -->
                        <input type="" id="pricekun" name="pricekun">
                        <input type="" id="iamkiraId" name="iamkiraId">
                        <input type="" id="iamkira" name="iamkira">
                        <!-- <input type="" id="statuss" name="statuss">
                        <input type="" id="dateee" name="dateee"> -->

                        <button type="button" class="btn btn-secondary" onclick="decreaseValue()">-</button>
                            <input type="text" class="form-control" id="quantityx" name="quantityx" value="1" min="0">
                        <button type="button" class="btn btn-secondary" onclick="increaseValue()">+</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" name="save_quantity_add">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function openPorn(product_id, product_name, quantity, price) {
        document.getElementById('prody_id').value = product_id;
        document.getElementById('prody_name').value = product_name;
        // document.getElementById('quantimmy').value = quantity;
        document.getElementById('pricekun').value = price;
    }

    // Plusle and Minun

    function increaseValue() {
        var quantityElement = document.getElementById("quantityx");
        var currentValue = parseInt(quantityElement.value);
        quantityElement.value = currentValue + 1;
    }

    function decreaseValue() {
        var quantityElement = document.getElementById("quantityx");
        var currentValue = parseInt(quantityElement.value);

        if (currentValue > 1) {
            quantityElement.value = currentValue - 1;
        }
    }
</script>
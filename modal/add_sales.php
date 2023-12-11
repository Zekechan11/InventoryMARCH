<!-- Modal -->
<div class="modal fade" id="add-sales" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Sales</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method='post' action="" enctype='multipart/form-data'>
                    <div class="row">
                        <div class="col-12 mb-2">
                            <label for="inputPassword4" class="form-label">Product Name</label>
                            <select id="product_name" class="form-select" name="product_name" onchange="displayProductPrice()">
                                <option selected disabled value="">Choose...</option>
                                <?php
                                foreach ($products as $product) {
                                    echo "<option value='" . $product['product_id'] . "' data-price='" . $product['price'] . "'>" . $product['product_name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputqty" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="quantity" id="quantity" onchange="calculateTotalPrice()">
                        </div>
                        <div class="col-6">
                            <label for="inputState" class="form-label">Product Price</label>
                            <input type="text" class="form-control" id="price" placeholder="₱ 00.0" name="price" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="inputState" class="form-label">Total Price</label>
                            <input type="text" class="form-control" id="total_price" placeholder="₱ 00.0" name="total_price" readonly>
                        </div>
                        <!-- <div class="col-6">
                            <label for="inputPassword4" class="form-label">Discount</label>
                            <select id="product_name" class="form-select" name="product_name" onchange="displayProductPrice()">
                                <option selected hidden="">Choose..</option>
                                <option>10%</option>
                                <option>30%</option>
                                <option>50%</option>
                                <option>80%</option>
                            </select>
                        </div> -->

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="add_sales" class="btn btn-primary">Add Sales</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function displayProductPrice() {
        var select = document.getElementById("product_name");
        var priceInput = document.getElementById("price");
        var selectedIndex = select.selectedIndex;
        var selectedOption = select.options[selectedIndex];
        var price = selectedOption.getAttribute("data-price");
        priceInput.value = "₱ " + price;
        calculateTotalPrice();
    }

    function calculateTotalPrice() {
        var quantity = document.getElementById("quantity").value;
        var price = document.getElementById("price").value.replace("₱ ", ""); // remove currency symbol
        var totalPrice = parseFloat(quantity) * parseFloat(price);
        document.getElementById("total_price").value = "₱ " + totalPrice.toFixed(2);
    }
</script>
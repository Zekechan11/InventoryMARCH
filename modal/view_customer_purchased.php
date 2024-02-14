<!-- Edit Product Modal -->
<div class="modal fade" id="view-purchased" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit-product-label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="edit-product-label">History Purchased</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method='post' action='' enctype='multipart/form-data'>
                    <div class="card-body">
                        <div class="table-body col-12 text-center">
                            <table class="table table-striped table-sm mx-auto">
                                <thead class="table table-dark" style="position: sticky; top: 0; background-color: white; z-index: 1;">
                                    <tr>
                                        <th class="text-center">Transaction Id</th>
                                        <th class="text-center">Customer Name</th>
                                        <th class="text-center">Product Name</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody style="vertical-align: middle;">
                                    <?php
                                        // get connection
                                        $connection = $newconnection->openConnection();
                                        // prepare statement
                                        $stmt = $connection->prepare("SELECT * FROM cart_table");
                                        // execute
                                        $stmt->execute();
                                        // fetch
                                        $result = $stmt->fetchAll();

                                        if ($result) {
                                            foreach ($result as $row) {

                                    ?>
                                                <tr>
                                                    <td><?= $row['cart_id'] ?></td>
                                                    <td><?= $row['customer_name'] ?></td>
                                                    <td><?= $row['product_name'] ?></td>
                                                    <td><?= $row['price'] ?></td>
                                                    <td><?= $row['quantity'] ?></td>
                                                    <td>
                                                        <i class="fa-solid fa-minus minus-icon" style="color: red" data-bs-target="#return-product"></i>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- <div class="col-md-0" style="position: relative;left:1000px;">
                        <label for="text" class="form-label">Voucher :</label>
                        <label for="">30%</label>
                    </div> -->
                    <div class="row">
                    <!-- <div class="col-md-3">
                        <label for="text" class="form-label">Cash :</label>
                        <input type="text" placeholder="₱ 00.0">
                    </div> -->
                    <div class="col-md-3">
                        <label for="text" class="form-label">Total :</label>
                        <input type="text" placeholder="₱ 00.0" readonly>
                    </div>
                    <!-- <div class="col-md-3">
                        <label for="text" class="form-label">Change :</label>
                        <input type="text" placeholder="₱ 00.0">
                    </div> -->
                    </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openViewCart(product_id) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.responseText);
                var tableBody = document.getElementById('table-body');
                tableBody.innerHTML = '';
                for (var i = 0; i < data.length; i++) {
                    var newRow = document.createElement('tr');
                    var productIdCell = document.createElement('td');
                    var productNameCell = document.createElement('td');

                    productIdCell.textContent = data[i].product_id;
                    productNameCell.textContent = data[i].product_name;

                    newRow.appendChild(productIdCell);
                    newRow.appendChild(productNameCell);

                    tableBody.appendChild(newRow);
                }
            }
        };

        xhr.open('GET', 'api/get_product.php?id=' + product_id, true);
        xhr.send();
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const minusIcons = document.querySelectorAll('.minus-icon');

        minusIcons.forEach(function(icon) {
            icon.addEventListener('click', function() {
                // Show the second modal when the minus icon is clicked
                $('#return-product').modal('show');
            });
        });

        // Set higher z-index for the second modal when shown
        $('#return-product').on('show.bs.modal', function() {
            setTimeout(function() {
                $('.modal-backdrop').last().after('<div class="modal-backdrop fade show"></div>');
            }, 0);
        });

        // Reset z-index when the second modal is closed
        $('#return-product').on('hidden.bs.modal', function() {
            $('.modal-backdrop').remove();
        });
    });
</script>

<?php require_once('inc/footer.php'); ?>
<?php require_once('modal/returned_products.php'); ?>
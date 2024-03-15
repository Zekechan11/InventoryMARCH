<!-- Edit Product Modal -->
<?php include_once('function/cart_fun.php');?>

<div class="modal fade" id="view-purchased" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit-product-label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="edit-product-label">Customer Product</h1>
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
                                        $stmt = $connection->prepare("SELECT * FROM transaction_table WHERE status='UNPAID' AND customer_id='$customer_id'");
                                        // execute
                                        $stmt->execute();
                                        // fetch
                                        $result = $stmt->fetchAll();

                                        if ($result) {
                                            foreach ($result as $row) {

                                    ?>
                                                <tr>
                                                    <td><?= $row['transaction_id'] ?></td>
                                                    <td><?= $row['customer_name'] ?></td>
                                                    <td><?= $row['product_name'] ?></td>
                                                    <td><?= $row['price'] ?></td>
                                                    <td><?= $row['quantity'] ?></td>
                                                    <td>
                                                        <i class="fa-solid fa-minus minus-icon" style="color: red" data-bs-target="#remove-cart-item" onclick="openRemoveCartI('<?= $row['transaction_id'] ?>')"></i>
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
                        <input type="text" class="form-control" id="cartotal" placeholder="₱ 00.0" readonly>
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
    fetch('api/get_total.php?id=<?= $customer_id ?>')
        .then(response => response.json())
        .then(data => {
            const getotal = data.total || 0;
            const displaytotal = document.getElementById("cartotal").value = '₱' + getotal;;
        });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const minusIcons = document.querySelectorAll('.minus-icon');

        minusIcons.forEach(function(icon) {
            icon.addEventListener('click', function() {
                // Show the second modal when the minus icon is clicked
                $('#remove-cart-item').modal('show');
            });
        });

        // Set higher z-index for the second modal when shown
        $('#remove-cart-item').on('show.bs.modal', function() {
            setTimeout(function() {
                $('.modal-backdrop').last().after('<div class="modal-backdrop fade show"></div>');
            }, 0);
        });

        // Reset z-index when the second modal is closed
        $('#remove-cart-item').on('hidden.bs.modal', function() {
            $('.modal-backdrop').remove();
        });
    });
</script>

<?php require_once('modal/cart_remove.php'); ?>
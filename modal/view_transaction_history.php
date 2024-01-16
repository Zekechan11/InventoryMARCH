<?php require_once('inc/header.php'); ?>
<!-- Edit Product Modal -->
<div class="modal fade" id="view-transaction" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit-product-label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="edit-product-label">Customer's Name</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method='post' action='' enctype='multipart/form-data'>
                    <div class="card-body">
                        <div class="table-body col-12 text-center">
                            <table id="example" class="table table-striped table-sm mx-auto">
                                <thead class="table table-dark" style="position: sticky; top: 0; background-color: white; z-index: 1;">
                                    <tr>
                                        <th class="text-center">Product Id</th>
                                        <th class="text-center">Product Name</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Total Price</th>
                                        <th class="text-center">Date</th>
                                    </tr>
                                </thead>
                                <tbody style="vertical-align: middle;">
                                    <tr>
                                        <td>1</td>
                                        <td>Coco Lumber</td>
                                        <td>90</td>
                                        <td>80.00</td>
                                        <td>160.00</td>
                                        <td>2023-12-11 22:50:21</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Coco Lumber</td>
                                        <td>90</td>
                                        <td>80.00</td>
                                        <td>400.00</td>
                                        <td>2023-12-12 01:08:22</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Coco Lumber</td>
                                        <td>90</td>
                                        <td>80.00</td>
                                        <td>400.00</td>
                                        <td>2023-12-12 01:08:22</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Coco Lumber</td>
                                        <td>90</td>
                                        <td>80.00</td>
                                        <td>400.00</td>
                                        <td>2023-12-12 01:08:22</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                    <div class="col-md-1" style="position: relative;left:1000px;">
                        <label for="text" class="form-label">Voucher :</label>
                        <select class="form-select" name="edit_category_name" id="edit_category_name">
                            <option selected disabled value=""></option>
                            <option>10%</option>
                            <option>30%</option>
                            <option>50%</option>
                        </select>
                    </div>
                    <div class="row">
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
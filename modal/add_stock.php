<div class="modal fade text-start" id="add-stock" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Stock</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="form-data" method="POST">
                    <div class="row">
                    <div class="col-12">
                            <label class="form-label" for="modalInputEmail1">Current Stock</label>
                            <input class="form-control" id="invent_stock" type="text" readonly>
                            <input type="hidden" id="stonk_id" name="stonk_id">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="modalInputEmail1">Add Stock</label>
                            <input class="form-control" id="new_stonk" name="new_stonk" type="text">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-success" type="submit" id="btn-customer" name="add_stonk">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function addStock(product_id, quantity) {
        document.getElementById('stonk_id').value = product_id;
        document.getElementById('invent_stock').value = quantity;
    }
</script>
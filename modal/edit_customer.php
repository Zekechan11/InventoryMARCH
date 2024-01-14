<div class="modal fade text-start" id="edit-customer" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Customer</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="form-data" method="POST">
                    <div class="row">
                        <input type="hidden" id="edit_customer_id" name="edit_customer_id" value="">
                        <div class="col-12">
                            <label class="form-label" for="modalInputEmail1">Customer Full Name</label>
                            <input class="form-control" id="edit_customer_name" name="edit_customer_name" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label" for="modalInputEmail1">Contact Number</label>
                            <input class="form-control" id="edit_contact" name="edit_contact" type="text" minlength="11" maxlength="11">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label" for="modalInputEmail1">Address</label>
                            <input class="form-control" id="edit_address" name="edit_address" type="text">
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit" name="update_customer" id="btn-customer">Save</button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>

<script>
    function openEditCustomer(customer_id, full_name, contact_number, address) {
        document.getElementById('edit_customer_id').value = customer_id;
        document.getElementById('edit_customer_name').value = full_name;
        document.getElementById('edit_contact').value = contact_number;
        document.getElementById('edit_address').value = address;
    }
</script>
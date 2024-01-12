<div class="modal fade text-start" id="add-customer" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Customer</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="form-data" method="POST">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label" for="modalInputEmail1">Customer Full Name</label>
                            <input class="form-control" id="full_name" type="text" name="full_name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label" for="modalInputEmail1">Contact Number</label>
                            <input class="form-control" id="contact_number" name="contact_number" type="text" minlength="11" maxlength="11">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label" for="modalInputEmail1">Address</label>
                            <input class="form-control" id="address" name="address" type="text">
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit" id="btn-customer" name="add_customer">Save</button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="add-product" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #227EA2; color:white;">
                <h1 class="modal-title fs-5">Add Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method='post' action='' enctype='multipart/form-data'>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Category Name</label>
                            <select id="category_name" class="form-select" name="category_name" >
                                <option selected disabled value="">Choose...</option>
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="product_name">
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Instock</label>
                            <input type="number" class="form-control" id="quantity" name="quantity">
                        </div>
                        <div class="col-6">
                            <label for="inputState" class="form-label">Product Price</label>
                            <input type="text" class="form-control" id="price" placeholder="₱ 00.0" name="price">
                        </div>
                    </div>
                    <div class="row">
                    
                        <div class="col-6">
                            <label for="inputZip" class="form-label">Product Image</label>
                            <input type="file" class="form-control" name="files[]">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-success">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
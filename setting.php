<?php include_once('inc/header.php'); ?>

<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="card" style="background-color: #175F7C; color:white;">
                <div class="card-header">
                    <h2 class="card-title text-center">Profile Setting</h2>
                </div>
                <div class="card-body">
                    <form action="your_process_script.php" method="post" enctype="multipart/form-data">
                        <div class="form-group row mb-3">
                            <label for="firstname" class="col-sm-3 col-form-label">First Name *</label>
                            <div class="col-sm-9">
                                <input name="firstname" class="form-control" type="text" placeholder="First Name" id="firstname" value="">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="lastname" class="col-sm-3 col-form-label">Last Name *</label>
                            <div class="col-sm-9">
                                <input name="lastname" class="form-control" type="text" placeholder="Last Name" id="lastname" value="">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="email" class="col-sm-3 col-form-label">User Name *</label>
                            <div class="col-sm-9">
                                <input name="email" class="form-control" type="text" placeholder="User Name" id="email" value="">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password" class="col-sm-3 col-form-label">Password *</label>
                            <div class="col-sm-9">
                                <input name="password" class="form-control" type="password" placeholder="Password" id="password">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="about" class="col-sm-3 col-form-label">About</label>
                            <div class="col-sm-9">
                                <textarea name="about" placeholder="About" class="form-control" id="about"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="preview" class="col-sm-3 col-form-label">Preview</label>
                            <div class="col-sm-9">
                                <img src="" class="img-thumbnail" width="125" height="100">
                            </div>
                            <input type="hidden" name="old_image" value="">
                        </div>

                        <div class="form-group row mb-3">
                            <label for="image" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="image" aria-describedby="fileHelp">
                                <small id="fileHelp" class="text-muted"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-9 offset-sm-3 d-flex justify-content-end">
                                <button type="reset" class="btn btn-secondary me-2">Reset</button>
                                <button type="submit" class="btn btn-success" name="edit_profile">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('inc/footer.php'); ?>

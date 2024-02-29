<?php
include_once('inc/header.php');
include_once('function/update_admin.php')
?>

<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="card" style="background-color: #175F7C; color:white;">
                <div class="card-header">
                    <!-- <h2 class="card-title text-center"></h2> -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Profile Settings</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Password Settings</button>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                        </li> -->
                    </ul>
                </div>
                <div class="card-body">

                    <!-- PROFILE TAB -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php
                                    include('function/admin.php');
                                    foreach ($result as $row) {
                                ?>
                                <div class="form-group row mb-3">
                                    <label for="firstname" class="col-sm-3 col-form-label">First Name *</label>
                                    <div class="col-sm-9">
                                        <input value="<?= $row['first_name'] ?>" name="adminFirstname" class="form-control" type="text" placeholder="First Name" id="adminFirstname">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="lastname" class="col-sm-3 col-form-label">Last Name *</label>
                                    <div class="col-sm-9">
                                        <input value="<?= $row['last_name'] ?>" name="adminLastname" class="form-control" type="text" placeholder="Last Name" id="adminLastname">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="email" class="col-sm-3 col-form-label">User Name *</label>
                                    <div class="col-sm-9">
                                        <input value="<?= $row['username'] ?>" name="adminUsername" class="form-control" type="text" placeholder="User Name" id="adminUsername">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="preview" class="col-sm-3 col-form-label">Preview</label>
                                    <div class="col-sm-9">
                                        <img src="<?= $row['profile_pic'] ?>" id="selectedImage" class="img-thumbnail" width="125" height="100">
                                    </div>
                                    <input type="hidden" name="old_image" value="">
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="image" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="imageInput" aria-describedby="fileHelp" id="imageInput" accept="image/*" onchange="displayImage()">
                                        <small id="fileHelp" class="text-muted"></small>
                                    </div>
                                </div>
                                
                                <?php } ?>

                                <div class="form-group row">
                                    <div class="col-sm-9 offset-sm-3 d-flex justify-content-end">
                                        <button type="reset" class="btn btn-secondary me-2">Reset</button>
                                        <button type="submit" class="btn btn-success" name="edit_profile">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- PASSWORD TAB -->
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <form action="your_process_script.php" method="post" enctype="multipart/form-data">

                                <div class="form-group row mb-3">
                                    <label for="lastname" class="col-sm-3 col-form-label">Old password *</label>
                                    <div class="col-sm-9">
                                        <input value="" name="lastname" class="form-control" type="text" placeholder="Old password" id="lastname">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="email" class="col-sm-3 col-form-label">New password *</label>
                                    <div class="col-sm-9">
                                        <input value="" name="email" class="form-control" type="text" placeholder="New password" id="email">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="password" class="col-sm-3 col-form-label">Confirm new password *</label>
                                    <div class="col-sm-9">
                                        <input value="" name="password" class="form-control" type="text" placeholder="Confirm new password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-9 offset-sm-3 d-flex justify-content-end">
                                        <!-- <button type="reset" class="btn btn-secondary me-2">Reset</button> -->
                                        <button type="submit" class="btn btn-success" name="edit_profile">Update Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- USERLESS TAB -->
                        <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('inc/footer.php'); ?>


<script>
    function displayImage() {
  const input = document.getElementById('imageInput');
  const image = document.getElementById('selectedImage');

  if (input.files && input.files[0]) {
    const reader = new FileReader();

    reader.onload = function(e) {
      image.src = e.target.result;
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>

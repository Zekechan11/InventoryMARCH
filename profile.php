<?php
include_once('inc/header.php');
require_once('dbconfig.php');
?>

<div class="row">
    <div class="col-12 col-md-6 d-flex">
        <div class="card flex-fill border-0 illustration">
            <div class="card-body p-0 d-flex flex-fill">
                <div class="row g-0 w-100">
                    <div class="col-6">
                        <div class="p-3 m-1">
                            <h4>Welcome Back, Admin</h4>
                            <?php
                                include('function/admin.php');
                                foreach ($result as $row) {
                            ?>
                           <p class="mb-0">Name : <?= $row['first_name'].' '.$row['last_name'] ?></p>
                            <p class="mb-0">Username : <?= $row['username'] ?></p>
                            <?php } ?>
                        </div>

                    </div>
                    <div class="col-6 align-self-end text-end">
                        <img src="image/yokai.jpg" class="img-fluid illustration-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('inc/footer.php');?>
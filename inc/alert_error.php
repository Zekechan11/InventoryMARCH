<?php if(isset($error_msg) && !empty($error_msg)) { ?>
    <div class="alert alert-danger" style="position: absolute;top: 30px;left: 50%;transform: translateX(-50%);" id="error_message" role="alert">
        <div><?php echo $error_msg; ?></div>
    </div>
<?php } ?>
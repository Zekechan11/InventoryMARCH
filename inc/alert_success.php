<?php if(isset($success_msg) && !empty($success_msg)) { ?>
    <div class="alert alert-success" style="position: absolute;top: 30px;left: 50%;transform: translateX(-50%);" id="success_message" role="alert">
        <div><?php echo $success_msg; ?></div>
    </div>
<?php } ?>

<?php
require_once('function/logcon.php');

session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Bree+Serif&family=Bubblegum+Sans&family=Fascinate+Inline&family=Irish+Grover&family=Oxanium:wght@500&family=Poppins&family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/logme.css">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="image/list.png" alt="" class="logo">
        </div>
        <div class="content">
            <h1 class="heading-underline">INVENTORY MANAGEMENT SYSTEM</h1>
        </div>

        <!-- border log in  -->

        <div class="login-box"> 
        <?php  
            if(isset($error_message))  
            {  
                echo '<label style="color: red;">'.$error_message.'</label>';  
            }  
        ?>
            <h2>Login</h2>
            <form action="" method="POST">
                <div class="user-box">
                    <input type="text" name="username" id="username" required>
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" id="pass" required>
                    <label>Password</label>
                </div>
                <div class="user-box" style="font-size: 12px;">
                    <input type="checkbox" name="show-button" class="pas-card" id="check">
                    <label class="pas-but">Show Password</label>
                </div>
                <a href="#">
                    <input type="submit" name="login" value="Log in" class="submit-btn">
                </a>
            </form>
        </div>
        
        <!-- <div class="login-box" style="position: absolute;left:300px;top:428px;"> 
        <?php  
            if(isset($error_message))  
            {  
                echo '<label style="color: red;">'.$error_message.'</label>';  
            }  
        ?>
            <h2>Login</h2>
            <form action="" method="POST">
                <div class="user-box">
                    <input type="text" name="username" id="username" required>
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" id="pass" required>
                    <label>Password</label>
                </div>
                <div class="user-box" style="font-size: 12px;">
                    <input type="checkbox" name="show-button" class="pas-card" id="check">
                    <label class="pas-but">Show Password</label>
                </div>
                <a href="#">
                    <input type="submit" name="login" value="Log in" class="submit-btn">
                </a>
            </form>
        </div> -->
        
    </div>

    <script>
        check.onclick = togglePassword;

        function togglePassword() {
            if (check.checked) pass.type = "text";
            else pass.type = "password";
        }
    </script>
</body>

</html>
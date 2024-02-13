<?php
require('session_checker.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>March & Marc Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://kit.fontawesome.com/7b92f6b770.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/mainn.css">
    <link rel="stylesheet" href="css/belll.css">
    <link rel="stylesheet" href="style-report.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo py-2 mb-2">
                    <img src="image/INV.png" alt="">
                    <a href="dashboard.php">March&Marc<br>Inventory</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="active">
                        <a href="dashboard.php" class="sidebar-link" style="font-size: 18px;">
                            <i class="fa-solid fa-gauge pe-2"></i>
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="product.php" class="sidebar-link" style="font-size: 18px;">
                            <i class="fa-solid fa-sliders pe-2"></i>
                            Product
                        </a>
                    </li>
                    <li>
                        <a href="category.php" class="sidebar-link" style="font-size: 18px;">
                            <i class="fa-solid fa-file-lines pe-2"></i>
                            Category
                        </a>
                    </li>
                    <li>
                        <a href="inventory.php" class="sidebar-link" style="font-size: 18px;">
                            <i class="fa-solid fa-boxes-stacked pe-2"></i>
                            Inventory
                        </a>
                    </li>
                    <li>
                        <a href="customer.php" class="sidebar-link" style="font-size: 18px;">
                            <i class="fa-solid fa-user pe-2"></i>
                            Customer
                        </a>
                    </li>
                    <li id="transaction_active">
                        <a href="transaction.php" class="sidebar-link" style="font-size: 18px;">
                            <i class="fa-solid fa-signal pe-2"></i>
                            Transactions
                        </a>
                    </li>
                    <li>
                        <a href="returned_product.php" class="sidebar-link" style="font-size: 18px;">
                            <i class="fa-solid fa-truck-ramp-box pe-2"></i>
                            Returned Product
                        </a>
                    </li>

                    <li>
                        <a href="sales_report.php" class="sidebar-link" style="font-size: 18px;">
                            <i class="fa-solid fa-clipboard-list pe-2"></i>
                            Sales Report
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="main" > 
            <nav class="navbar navbar-expand px-3 border-bottom shadow-sm bg-white" style="background-color: red;"> <!--CARD_HEADER -->
                <button class="btn" id="sidebar-toggle" type="button" > <!--BUTTON -->
                    <i class="fa-solid fa-bars" style="font-size: 25px;"></i> <!--ICON -->
                </button>
                <div class="navbar-collapse navbar" >
                    <ul class="navbar-nav" >
                        <li class="drop-down">
                            <div class="notify" style="cursor: pointer;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a href="#" class="nav-link">
                                    <i class='bx bxs-bell icon'></i>
                                    <span class="badge">5</span>
                                </a>
                            </div>
                            <div class="dropdown-menu overflow-h-menu dropdown-menu-right">
                                <div class="dropdown-item">
                                    <h6>test</h6>
                                    <span>Out of Stock</span>
                                    <hr class="mt-1 mb-1">
                                </div>
                                <div class="dropdown-item">
                                    <h6>test</h6>
                                    <span>POGI</span>
                                    <hr class="mt-1 mb-1">
                                </div>
                                <div class="dropdown-item">
                                    <h6>test</h6>
                                    <span>HANDSOME</span>
                                    <hr class="mt-1 mb-1">
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="image/yokai.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="profile.php" class="dropdown-item">Profile</a>
                                <a href="setting.php" class="dropdown-item">Setting</a>
                                <a href="logout.php" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

</body>

</html>
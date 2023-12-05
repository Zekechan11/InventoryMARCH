<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>March & Marc Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b92f6b770.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style-report.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo py-2 mb-2">
                    <img src="image/INV.png"  alt="">
                    <a href="index.php">March&Marc<br>Inventory</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="index.php" class="sidebar-link active" style="font-size: 18px;">
                            <i class="fa-solid fa-gauge pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <!-- <li class="sidebar-item">
                        <a href="customer.php" class="sidebar-link" style="font-size: 20px;">
                            <i class="fa-solid fa-file-lines pe-2"></i>
                            Customer
                        </a>
                    </li> -->
                    <li class="sidebar-item">
                        <a href="product.php" class="sidebar-link" style="font-size: 18px;">
                            <i class="fa-solid fa-sliders pe-2"></i>
                            Product
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="category.php" class="sidebar-link" style="font-size: 18px;">
                            <i class="fa-regular fa-user pe-2"></i>
                            Category
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="inventory.php" class="sidebar-link" style="font-size: 18px;">
                            <i class="fa-solid fa-boxes-stacked pe-2"></i>
                            Inventory
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="returned_product.php" class="sidebar-link" style="font-size: 18px;">
                        <i class="fa-solid fa-truck-ramp-box pe-2"></i>
                            Returned Product
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="sales.php" class="sidebar-link" style="font-size: 18px;">
                        <i class="fa-solid fa-signal pe-2"></i>
                            Sales
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="sales_report.php" class="sidebar-link" style="font-size: 18px;">
                        <i class="fa-solid fa-clipboard-list pe-2"></i>
                            Sales Report
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom shadow-sm bg-white">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="image/yokai.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="profile.php" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Setting</a>
                                <a href="#" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
</body>

</html>
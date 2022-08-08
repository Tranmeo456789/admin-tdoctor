<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/solid.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <title>Admin Tdoctor</title>
</head>
<body>
    <div id="warpper" class="nav-fixed">     
        <div id="page-body" class="d-flex">
            <div id="sidebar" style="background-color: #def3d4;">
                <div id="logo-admin">
                    <a href="">
                        <img src="image/logo.png" alt="" srcset="" class="fluid">
                    </a>
                </div>
                <ul id="sidebar-menu">
                    <li class="nav-link">
                        <a href="?view=dashboard">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-building"></i>
                            </div>
                            Thống kê bán hàng
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            Hồ sơ
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="?view=info-seller">Thông tin người bán</a></li>
                        </ul>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-dumpster-fire"></i>
                            </div>
                            Quản lý sản phẩm
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="?view=list-product">Danh sách sản phẩm</a></li>
                            <li><a href="?view=add-product">Thêm sản phẩm</a></li>
                        </ul>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-gifts"></i>
                            </div>
                            Quản lý đơn hàng
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="?view=add-order">Tạo mới đơn hàng</a></li>
                            <li><a href="?view=list-order">Danh sách đơn hàng</a></li>
                        </ul>
                    </li>
                    <li class="nav-link">
                        <a href="?view=warehouse-management">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-store"></i>
                            </div>
                            Quản lý tồn kho
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-person-booth"></i>
                            </div>
                            Khách hàng
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="?view=list-customer">Danh sách khách hàng</a></li>
                            <li><a href="?view=add-customer">Thêm khách hàng</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="wp-content">
                <?php 
                    $view=isset($_GET['view'])?$_GET['view']:'dashboard';
                    require "views/{$view}.php"; 
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/modal.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
</body>
</html>
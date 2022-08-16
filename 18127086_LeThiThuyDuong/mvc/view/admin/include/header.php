<!DOCTYPE html>
<html lang="en">

<head> 
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pizza</title>
  <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="public/css/style-admin.min.css" rel="stylesheet">
  <link href="public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


 
</head>
<?php require_once "./mvc/view/admin/include/navbar.php"; ?>
<!-- TopBar -->
<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          
          
          <ul class="navbar-nav ml-auto">
          
       
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="public/img/avatar.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Hi!</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đăng xuất
                </a>
              </div>
            </li>
          </ul>
        </nav>
<!-- Topbar -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Manajemen Kost</title>
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-0">
          <i class="fas fa-users"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $this->session->userdata('role'); ?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>

      </li>
      
      <div class="sidebar-heading">
        Menu User <!-- not visible only for admin -->
      </div>

      <!-- Nav Item - Kritik -->
      <li class="nav-item">
        <a href="<?= base_url('kritik/index') ?>" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <span>Kritik</span>
        </a>
      </li>

      <?php if($this->session->userdata('role')==='user'): ?>
      <li class="nav-item">
        <a href="<?= base_url('payment/index') ?>" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <span>Pembayaran</span>
        </a>
      </li>
      <?php endif; ?>

      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      
      <!-- Heading -->
	  <?php if($this->session->userdata('role')==='administrator'){ ?>
      <div class="sidebar-heading">
        Menu Admin<!-- visible only for admin -->
      </div>

      <!-- Nav Item - User Akun -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('akun/index') ?>">
          <i class="nav-icon fas fa-address-book"></i>
          <span>Akun</span></a>
      </li>

      <!-- Nav Item - Activity Log -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kamar/index') ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Kamar</span></a>
      </li>

      <li class="nav-item">
        <a href="<?= base_url('payment/index') ?>" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <span>Pembayaran</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
	  <?php } else { } ?>
    
    <!-- Nav Item - Logout -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('login/logout') ?>">
          <i class="fas fa-sign-out-alt"></i>
          <span>Keluar</span></a>
      </li>
    

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('username'); ?></span>
                <img class="img-profile rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5BSEPxHF0-PRxJlVMHla55wvcxWdSi8RU2g&s">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
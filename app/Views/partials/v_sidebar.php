<?php
if ($this->session->userdata("role") == null) {
    redirect("login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Laporan Toilet</title>
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url("templates/plugins/fontawesome-free/css/all.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("templates/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("templates/dist/css/adminlte.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap-select.css"); ?>">
  
  <style>
    /* Dark mode styles */
    body {
      background-color: #1a1a1a !important;
      color: #e0e0e0 !important;
    }
    
    .main-header {
      background-color: #2d3748 !important;
      border-bottom: 1px solid #4a5568 !important;
    }
    
    .navbar-light .navbar-nav .nav-link {
      color: #e0e0e0 !important;
    }
    
    .navbar-light .navbar-nav .nav-link:hover {
      color: #63b3ed !important;
    }
    
    .btn-danger {
      background-color: #e53e3e !important;
      border-color: #e53e3e !important;
    }
    
    .btn-danger:hover {
      background-color: #c53030 !important;
      border-color: #c53030 !important;
    }
    
    .main-sidebar {
      background-color: #1a202c !important;
    }
    
    .brand-link {
      background-color: #2d3748 !important;
      color: #e0e0e0 !important;
      border-bottom: 1px solid #4a5568 !important;
    }
    
    .brand-text {
      color: #63b3ed !important;
    }
    
    .sidebar {
      background-color: #1a202c !important;
    }
    
    .user-panel {
      border-bottom: 1px solid #4a5568 !important;
    }
    
    .user-panel .info a {
      color: #e0e0e0 !important;
    }
    
    .nav-sidebar .nav-link {
      color: #e0e0e0 !important;
    }
    
    .nav-sidebar .nav-link:hover {
      background-color: #2d3748 !important;
      color: #63b3ed !important;
    }
    
    .nav-sidebar .nav-link.active {
      background-color: #3182ce !important;
      color: #ffffff !important;
    }
    
    .nav-sidebar .nav-link i {
      color: #a0aec0 !important;
    }
    
    .nav-sidebar .nav-link:hover i,
    .nav-sidebar .nav-link.active i {
      color: #ffffff !important;
    }
    
    .content-wrapper {
      background-color: #1a1a1a !important;
    }
    
    .card {
      background-color: #2d3748 !important;
      border: 1px solid #4a5568 !important;
    }
    
    .card-header {
      background-color: #2d3748 !important;
      border-bottom: 1px solid #4a5568 !important;
      color: #e0e0e0 !important;
    }
    
    .card-body {
      background-color: #2d3748 !important;
      color: #e0e0e0 !important;
    }
    
    /* Table dark mode */
    .table {
      color: #e0e0e0 !important;
      background-color: #2d3748 !important;
    }
    
    .table th,
    .table td {
      border-color: #4a5568 !important;
    }
    
    .table thead th {
      background-color: #1a202c !important;
      color: #e0e0e0 !important;
    }
    
    /* Form controls dark mode */
    .form-control {
      background-color: #2d3748 !important;
      border-color: #4a5568 !important;
      color: #e0e0e0 !important;
    }
    
    .form-control:focus {
      background-color: #2d3748 !important;
      border-color: #63b3ed !important;
      color: #e0e0e0 !important;
      box-shadow: 0 0 0 0.2rem rgba(99, 179, 237, 0.25) !important;
    }
    
    /* Responsive styles */
    @media screen and (max-width: 900px) {
      table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
      }
      .header {
        overflow-x: scroll;
        display: block;
        overflow-x: auto;
        white-space: nowrap;
        text-align: center;
      }
    }
    
    fieldset {
      display: none;
    }
    
    fieldset.show {
      display: block;
    }
    
    .tabs {
      margin: 2px 5px 0px 5px;
      padding-bottom: 10px;
      cursor: pointer;
      color: #e0e0e0 !important;
    }
    
    .tabs:hover, .tabs.active {
      border-bottom: 1px solid #63b3ed;
      color: #63b3ed !important;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed dark-mode">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i>
          </a>
        </li>
      </ul>
      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>login/logout" 
             type="submit" 
             class="btn btn-danger" 
             onclick="javascript: return confirm('Apa Anda Yakin?')">
            Logout
          </a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="<?php echo base_url("dashboard"); ?>" class="brand-link">
        <center>
          <span class="brand-text font-weight-light">Sistem Laporan Toilet</span>
        </center>
      </a>

      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url("templates/dist/img/user.png"); ?>" 
                 class="img-circle elevation-2" 
                 alt="User Image">
          </div>
          <div class="info">
            <a href="dashboard" class="d-block">
              <?= $this->session->userdata("name") ?>
            </a>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" 
              data-widget="treeview" 
              role="menu" 
              data-accordion="false">
            
            <li class="nav-item">
              <a href="<?php echo base_url("dashboard"); ?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            
            <?php if ($this->session->userdata("role") == "admin") { ?>
              <li class="nav-item">
                <a href="<?php echo base_url("user"); ?>" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Data Inspektur</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php echo base_url("toilet"); ?>" class="nav-link">
                  <i class="nav-icon fas fa-toilet"></i>
                  <p>Data Toilet</p>
                </a>
              </li>
            <?php } ?>
            
            <li class="nav-item">
              <a href="<?php echo base_url("checklist"); ?>" class="nav-link">
                <i class="nav-icon fas fa-check"></i>
                <p>Data Checklist</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Su-Raksha</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?= base_url('assets/admin/css/main.css')?>" type="text/css" rel="stylesheet"> 
    <link href="<?= base_url('assets/admin/css/jQuery.toast.min.css')?>" type="text/css" rel="stylesheet"> 

    <style>
      .app-header {
      	background-color: #2e5c97!important;
      }

      .app-header__logo {
      	background-color: #2e5c97!important;
      }

      .breadcrumb-item a {
      	color: #2e5c97!important;
      }

      td a {
      	color: #2e5c97!important;
      }

      .btn-primary {
      	color: #fff;
      	background-color: #2e5c97!important;
      	border-color: #2e5c97!important;
      }

      .app-sidebar__toggle:hover {
      	background-color: #2e5c97!important;
      }

      .app-sidebar__toggle:focus {
      	background-color: #2e5c97!important;
      }
    </style>

  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Su-Raksha</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="<?= base_url("admin/logout")?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">Admin</p>
          <p class="app-sidebar__user-designation">Su-Raksha</p>
        </div>
      </div>
      <ul class="app-menu">
           <ul class="app-menu">
        <li><a class="app-menu__item active" href="<?= base_url('admin/home') ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Contacts</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('admin/contact') ?>"><i class="icon fa fa-eye"></i>Contact</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Client</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('admin/client-reviews') ?>"><i class="icon fa fa-eye"></i>Review</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-building"></i><span class="app-menu__label">Property</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('admin/properties') ?>"><i class="icon fa fa-building"></i>Residence</a></li>
            <li><a class="treeview-item" href="<?= base_url('admin/aminities') ?>"><i class="icon fa fa-building"></i>Aminities</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-business-time"></i><span class="app-menu__label">Admin Address</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('admin/admin-address') ?>"><i class="icon fa fa-building"></i>Address</a></li>
            <li><a class="treeview-item" href="<?= base_url('admin/social-link') ?>"><i class="icon fa fa-instagram"></i>Social</a></li>
          </ul>
        </li>
       
        
      </ul>
      </ul>
    </aside>

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
  <?php $url_segement = $this->uri->segment(2);?>
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
        <li><a class="app-menu__item <?= ($url_segement == 'home')?'active':'' ?>" href="<?= base_url('admin/home') ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item <?= (in_array($url_segement,['properties','sold-rented','aminities','cities']))?'active':''; ?>" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-building-o"></i><span class="app-menu__label">Property</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item <?= ($url_segement == 'properties')?'active':'' ?>" href="<?= base_url('admin/properties') ?>"><i class="icon fa fa-home"></i>Available Properties</a></li>
            <li><a class="treeview-item <?= ($url_segement == 'sold-rented')?'active':'' ?>" href="<?= base_url('admin/sold-rented') ?>"><i class="icon fa fa-ban"></i>Sold / Rented</a></li>
            <li><a class="treeview-item <?= ($url_segement == 'aminities')?'active':'' ?>" href="<?= base_url('admin/aminities') ?>"><i class="icon fa fa-bed"></i>Aminities</a></li>
            <li><a class="treeview-item <?= ($url_segement == 'cities')?'active':'' ?>" href="<?= base_url('admin/cities') ?>"><i class="icon fa fa-globe"></i>Cites</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item <?= (in_array($url_segement,['users','contact','client-reviews']))?'active':''; ?>" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item <?= ($url_segement == 'users')?'active':'' ?>" href="<?= base_url('admin/users') ?>"><i class="icon fa fa-users"></i>Users</a></li>
            <li><a class="treeview-item <?= ($url_segement == 'contact')?'active':'' ?>" href="<?= base_url('admin/contact') ?>"><i class="icon fa fa-phone"></i>Contact Us</a></li>
            <li><a class="treeview-item <?= ($url_segement == 'client-reviews')?'active':'' ?>" href="<?= base_url('admin/client-reviews') ?>"><i class="icon fa fa-star"></i>Review</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item <?= (in_array($url_segement,['about','address','social-link','terms-condition','privacy-policy']))?'active':''; ?>" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-industry"></i><span class="app-menu__label">Company</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item <?= ($url_segement == 'about')?'active':'' ?>" href="<?= base_url('admin/about') ?>"><i class="icon fa fa-user"></i>About Us</a></li>
            <li><a class="treeview-item <?= ($url_segement == 'address')?'active':'' ?>" href="<?= base_url('admin/address') ?>"><i class="icon fa fa-address-book"></i>Address</a></li>
            <li><a class="treeview-item <?= ($url_segement == 'social-link')?'active':'' ?>" href="<?= base_url('admin/social-link') ?>"><i class="icon fa fa-instagram"></i>Social</a></li>
            <li><a class="treeview-item <?= ($url_segement == 'terms-condition')?'active':'' ?>" href="<?= base_url('admin/terms-condition') ?>"><i class="icon fa fa-gavel"></i>Terms & Condition</a></li>
            <li><a class="treeview-item <?= ($url_segement == 'privacy-policy')?'active':'' ?>" href="<?= base_url('admin/privacy-policy') ?>"><i class="icon fa fa-lock"></i> Privacy & Policy</a></li>
          </ul>
        </li>
      </ul>
      </ul>
    </aside>

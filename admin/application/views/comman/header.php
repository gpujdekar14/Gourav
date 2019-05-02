<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PAASH | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <script src="<?php echo base_url('assets/angular/angular.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <!-- Angular JS -->
 
  <!-- Angular UI Bootstrap -->
  <script src="<?php echo base_url('assets/angular/ui-bootstrap-tpls-1.0.3.js'); ?>"></script>
  <!-- toastr -->
  <script src="<?php echo base_url('assets/angular/angular-toastr.tpls.js'); ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/angular/angular-toastr.css'); ?>" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A PAASHH</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PAASHH</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">User</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                Admin
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('ChangePassword'); ?>" class="btn btn-default btn-flat">Change Password</a>
                </div>
              </li>
            </ul>
          </li>
          </ul>
        </div>
      </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar"> 
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
    
      <li class="menu">
        <a href="<?php echo site_url('Dashboard'); ?>">
            <i class="fa fa-dashboard text-aqua"></i>
             <span>Dashboard</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>                     
        </li> </a>
        <li class="treeview">
        <a href="assets/pages/forms/general.php">
            <i class="fa fa-gears text-aqua"></i>
             <span>Settings</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
            </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('ShopDetails');?>"><i class="fa fa-users text-aqua"></i>Shop Details</a></li>
            <li class="active"><a href="<?php echo site_url('ManageTeam');?>"><i class="fa fa-users text-aqua"></i>Manage Team</a></li>
            <li class="active"><a href="<?php echo site_url('ManageDepartment');?>"><i class="fa fa-wrench text-aqua"></i>General Settings</a></li>      
            <li class="active"><a href="<?php echo site_url('EmailTemplate');?>"><i class="fa fa-envelope text-aqua"></i>Email Template</a></li>      
          </ul>
          </a>         
        </li>       
        <li class="treeview">
        <a href="assets/pages/forms/general.php">
            <i class="fa fa-user-plus text-aqua"></i>
             <span>User Management</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
            </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('AddCustomer');?>"> <i class="fa fa-users text-aqua"></i>Customer</a></li>     
            <li class="active"><a href="<?php echo site_url('AddSupplier');?>"> <i class="fa fa-users text-aqua"></i>Supplier</a></li>     
          </ul>
          </a>         
        </li>
      <li class="treeview">
        <a href="assets/pages/forms/general.php">
            <i class="fa fa-cubes text-aqua"></i>
             <span>Inventory Master</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
            </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('AddInventory');?>"> <i class="fa fa-circle-o text-aqua"></i>Items</a></li>     
              
          </ul>
          </a>         
        </li>
      
        <li class="menu">
        <a href="<?php echo site_url('Invoice'); ?>">
            <i class="fa fa-shopping-cart text-aqua"></i>
             <span>Invoice</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>                     
        </li> </a>
       <li class="menu">
        <a href="<?php echo site_url('PurchaseOrders'); ?>">
            <i class="fa fa-shopping-cart text-aqua"></i>
             <span>Purchase Orders</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>                     
        </li> </a>
       
        <li class="treeview">
        <a href="assets/pages/forms/general.php">
            <i class="fa fa-bar-chart text-aqua"></i>
             <span>Reports</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
            </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('SalesReport');?>"><i class="fa fa-file "></i>Sales Report</a></li>          
            <li><a href="<?php echo site_url('PurchaseReport');?>"><i class="fa fa-file"></i>Purchase Report</a></li>
            <li><a href="index2.html"><i class="fa fa-file"></i>Team Memeber Report</a></li>
            <li><a href="index2.html"><i class="fa fa-file"></i>Income Report</a></li>
            <li><a href="index2.html"><i class="fa fa-file"></i>Expense Report</a></li>
          </ul>
          </a>
         
        </li>
       
    </section>
    <!-- /.sidebar -->
  </aside>
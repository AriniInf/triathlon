<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Unesa Triathlon</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/icbund.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/iccom.png') ?>" rel="apple-touch-icon">
  
  <link rel="stylesheet" href=" <?= base_url('asset/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" <?= base_url('asset/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href=" <?= base_url('asset/bower_components/Ionicons/css/ionicons.min.css') ?>">
    <!-- DataTables -->
  <link rel="stylesheet" href=" <?= base_url('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>"> 
  <!-- Theme style -->
  <link rel="stylesheet" href=" <?= base_url('asset/dist/css/AdminLTE.min.css') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href=" <?= base_url('asset/dist/css/skins/_all-skins.min.css') ?>">
  <script src=" <?= base_url('asset/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">

<style type="text/css">

</style>
<!-- Site wrapper -->
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo" style="a:hover { background-color:#006db9; }">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>UT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>UNESA </b>Triathlon</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
       	  <li>
          	<h5 style="margin: 16px 29px;color: white"><strong>Hi, Kalina (Admin1)</strong></h5>
       	  </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Dashboard Rekap</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('/dashboard-admin') ?>"><i class="fa fa-circle-o"></i> Unesa Triathlon 2021</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo site_url("login/logout"); ?>"><i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
      
    <!-- Main content -->

 <section class="content-header">
   <h1>
     Data Pendaftaran
   </h1>
 </section>

 <section class="content">
   <div class="row">
     <div class="col-xs-12">
       <div class="box">  
         <div class="box-body" style="overflow-y:scroll">
           <table id="example2" class="table table-striped table-bordered bg-danger table-hover text-center">
             <thead>
               <tr>
                <th>No</th>
                
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>

                <th>Package</th>
                <th>Category</th>
                <th>Jersey Size</th>
                <th>Total</th>

                <th>Photo</th>

                <th>Action</th>
               </tr>
             </thead>
             <tbody> 
                      
                <tr>
                 <td>1</td>
                 <td id="x">Lala</td>
                 <td id="y">Yeye</td>
                 <td id="z">Lulu</td>
                 <td id="x">Lala</td>
                 <td id="y">Yeye</td>
                 <td id="z">Lulu</td>
                 <td id="x">Lala</td>
                 <td id="y">Yeye</td>
                 <td id="z">
                 	<img class="img-responsive" src="<?= base_url('assets/img/iccom.png') ?>" alt="logo1" style="max-height: 90px;">
                 </td>
                 <td>
                 	<a data-toggle="modal" data-target="#modal-edit"> <em class="btn btn-sm btn-danger btn-create">Konfirmasi</em></a> 
                 </td>
               </tr>
          
             </tbody>
           </table>
         </div>
       </div>
     </div>
    

 </section>

 <style>
   .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
      background-color: #f4f4f4;
   }
 </style>
    
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <center><strong>Copyright &copy; 2021 <a href="#">Unesa Triathlon 2021</a>.</strong> All rights
    reserved.</center>
  </footer>
   
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url('asset/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('asset/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- SlimScroll -->
<script src="<?= base_url('asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
<!-- FastClick -->
<script src="<?= base_url('asset/bower_components/fastclick/lib/fastclick.js') ?>"></script>
<!-- DataTables -->
<script src="<?= base_url('asset/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/dist/js/demo.js') ?>"></script>
<script>

	
$.noConflict();
jQuery( document ).ready(function( $ ) {
    $('#example2').DataTable();
  // $(document).ready(function () {
    $('.sidebar-menu').tree();
    // $('#example2').DataTables();
  })
  
</script>
</body>
</html>

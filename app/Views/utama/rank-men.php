<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Men Ranking</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->

  <!-- Favicons -->
  <link href="assets/img/icbund.png" rel="icon">
  <link href="assets/img/iccom.png" rel="apple-touch-icon">
  
  <link rel="stylesheet" href="asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="asset/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="sset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="asset/dist/css/skins/_all-skins.min.css">
  <script src=" asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  
  
  <link rel="stylesheet" href=" asset/css/style.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini" id="ranking-men">



    <!-- Content Header (Page header) -->
   
      
    <!-- Main content -->

    <section class="content-header">
     <div class="row">
       <div class="col col-sm-1">
        <a href="<?= base_url('') ?>"><img src="assets/img/prev2.png" class="text-center" alt="back" style="width:40px;height:40px;margin-top: 15px"></a>
       </div class="col col-sm-11">
       <div> 
         <h2 style="color: white"><strong>Men Ranking</strong></h2>
       </div>
     </div>
    </section>

 <section class="content">
   <div class="row">
     <div class="col-xs-12">
       <div class="box">  
         <div class="box-body" style="overflow-y:scroll">
            <table id="example2" class="table table-striped table-bordered bg-danger table-hover text-center">
             <thead>
               <tr>
                <th>Rank</th>
                <th>Full Name</th>
                <th>Bib Name</th>
                <th>YOB</th>
                <th>NOC</th>
                <th>Point</th>
                <th>Event</th>
               </tr>
             </thead>
             <tbody> 
                      
                <tr>
                 <td id="x">Lala</td>
                 <td id="y">Yeye</td>
                 <td id="z">Lulu</td>
                 <td id="x">Lala</td>
                 <td id="y">Yeye</td>
                 <td id="z">Lulu</td>
                 <td id="x">Lala</td>
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


<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="asset/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="asset/bower_components/fastclick/lib/fastclick.js"></script>
<!-- DataTables -->
<script src="asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/dist/js/demo.js"></script>
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

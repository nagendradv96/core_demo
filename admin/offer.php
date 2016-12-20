<?php
session_start();

if(!isset($_SESSION['login_user'])){
header("location: index.php");
}
?>


<?php
include '../config/conn.php';

$selq="select * from offer";
$sel_res=mysqli_query($conn,$selq);
$sel_row = mysqli_fetch_assoc($sel_res); 
	 $of1=$sel_row['offer1'];
	 $of2=$sel_row['offer2'];	 
	 $of3=$sel_row['offer3'];	 
	 $of4=$sel_row['offer4'];	 
	 $of5=$sel_row['offer5'];	 

$msg='';
if(isset($_POST['submit']))
{			
	$offer1=$_POST['offer1'];
	$offer2=$_POST['offer2'];	
	$offer3=$_POST['offer3'];		
	$offer4=$_POST['offer4'];		
	$offer5=$_POST['offer5'];		
	
$q="UPDATE `offer` SET `offer1`='$offer1',`offer2`='$offer2',`offer3`='$offer3',`offer4`='$offer4',`offer5`='$offer5' where id=1";	
	
$res=mysqli_query($conn,$q);
if($res)
{
	$msg= 'Successfully Update';
}
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Club Platinum Resort</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'header.php'; ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  
  <?php include 'left.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        We Offer
        <small>Control panel</small>
      </h1> <br>    
    </section>

    <!-- Main content -->
    <div class="box box-warning">
    	<div class="box-header with-border">
        <div class="box-body" style="width:800px;">
        <div style="color:green;text-align:center;"><?php echo $msg; ?></div>
        <form method="post" role="form">              
            <div class="form-group">                        
              <label>Offer 1</label><br>
              <input type="text" name="offer1" value="<?php echo $of1; ?>" class="form-control" placeholder="Offer 1 ..." required=""><br>
              <label>Offer 2</label><br>
              <input type="text" name="offer2" value="<?php echo $of2; ?>" class="form-control" placeholder="Offer 2 ..." required=""><br>     
              <label>Offer 3</label><br>
              <input type="text" name="offer3" value="<?php echo $of3; ?>" class="form-control" placeholder="Offer 3 ..." required=""><br>              
              <label>Offer 4</label><br>
              <input type="text" name="offer4" value="<?php echo $of4; ?>" class="form-control" placeholder="Offer 4 ..." required=""><br>              
              <label>Offer 5</label><br>
              <input type="text" name="offer5" value="<?php echo $of5; ?>" class="form-control" placeholder="Offer 5 ..." required=""><br>              
            </div>
            
            <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
              </div>
        </form>
        </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
    
  <!-- Control Sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
</body>
</html>

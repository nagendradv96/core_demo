<?php
include 'config/conn.php';
$diningpath="img/offers/slid/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Club Platinum Resort</title>
<link rel="icon" type="image/png" href="img/fevicon.png" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
<link rel="stylesheet" type="text/css" href="css/effect-images.css" />

<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
<link rel="stylesheet" type="text/css" href="css/animate.css" />
<link rel="stylesheet" type="text/css" href="css/hover.css" />

<link href='http://fonts.googleapis.com/css?family=Nunito:400,700' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/> 
</head>

<body class="bg-color">
<div class="wrapper">
<?php include"header.php";?>
<section class="inner-banner">
 <div class="inner-ban-overlay">
  <div class="container">
  	<div class="row">
    	<div class="col-md-12 ">
        	<h1>Water Park Slides Gallery</h1>
        </div>
    </div>
  </div>
 </div> 
</section>

<section class="gallery-part">
  <div class=" container">
  	<div class="row pad-top">
    	<div class="col-md-12"><h1>Water Park Slides Gallery</h1></div>
    	<?php
			$selq="select * from gallery where category ='water_park' LIMIT 4";
			$sel_res=mysqli_query($conn,$selq);
			while ($sel_row = mysqli_fetch_assoc($sel_res))
			{			
			$image=$sel_row['image'];							
			$title=$sel_row['title'];
		?>
    	<div class="col-md-3">
        	 <a href="<?php echo $diningpath.$image; ?>" data-lightbox="1"> <img src="<?php echo $diningpath.$image; ?>" class="img-responsive img-thumbnail" /></a>
        </div>
         <?php } ?>
        <!--<div class="col-md-3">
        	<a href="img/offers/slid/s2.jpg" data-lightbox="1"> <img src="img/offers/slid/s2.jpg" class="img-responsive img-thumbnail" /></a>
        </div>
        <div class="col-md-3">
        	<a href="img/offers/slid/s3.jpg" data-lightbox="1"> <img src="img/offers/slid/s3.jpg" class="img-responsive img-thumbnail" /></a>
        </div>
        <div class="col-md-3">
        	<a href="img/offers/slid/s4.jpg" data-lightbox="1"> <img src="img/offers/slid/s4.jpg" class="img-responsive img-thumbnail" /></a>
        </div>-->
    </div>
    <div class="row pad-top">
    	<?php
			$selq="select * from gallery where category ='water_park' LIMIT 4,7";
			$sel_res=mysqli_query($conn,$selq);
			while ($sel_row = mysqli_fetch_assoc($sel_res))
			{			
			$image=$sel_row['image'];							
			$title=$sel_row['title'];
		?>
    	<div class="col-md-3">
        	 <a href="<?php echo $diningpath.$image; ?>" data-lightbox="1"> <img src="<?php echo $diningpath.$image; ?>" class="img-responsive img-thumbnail" /></a>
        </div>
       <?php } ?>
        <!--<div class="col-md-3">
        	<a href="img/offers/slid/s6.jpg" data-lightbox="1"> <img src="img/offers/slid/s6.jpg" class="img-responsive img-thumbnail" /></a>
        </div>
        <div class="col-md-3">
        	<a href="img/offers/slid/s7.jpg" data-lightbox="1"> <img src="img/offers/slid/s7.jpg" class="img-responsive img-thumbnail" /></a>
        </div>
        <div class="col-md-3">
        	
        </div>-->
    </div>
  </div>
</section>






<?php include"footer.php";?>
</div>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>
<script src="js/wow.min.js" type="text/javascript"></script>
<script type="text/javascript">
        new WOW().init();
    </script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script type="text/javascript">
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>

  
</body>
</html>
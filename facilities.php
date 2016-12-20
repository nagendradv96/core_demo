<?php
include 'config/conn.php';
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
        	<h1>Facilities</h1>
        </div>
    </div>
  </div>
 </div> 
</section>

<section class="facilites">
 <div class="container">
 	<div class="row pad-top">
    	<div class="col-md-12">
        <h1>Facilities</h1>
        	<p>Fresh air environment, away from crowded metro a smooth 45 minutes drive from Connaught place and a perfect combination of conferencing with fun and family outings/Picnics. Unmatched Facilities available!</p>
        </div>
    	<div class="col-md-4 p-back">
        <?php
			$selq="select * from facility LIMIT 0,4";
			$sel_res=mysqli_query($conn,$selq);			
			while ($sel_row = mysqli_fetch_assoc($sel_res))
			{
				$facility=$sel_row['facility'];
		?>
        	<p><i class="fa fa-check-square-o" aria-hidden="true"></i> <?php echo $sel_row['facility']; ?></p>
            <!--<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Multi-cuisine Restaurant</p>
            <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Pool Side Party lawns & Banquet halls</p>
             <p><i class="fa fa-check-square-o" aria-hidden="true"></i> 3 AC Conference halls</p>-->
         <?php } ?>    
        </div>
        	<div class="col-md-4 p-back">
            <?php
			$selq="select * from facility LIMIT 4,3";
			$sel_res=mysqli_query($conn,$selq);			
			while ($sel_row = mysqli_fetch_assoc($sel_res))
			{
				$facility=$sel_row['facility'];
			?>
            <p><i class="fa fa-check-square-o" aria-hidden="true"></i>  <?php echo $sel_row['facility']; ?></p>
            <!--<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Amusement and Water Park</p>
            <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Billiards & pool tables</p> -->
            <?php } ?>
            </div>
            <div class="col-md-4 p-back">
            <?php
			$selq="select * from facility LIMIT 7,1";
			$sel_res=mysqli_query($conn,$selq);			
			while ($sel_row = mysqli_fetch_assoc($sel_res))
			{
				$facility=$sel_row['facility'];
			?>
            <p><i class="fa fa-check-square-o" aria-hidden="true"></i> <?php echo $sel_row['facility']; ?></p>
            <?php } ?>
            <!--<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Amusement Park , Giant water slides, Aqua Dance (Disco) and many more amusement and water rides.</p>--->
                </div>
    </div>
  
        <div class="block-2">
            <div class="inside">
               <div class="title-2">Great Weather <br />Guarantee</div>
               <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet conse ctetur adipisicing elit</p>
               <a href="contactus.php" class="btn">Get Inquiry</a>
           </div>
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
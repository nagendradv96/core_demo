<?php
include 'config/conn.php';
$rmpath="img/accomodation/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Club Platinum Resort</title>
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
        	<h1>ROOMS</h1>
        </div>
    </div>
  </div>
 </div> 
</section>

<section class="room-part">
<div class="container">
 <div class="row ">
 	 <div class="col-md-12">
     	<div class="room-media">
        	<div class="row">
             <?php
					$selq="select * from rooms where id='1'";
					$sel_res=mysqli_query($conn,$selq);		
					$sel_row = mysqli_fetch_assoc($sel_res);
					$title=$sel_row['title'];
					$desc=$sel_row['desc'];
					$feature1=$sel_row['feature1'];			
					$feature2=$sel_row['feature2'];			
					$feature3=$sel_row['feature3'];			
					$image=$sel_row['image'];							
				?>
            	<div class="col-md-5">
                    <div class="hover01">
                	  <figure>
                        <a href="img/accomodation/ac.jpg" data-lightbox="1"> <img src="<?php echo $rmpath.$image; ?>" class="img-responsive" /></a>
                       </figure>
                    </div>
                </div>
                <div class="col-md-4 col-left-pad">               
               		<h4><?php echo $title; ?></h4>
                    <P class="det-phra"><?php echo $desc; ?></P>
                	<ul>
                      <li><i class="fa fa-long-arrow-right"></i> <?php echo $feature1; ?></li>
                      <li><i class="fa fa-long-arrow-right"></i> <?php echo $feature2; ?></li>
                      <li><i class="fa fa-long-arrow-right"></i> <?php echo $desc; ?></li>
                    </ul>
                </div>
                <div class="col-md-3 text-center">
                
                  <ul class="list-inline star">
                  	<li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                  
                   <div class="call-bg">
                  <div class="call-us-sec text-center">
                   <img src="img/icon-mob1.png" class="img-responsive" />
                   <p><small>Check Availability. Call us!</small></p>
                   <p class="no"><a href="tel:=+919813164088">9813164088</a>,
                   	  <a href="tel:+91 9813154088">9813154088</a>
                      <br /><a href="tel:8222864088">8222864088</a></p>
                   <p><small>We are available 24/7</small> </p>
                  </div>
                 </div> 
                 <a href="online-booking.php"><p class="rat">Book Now</p></a>
                </div><!--col close-->
            </div>
     	
        </div>
    </div>
 </div><!--row close-->
 <div class="row pad-top">
 	 <div class="col-md-12">
     	<div class="room-media">
        	<div class="row">
            	<div class="col-md-5">
                    <div class="hover01">
                	  <figure>
                        <a href="img/accomodation/deluxe.jpg" data-lightbox="1"> <img src="img/accomodation/deluxe.jpg" class="img-responsive" /></a>
                       </figure>
                    </div>
                </div>
                <div class="col-md-4 col-left-pad">
               		<h4>Deluxe Room</h4>
                    <P class="det-phra">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</P>
                	<ul>
                      <li><i class="fa fa-long-arrow-right"></i> TV with Cable</li>
                      <li><i class="fa fa-long-arrow-right"></i> King Size Bed</li>
                      <li><i class="fa fa-long-arrow-right"></i> Air conditioning</li>
                    </ul>
                </div>
                <div class="col-md-3 text-center">
                
                  <ul class="list-inline star">
                  	<li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                   <div class="call-bg">
                  <div class="call-us-sec text-center">
                   <img src="img/icon-mob1.png" class="img-responsive" />
                   <p><small>Check Availability. Call us!</small></p>
                   <p class="no"><a href="tel:=+919813164088">9813164088</a>,
                   	  <a href="tel:+91 9813154088">9813154088</a><br />
                      <a href="tel:8222864088">8222864088</a></p>
                   <p><small>We are available 24/7</small> </p>
                  </div>
                 </div> 
                 <a href="online-booking.php"><p class="rat">Book Now</p></a>
                </div><!--col close-->
            </div>
     	
        </div>
    </div>
 </div><!--row close-->
 
 
 
 
 
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
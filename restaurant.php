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
        	<h1>Multi Cuisine Restaurant</h1>
        </div>
    </div>
  </div>
 </div> 
</section>

<section class="restaurant">
 <div class="container">
 	<div class="row pad-top">
    	<div class="col-sm-12 white_block  col-md-7 col-md-offset-5">
        	<h1>Multi Cuisine Restaurant</h1>
            <p><b>Enjoy This Amazing Experience</b><br />
            This multi-cuisine restaurant blends the choicest culinary delights with the finest ambience.
			You will be spoilt with choice in the lavish lunch and dinner buffet spreads.You will discover that this is an ideal place to enjoy great food with friends and family.<br />
            <br />Multi Cuisine Restaurant serving flavors of different Mouth Watering Indian, Continental & Chinese Cuisine.</p>
            
          
            <p><a href="contactus.php"><button type="button" class=" detail-btn">Send Any Inquiry</button></a></p>

        </div>
        <img src="img/restaurant.jpg" class="img-responsive services_image hidden-sm hidden-xs" />
        
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
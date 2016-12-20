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
        	<h1>Package</h1>
        </div>
    </div>
  </div>
 </div> 
</section>

<section class="package">
 <div class="container">
 	<div class="row">
    	<div class="col-md-9 bg-white pack">
      		<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#package1">1 Night & 2 Days Package </a>
        </h4>
      </div>
      <div id="package1" class="panel-collapse collapse <?php if (strpos($_SERVER['REQUEST_URI'], "package1") !== false) { echo $dpk= "in"; }?>">
        <div class="panel-body">
        <?php
			$selq="select * from packages where package_type='night_day_package' LIMIT 0,3";
			$sel_res=mysqli_query($conn,$selq);			
			while ($sel_row = mysqli_fetch_assoc($sel_res))
			{
				$heading=$sel_row['heading'];
		?>
        	<h3><i class="fa fa-hand-o-right"></i> <?php echo $sel_row['heading']; ?> </h3>
            <!--<h3><i class="fa fa-hand-o-right"></i> 1 Night & 2 Days Package for Rs.6500/ for a couple and 2 Kids in AC Deluxe Room. </h3>
            <h3><i class="fa fa-hand-o-right"></i> 1 Night & 2 Days Package for Rs.6000/ for a couple and 2 Kids in Semi Deluxe Room. </h3>-->
         <?php } ?>   
            <div class="pack-border"></div>
            <h3 class="sub-head">Package Includes:</h3>
            <ul class="pack-list">
            <?php
			$selq="select * from packages where package_type='night_day_package'";
			$sel_res=mysqli_query($conn,$selq);			
			while ($sel_row = mysqli_fetch_assoc($sel_res))
			{
				$package_includes=$sel_row['package_includes'];
			?>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $package_includes; ?></li>
               <!--<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Check-in at 12:00 noon and Check-out next day at 11:00 A.M</li>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Bed Tea, Breakfast, Lunch & Dinner</li>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Swimming Pool & Water Park Entry/Amusement Park (Unlimited Rides)</li>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Billiard's/Snooker, Table Tennis, Badminton, Soft Ball Cricket, Dart Board, Tambola Board, Chess, Musical Chairs, Tug of war, Matka Phod, Rain Dance</li>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Two Children below 12 years will be Allowed in room complimentary.</li>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Package extendable on Pro Rata Basis.</li>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Booking will be held on confirmed basis on 50% advance payment in favour of U.V Resorts & Recreation L.L.P</li>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Cancellation would be subject to 7 days prior intimation from the intended date of arrival.</li>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <strong>Amusement Park:</strong> Unlimited Rides >> Disco-Disco, Break Dance, Mono Cycle, Jumping Frog, Racing Horse, Merry Go Round, Baby Train, Kids Roller Coaster, Super Trooper, Slide-Bouncy, Pirate Ship
                    PlayPen, water Falls.</li>
			 <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <strong>Water Park:</strong> Magic Twist, Black Tunnel, Multi Lane Slides, Wave Pool Cyclone, Family Slides, Spiral Slide, Multi Play System, H20 Dance Floor, Aqua Dance.</li>-->
            <?php } ?>
            </ul>
            <div class="text-center">
            	<a href="contactus.php"><button type="button" class="hvr-shutter-out-vertical">BOOK NOW</button></a>
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#package2">1 Night and 2 days Stay For Corporates on Single, Twin, Triple and Four sharing basis</a>
        </h4>
      </div>
      <div id="package2" class="panel-collapse collapse <?php if (strpos($_SERVER['REQUEST_URI'], "package2") !== false) { echo $dpk= "in"; }?>">
       <?php
			$selq="select * from packages where package_type='sharing_basis'";
			$sel_res=mysqli_query($conn,$selq);			
			$sel_row = mysqli_fetch_assoc($sel_res);				
				$heading=$sel_row['heading'];
		?>
        <div class="panel-body"><h3><i class="fa fa-hand-o-right"></i> <?php echo $heading; ?></h3>
            <div class="pack-border"></div>
            <div class="ser-rate-box">
            <h3 class="sub-head text-center"><i class="fa fa-star" aria-hidden="true"></i> Package Rates:</h3>
            <?php
			$selq="select * from packages where package_type='sharing_basis'";
			$sel_res=mysqli_query($conn,$selq);			
			while ($sel_row = mysqli_fetch_assoc($sel_res))
			{
				$package_rates=$sel_row['package_rates'];
			?>
            <p><?php echo $package_rates; ?></p>
            <!--<p>INR 2400+taxes Per Person on Twin Sharing basis;</p>
			<p>INR 2100+taxes Per Person on Triple Sharing basis;</p>
			<p>INR 1900+taxes Per Person on Four Sharing basis;</p>-->
            <?php } ?>
            </div>
            <h3 class="sub-head">Package Includes:</h3>
            <ul class="pack-list">
             <?php
				$selq="select * from packages where package_type='sharing_basis'";
				$sel_res=mysqli_query($conn,$selq);			
				while ($sel_row = mysqli_fetch_assoc($sel_res))
				{
					$package_includes=$sel_row['package_includes'];
			?>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $package_includes; ?></li>
                <!--<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Welcome drink on arrival.</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Entry to all Rides of Water Park and Amusement Park till 6:00 P.M.</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Lunch: 5 dishes in the main course,3 Indian Breads,1 Rice Preparation and 1 Dessert.</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Evening Tea with 2 Veg.snacks.</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Dinner: 5 dishes in the main course,3 Indian Breads,1 Rice Preparation and 1 Dessert.</li>-->
            <?php } ?>
            </ul> 
              <h3 class="color-red">Next Day:</h3>    
             <ul class="pack-list">   
             <?php
				$selq="select * from packages where package_type='sharing_basis' LIMIT 0,4";
				$sel_res=mysqli_query($conn,$selq);			
				while ($sel_row = mysqli_fetch_assoc($sel_res))
				{
					$next_day=$sel_row['next_day'];
			?>     
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $next_day; ?></li>
                <!--<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Breakfast</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Check-out at 11:00 a.m</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Water Park and Amusement Park (Unlimited Rides)</li>-->
            <?php } ?>    
            </ul>
            <h3 class="color-red">Other activities at the Resort:</h3>
            <ul class="pack-list">
             <?php
				$selq="select * from packages where package_type='sharing_basis'";
				$sel_res=mysqli_query($conn,$selq);			
				$sel_row = mysqli_fetch_assoc($sel_res);				
					$other_activities=$sel_row['other_activities'];
			?> 
            	<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $other_activities; ?></li>           
            </ul>
            
             <h3 class="color-red">Terms and Conditions</h3>
            <ul class="pack-list">
            <?php
				$selq="select * from packages where package_type='sharing_basis' LIMIT 0,5";
				$sel_res=mysqli_query($conn,$selq);			
				while ($sel_row = mysqli_fetch_assoc($sel_res))
				{
					$term_condition=$sel_row['term_condition'];
			?>
            	<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $term_condition; ?></li>
                <!--<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Booking will be held on confirmed basis on 100% advance payment in favour of U.V Resorts LLP.</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Cancellation would be subject to 7 days prior intimation from the intended date of arrival.</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Amusement Park: Unlimited Rides >> Disco-Disco, Break Dance, Mono Cycle, Jumping Frog, Racing Horse, Merry Go Round, Baby Train, Kids Roller Coaster, Super Trooper, Slide-Bouncy, Pirate Ship, PlayPen, water Falls.</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Water Park: Magic Twist, Black Tunnel, Multi Lane Slides, Wave Pool Cyclone, Family Slides, Spiral Slide, Multi Play System, h40 Dance Floor, Aqua Dance.</li>-->
            <?php } ?>
            </ul>
            	<div class="text-center">
            	<a href="contactus.php"><button type="button" class="hvr-shutter-out-vertical">BOOK NOW</button></a>
            	</div>
            </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#package3">Special Mini-Holiday Package</a>
        </h4>
      </div>
      <div id="package3" class="panel-collapse collapse <?php if (strpos($_SERVER['REQUEST_URI'], "package3") !== false) { echo $dpk= "in"; }?>">
        <div class="panel-body">
        	<h1 class="text-center">Special Mini-Holiday Package </h1>
            <div class="head-border pack-hd-border"></div>
            <?php
				$selq="select * from packages where package_type='mini_holiday'";
				$sel_res=mysqli_query($conn,$selq);			
				$sel_row = mysqli_fetch_assoc($sel_res);				
					$heading=$sel_row['heading'];
			?>
        	<h3><i class="fa fa-hand-o-right"></i> <?php echo $heading; ?></h3>
            <div class="pack-border"></div>
            <div class="ser-rate-box">
            <h3 class="sub-head"><i class="fa fa-star" aria-hidden="true"></i> Package Rates:</h3>
            <?php
				$selq="select * from packages where package_type='mini_holiday'";
				$sel_res=mysqli_query($conn,$selq);			
				while ($sel_row = mysqli_fetch_assoc($sel_res))
				{
					$package_rates=$sel_row['package_rates'];
			?>
            <p><?php echo $package_rates; ?></p>
			<!--<p>For Rs.2000/-(For a Couple )An AC Deluxe Room with Welcome Drink and Lunch.</p>
			<p>For 2800/(For a Couple):An AC Deluxe Room ,Welcome Drink,Lunch,Entry to Water Park and Amusement park.</p>-->
            <?php } ?>
            </div>
          
            <h3 class="sub-head">Package Includes:</h3>
            <ul class="pack-list">
            <?php
				$selq="select * from packages where package_type='mini_holiday'";
				$sel_res=mysqli_query($conn,$selq);			
				$sel_row = mysqli_fetch_assoc($sel_res);				
					$package_includes=$sel_row['package_includes'];
			?>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $package_includes; ?></li>
            </ul> 
              
              <h1 class="text-center">Corporate And Family Picnics Package</h1>
              <div class="head-border pack-hd-border"></div>
              
             <h3 class="sub-head">Package Rates:</h3>
             <?php
				$selq="select * from packages where package_type='picnic_package'";
				$sel_res=mysqli_query($conn,$selq);			
				while ($sel_row = mysqli_fetch_assoc($sel_res))
				{
					$package_rates=$sel_row['package_rates'];
			?>
            <p><?php echo $package_rates; ?></p>
			<!--<p>For Rs.700 per child(height between 4ft and 33 inches) .</p>-->
            <?php } ?>
            <h3 class="sub-head">Package Includes:</h3>
            <ul class="pack-list">
            <?php
				$selq="select * from packages where package_type='picnic_package'";
				$sel_res=mysqli_query($conn,$selq);			
				while ($sel_row = mysqli_fetch_assoc($sel_res))
				{
					$package_includes=$sel_row['package_includes'];
			?>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $package_includes; ?></li>
                <!--<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Buffet Lunch Non. Veg/Veg.</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Tea/Coffee + Cookies.</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Free usage of all Recreational Facilities.</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Unlimited rides in Water and Amusement park.</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> D.J. at the Water Park.</li>-->
             <?php } ?>   
            </ul> 
            
             <h3 class="sub-head">Following are the Recreational Facilities available at the Resort: </h3>
            <ul class="pack-list">
            <?php
				$selq="select * from packages where package_type='picnic_package' LIMIT 0,3";
				$sel_res=mysqli_query($conn,$selq);			
				while ($sel_row = mysqli_fetch_assoc($sel_res))
				{
					$other_activities=$sel_row['other_activities'];
			?>
            	<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $other_activities; ?></li>
                <!--<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <strong>Amusement Park:</strong> Disco-Disco, Break Dance, Mono Cycle, Jumping Frog, Racing Horse, Merry Go Round, Baby Train, Kids Roller Coaster, Super Trooper, Slide-Bouncy, Pirate Ship
					Play Pen, Water Falls, Dragon Train. </li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <strong>Water Park:</strong> Magic Twist, Black Tunnel, Multi Lane Slides, Wave Pool, Cyclone, Family Slides, Spiral Slide and Multi Play System H20 Dance Floor, Aqua Dance.</li>-->
            <?php } ?> 
            </ul>
				<div class="text-center">
            	<a href="contactus.php"><button type="button" class="hvr-shutter-out-vertical">BOOK NOW</button></a>
            	</div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#package4">Mini- Night Package</a>
        </h4>
      </div>
      <div id="package4" class="panel-collapse collapse <?php if (strpos($_SERVER['REQUEST_URI'], "package4") !== false) { echo $dpk= "in"; }?>">
        <div class="panel-body">
        <?php
			$selq="select * from packages where package_type='mini_night'";
			$sel_res=mysqli_query($conn,$selq);			
			$sel_row = mysqli_fetch_assoc($sel_res);				
				$heading=$sel_row['heading'];
		?>
        	<h3><i class="fa fa-hand-o-right"></i> <?php echo $heading; ?></h3>
            <div class="pack-border"></div>
            <h3 class="sub-head">Package Details:</h3>
            <ul class="pack-list">
            <?php
				$selq="select * from packages where package_type='mini_night'";
				$sel_res=mysqli_query($conn,$selq);			
				while ($sel_row = mysqli_fetch_assoc($sel_res))
				{
					$package_includes=$sel_row['package_includes'];
			?>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>  <?php echo $package_includes; ?></li>
               <!--<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Welcome Drink on Arrival</li>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Free use of all recreational facilities in the Resort</li>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Pool Side Dinner with Live D.J</li>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Next day Bed Tea and Buffet Breakfast</li>
               <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Room Check-out at 11:00 AM</li>-->
             <?php } ?>  
            </ul>
            <h3 class="color-red">Following are the Recreational Facilities available at the Resort:</h3>
            <ul class="pack-list">
            <?php
				$selq="select * from packages where package_type='mini_night'";
				$sel_res=mysqli_query($conn,$selq);			
				$sel_row = mysqli_fetch_assoc($sel_res);				
					$other_activities=$sel_row['other_activities'];
			?>
            	<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $other_activities; ?></li>           
            </ul>
            
            <div class="text-center">
            	<a href="contactus.php"><button type="button" class="hvr-shutter-out-vertical">BOOK NOW</button></a>
            </div>
        </div>
      </div>
    </div>
    
  </div>
        </div><!--col close-->
         <div class="col-md-3">
         	<div class="box-pack">
            	<a href="contactus.php"><div class="pack-box-inside">
                	<div class="title-1">Inquiry Now</div>
                </div></a>
            </div>
            
            <div class="box-pack2">
            	<a href="contactus.php">
                <?php
					$selq="select * from parties";
					$sel_res=mysqli_query($conn,$selq);			
					$sel_row = mysqli_fetch_assoc($sel_res);				
						$detail=$sel_row['detail'];
						$mobile1=$sel_row['mobile1'];
						$mobile2=$sel_row['mobile2'];
				?>
                	<h3>Plan A <br />Birthday/Kitty Parties</h3></a>
                    <p><?php echo $detail; ?></p>
                    <p>Call us!<br /><a href="tel:<?php echo $mobile1; ?>"><?php echo $mobile1; ?></a>, <a href="<?php echo $mobile2; ?>"><?php echo $mobile2; ?></a></p>
            </div>
            <div class="box-3">
            	<div class="box-3-border">
            	<h3 class="text-center">We Offer</h3>
                <div class="impx-separator light"><i class="fa fa-star"></i></div>
                <?php
					$selq="select * from offer";
					$sel_res=mysqli_query($conn,$selq);			
					$sel_row = mysqli_fetch_assoc($sel_res);				
						$offer1=$sel_row['offer1'];
						$offer2=$sel_row['offer2'];
						$offer3=$sel_row['offer3'];
						$offer4=$sel_row['offer4'];
						$offer5=$sel_row['offer5'];
				?>
                <p><?php echo $offer1; ?></p>
                <p><?php echo $offer2; ?></p>
                <p><?php echo $offer3; ?></p>
                <p><?php echo $offer4; ?></p>
                <p><?php echo $offer5; ?></p>
                </div>
            </div>
            
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
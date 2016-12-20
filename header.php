<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<?php
include 'config/conn.php';

$selq="select * from contact where id='1'";
$sel_res=mysqli_query($conn,$selq);		
$sel_row = mysqli_fetch_assoc($sel_res);			
$address=$sel_row['address'];							
$mobile1=$sel_row['mobile1'];
$mobile2=$sel_row['mobile2'];
$mobile3=$sel_row['mobile3'];							
$email1=$sel_row['email1'];
$email2=$sel_row['email2'];						
?>
<div class="top-header">
	<div class="container">
    	<div class="row">
        	<div class="col-md-3">
            	<a href="index.php"><img src="img/logo3.png" title="Club Platinum Resort" alt="Club Platinum Resort" /></a>
            </div>
            	<div class="col-md-9">
                	<div class="row pad-top-header">
                    	<div class="col-md-5  right-col-border">
                        	<div class="media"><ul class="list-inline list-top-header icon-sze"><li><i class="fa fa-phone"></i></li></ul></div>
                         	<div class="media-sec">
                            <ul class="list-top-header">
                			<li><a href="tel: <?php echo $mobile1; ?>"><?php echo $mobile1; ?></a>, <a href="tel: <?php echo $mobile2; ?>"><?php echo $mobile2; ?></a>, <a href="tel:<?php echo $mobile3; ?>"><?php echo $mobile3; ?></a></li>
                    		<li><a href="mailto:<?php echo $email1; ?>"><?php echo $email1; ?></a></li>
                            <li><a href="mailto:<?php echo $email2; ?>"><?php echo $email2; ?></a></li>
               			   </ul>
                           </div>
                         </div>  
                        
                        	<div class="col-md-4 right-col-border">
                             
                               <div class="media"><ul class="list-inline list-top-header icon-sze"><li><i class="fa fa-map-marker"></i></li></ul></div>
                            	<div class="media-sec">
                                <ul class="list-inline list-top-header icon-sze">
                					<li><a href="contactus.php"><?php echo $address; ?></a></li>
               			 		</ul>
                                </div>
                              
                            </div>
                            	<div class="col-md-3">
                                	<ul class="list-inline social">
                                    	<li><a href="#" target="_blank" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" target="_blank" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank" data-toggle="tooltip" title="google+"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="contactus.php" data-toggle="tooltip" title="Book Now">Booking</a></li>
                                    </ul>
                                   
                                </div>
                                </div>
                    </div>
                </div>
                
        </div>
    </div>
</div>

    <nav class="navbar navbar-default navbar-static-top" data-spy="affix" data-offset-top="100" id="main_navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="nav navbar-nav">
                      <li <?php if ( $page == 'index.php') {?> class="active"<?php } ?> ><a href="index.php">Club Platinum Resort</a></li>
                       <li  class="dropdown" >
                        <a href="rooms.php" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Rooms</a>
                        <ul class="dropdown-menu">
                            <li <?php if ( $page == 'conference-room.php') {?> class="active"<?php } ?>><a href="conference-room.php">Conference Room</a></li>
                             <li <?php if ( $page == 'restaurant.php') {?> class="active"<?php } ?>><a href="restaurant.php">Multi Cuisine Restaurant</a></li>
                             <li <?php if ( $page == 'banquet-hall.php') {?> class="active"<?php } ?>><a href="banquet-hall.php">Banquet Hall</a></li>
                        </ul>
                    </li>
                       <li class="dropdown" ><a href="package.php" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Packages</a>
                      <ul class="dropdown-menu">
                             <li><a href="package.php?package1">1 Night & 2 Days Package</a></li>
                             <li><a href="package.php?package2">1 Night & 2 Days Stay For Corporates</a></li>
                             <li><a href="package.php?package3">Special Mini-Holiday Package</a></li>
                             <li><a href="package.php?package4">Mini-Night Package</a></li>
                        </ul>
                      </li> 
                      <!---<li <?php if ( $page == 'tariff.php') {?> class="active"<?php } ?>><a href="tariff.php">Tariff</a></li> --->
                      <li <?php if ( $page == 'facilities.php') {?> class="active"<?php } ?>><a href="facilities.php">Facilities</a></li>
                      <li <?php if ( $page == 'gallery.php') {?> class="active"<?php } ?>><a href="gallery.php">Gallery</a></li> 
                      <li <?php if ( $page == 'online-booking.php') {?> class="active"<?php } ?>><a href="online-booking.php">Online Booking</a></li>
                      <li class="dropdown" ><a href="contactus.php" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Contact Us</a>
                      <ul class="dropdown-menu">
                             <li><a href="route-map.php">Route Map</a></li>
                        </ul>
                      </li> 
                </ul>
                <ul class="nav  navbar-right">
      <li><a href="special-offer.php"><img src="img/offer.gif" class="img-responsive" /></a></li>
    </ul>
                
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

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

$selq1="select * from footer where id='1'";
$sel_res1=mysqli_query($conn,$selq1);		
$sel_row1 = mysqli_fetch_assoc($sel_res1);			
$title1=$sel_row1['title'];
$about=$sel_row1['description'];	

$selq2="select * from footer where id='2'";
$sel_res2=mysqli_query($conn,$selq2);		
$sel_row2 = mysqli_fetch_assoc($sel_res2);			
$title2=$sel_row2['title'];
$new=$sel_row2['description'];					
?>

 <div class="img-foot">
    	<img src="img/foot.png" title="Club Platinum Resort" alt="Club Platinum Resort" class="img-responsive">
  </div>
   

<section class="footer">
	<div class="footer-overlay">
 <div class="container">
 	<div class="row font-txt">
    	<div class="col-md-3 about-foot">
        	<h3>About US</h3>
            <p><?php echo $about; ?></p>
            
        </div>
        	<div class="col-md-3 about-foot">
            	<h3>What's New</h3>
                <!--<ul class="foot-list">
                <li><a href="#">Conference Room</a></li>
                <li><a href="#">Theme Party Organisers  </a></li>
                <li><a href="#">Conference Halls Near Delhi </a></li>
                	
                </ul>-->
                <marquee behavior="alternate" scrollamount="1" direction="up" height="200px" style="height:250px;">
                <p><?php echo $new; ?> </p><br />
                </marquee> 
                
                
                
            </div>
            <div class="col-md-3">
            	<h3>Useful Links</h3>
                <ul class="foot-list">
                	<li><a href="index.php">The Club Platinum Resort</a></li>
                    <li><a href="conference-room.php">Conferences </a></li>
                    <li><a href="tariff.php">Tariff</a></li>
                    <li><a href="package.php">Summer Packages</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
            	<div class="col-md-3">
                	<h3>Contact Us</h3>
                    <div class="address">
                   		<p class="icon-map"><i class="fa fa-map-marker"></i><strong>address :</strong></p>
                        <p class="road-details"><?php echo $address; ?></p>           				
           				<p class="smal-txt"><i class="fa fa-phone"></i><strong>phone :</strong> <a href="tel: <?php echo $mobile1; ?>"><?php echo $mobile1; ?></a>, <span class="pad-fot-ic"><a href="tel: <?php echo $mobile2; ?>"><?php echo $mobile2; ?></a>, <a href="tel:<?php echo $mobile3; ?>"><?php echo $mobile3; ?></a></span></p>
           				<p class="smal-txt"><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $email1; ?>"><?php echo $email1; ?></a>, &ensp;&ensp;&ensp;<a href="mailto:<?php echo $email2; ?>"><?php echo $email2; ?></a></p>
          		    </div>
                      
              </div>
    </div>
 </div>
</div>
<div class="footer-bottom">
  <div class="container">
  	<div class="row">
      <div class="col-md-12"><h3>Popular Searches</h3></div>
    	<div class="col-md-3">
           <ul class="foot-btm-list">
           	  <li><a href="top- ten-resorts-near-delhi-ncr.php">Top Ten Resorts Near Delhi NCR</a></li>
              <li><a href="picnic-place-in-delhi-ncr.php">Picnic Place In Delhi NCR</a></li>	
              <li><a href="resort-with-conference-hall.php">Resort With Conference HALL</a></li>
           </ul>	
        </div>
        	<div class="col-md-3">
            	<ul class="foot-btm-list">
                  <li><a href="kitty-parties-place-near-delhi-ncr.php">Kitty Parties Place Near Delhi NCR</a></li>
                  <li><a href="day-packages-with-room.php">Day Packages With Room</a></li>
                  <li><a href="special-mini-holiday-package.php">Special Mini Holiday Package</a></li>	
           		</ul>
            </div>
            	<div class="col-md-3">
                    <ul class="foot-btm-list">
                      <li><a href="pool-party-lawns-in-delhi-ncr.php">Pool Party Lawns In Delhi NCR</a></li>
                      <li><a href="family-resort-in-delhi-ncr.php">Family Resort In Delhi NCR</a></li>	
                      <li><a href="conference-room-in-delhi-ncr.php">Conference Room In Delhi NCR</a></li>
                    </ul>
            	</div>
                <div class="col-md-3">
                    <ul class="foot-btm-list">
                      <li><a href="luxury-resorts-in-delhi-ncr.php">Luxury Resorts In Delhi NCR</a></li>
                    </ul>
            	</div>
    </div>
     
    
    	<div class="row">
        	<div class="col-md-9">
            	<p>Copyright © 2016 Club Platinum Resort. All rights reserved | Designed & Developed By <a href="http://www.infosindia.com/" target="_blank">InfosIndia.</a></p>
            </div>
            <div class="col-md-3">
            	
              </div>
            </div>
  </div>
</div>
</section>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5795edde0e63b04e4ae5bcc6/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



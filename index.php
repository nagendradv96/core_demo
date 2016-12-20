<?php
include 'config/conn.php';
$path="img/";	
$rmpath="img/accomodation/";
$waterpath="img/offers/slid/";
$assumentpath="img/assument/";
$conferencepath="img/confrence/";
$activitypath="img/activites/";
$celebrationpath="img/celebration/";

if(isset($_POST['submit']))

{

$name=$_REQUEST['name'];
$mail=$_REQUEST['mail'];
$phone=$_REQUEST['phone'];
$message=$_REQUEST['msg'];


 $msg .="Quick Inquiry  http://www.clubplatinumresort.com/<br>";  

		    $msg .="<b>Name: </b>" . $name. "<br>";
			$msg .="<b>E-mail Address: </b>" .$mail. "<br>";
			$msg .="<b>Mobile Number: </b>" .$phone. "<br>";
			$msg .="<b>Requirement Detail: </b>" .$message. "<br>";

			

			$sub="Quick Inquiry clubplatinumresort.com";
	                $from=$email;

	                $to="info@clubplatinumresort.com";



                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                        $headers .= 'From:'.$email . "\r\n" .
                        'Reply-To:' . "\r\n" .
                        'X-Mailer: PHP/'.phpversion();
                       $mail= mail($to,$sub,$msg,$headers);

if($mail)

{

?>

<script>

alert("Thank you . Your Enquiry Is Submited");
window.location.href ='index.php';

</script>

<?php

}

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="XpC7hZr3msonST5-FMnIupvBvVXmvsMtE_8lbHWe-SA" />
<title>Club Platinum Resort | Amusement Park | Water Park In Delhi Ncr</title>
<meta name="description" content="Enjoy a fun-packed day out with friends, kids and family at Club Platinum Resort – Water Park, Amusement Park and Resort in Delhi NCR, Noida, Gurgaon."/>
<meta name="keywords" content="Resort, Amusement, Water Park"/>
<meta name="author" content="Club Platinum Resort"/>
<meta name="robots" content="ALL"/>
<meta name="robots" content="index, follow" />
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
  <?php
		$selq="select * from banner where id='3'";
		$sel_res=mysqli_query($conn,$selq);		
		$sel_row = mysqli_fetch_assoc($sel_res);			
		$image=$sel_row['image'];							
	?>
  
    <div class="item active">
      <img src="<?php echo $path.$image; ?>" >      
    </div> 
  
  <?php
		$selq="select * from banner where id !='3'";
		$sel_res=mysqli_query($conn,$selq);
		while ($sel_row = mysqli_fetch_assoc($sel_res))
		{			
		$image=$sel_row['image'];							
	?>
    <div class="item">
     <img src="<?php echo $path.$image; ?>" >      
    </div>
	<?php } ?>
    <!--<div class="item">
       <img src="img/banner1.jpg" >      
    </div>-->
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left fa fa-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right fa fa-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<section class="resort">
  <div class="container ">
  	<div class="row pad-top wel">
    	<div class="col-md-9">
        <?php
			$selq="select * from about";
			$sel_res=mysqli_query($conn,$selq);		
			$sel_row = mysqli_fetch_assoc($sel_res);			
			$title=$sel_row['title'];
			$desc=$sel_row['description'];							
		?>
        	<h1><?php echo $title; ?></h1>
            <div class="head-border"></div>
            <p><?php echo $desc; ?> </p>

        <div class=" accomodation">
 		
        <?php
			$selq="select * from room where id='1'";
			$sel_res=mysqli_query($conn,$selq);		
			$sel_row = mysqli_fetch_assoc($sel_res);
			$title=$sel_row['title'];
			$desc=$sel_row['description'];			
			$image=$sel_row['image'];							
		?>
        
    	<div class="col-md-6">
         <div class="box-1">
         	<h3><?php echo $title; ?></h3>
        	<div class="hover01 column ">
              <figure>
                <a href="<?php echo $rmpath.$image; ?>" data-lightbox="1"> <img src="<?php echo $rmpath.$image; ?>" title="Top ten resorts near Delhi NCR" alt="Top ten resorts near Delhi NCR" class="img-responsive" /></a>
              </figure>
        	</div>
             <p><?php echo $desc; ?></p><br />
             <p><a href="rooms.php"><button type="button" class="detail-btn">View Details</button></a></p>
         </div>	
        </div>
        	<!--<div class="col-md-3">
            	<img src="img/accomodation/guest.jpg" class="img-responsive" />
                <h3>Guest Room</h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis viverra diam ac ornare. </p>
             <a href="#"><p class="detain-btn">Detail</p></a>
                
            </div>
            	<div class="col-md-3">
                	<img src="img/accomodation/ac.jpg" class="img-responsive" />
                    <h3>AC Deluxe Room</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis viverra diam ac ornare. </p>
            		 <a href="#"><p class="detain-btn">Detail</p></a>
                </div>-->
                <?php
					$selq="select * from room where id='2'";
					$sel_res=mysqli_query($conn,$selq);		
					$sel_row = mysqli_fetch_assoc($sel_res);
					$title=$sel_row['title'];
					$desc=$sel_row['description'];			
					$image=$sel_row['image'];							
				?>
                	<div class="col-md-6">
                     <div class="box-1 box-2 ">
                        <h3><?php echo $title; ?></h3>
                        <div class="hover01 column ">
                          <figure>
                            <a href="<?php echo $rmpath.$image; ?>" data-lightbox="1"> <img src="<?php echo $rmpath.$image; ?>" title="Resort with conference Hall" alt="Resort with conference Hall" class="img-responsive" /></a>
                          </figure>
                        </div>
                         <p><?php echo $desc; ?></p>
                         <p><a href="rooms.php"><button type="button" class="detail-btn color-btn">View Details</button></a></p>
                     </div>	
        		</div>  
              
    </div>
    </div>
        	<div class="col-md-3">
            	<div class="quick-enquiry">
                	<h3>Quick Inquiry</h3>
                	<form class="form-role" method="post">
              <div class="row">
                <div class="col-sm-12 pad-btm-frm">
                  <input class="form-control form-height" type="text" name="name" required placeholder="name">
                </div>
                <div class="col-sm-12 pad-btm-frm">
                  <input class="form-control form-height" type="tel" name="phone" required placeholder="phone">
                </div>
               </div>
               <div class="row "> 
                <div class="col-sm-12 pad-btm-frm">
                  <input class="form-control form-height" type="email" name="mail" required placeholder="e-mail">
                </div>
               </div>
                
                <div class="row">
                <div class="col-sm-12 pad-btm-frm">
                  <textarea class="form-control" rows="3" name="msg" required placeholder="requirement details"></textarea>
                </div>
                </div>
                <button class="hvr-rectangle-out" name="submit">SUBMIT</button>
            </form>
                </div>
            </div>
            <div class="col-md-3 pad-side" >
            	<a href="contactus.php"><img src="img/side-ban.jpg" title="Kitty Parties place near Delhi NCR" alt="Kitty Parties place near Delhi NCR" class="img-responsive" /></a>
            </div>
             <div class="col-md-3 pad-side">
             	<a href="contactus.php"><img src="img/side2.gif" class="img-responsive" /></a>
             </div>
            
            
    </div>
    
  </div>
</section>

<section id="events" class="section-padding reservation">
  <div class="container">
   <div class="row">
    
    <div class="col-sm-12 col-xs-12">
      <div id="reservation-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#reservation-slider" data-slide-to="0" class="active"></li>
          <li data-target="#reservation-slider" data-slide-to="1"></li>
          <li data-target="#reservation-slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
          <div class="col-xs-12 ">
      <h1>Water Park</h1>
      <p class="slogan">Just try once and believe it is going to be real memorable one</p>
    </div>
            <div class="left-images">
             <img src="img/slide1.jpg" title="Day packages with room" alt="Day packages with room" >
           </div>
           <div class="details-text">
            <div class="content-holder">
              <h2><a href="#">Water Park</a></h2>
              <P>Magic Twist, Black Tunnel, Multi Lane Slides, Wave Pool Cyclone, Family Slides, Spiral Slide, Multi Play System, h40 Dance Floor, Aqua Dance.</P>
              <a class="btn hvr-back-pulse" href="contactus.php">Get Any Inquiry</a>
            </div>
          </div>
        </div> <!-- item -->
        <div class="item">
        <div class="col-xs-12 ">
      <h1>Assument Park</h1>
      <p class="slogan">Just try once and believe it is going to be real memorable one</p>
    </div>
          <div class="left-images">
          <img src="img/slide2.jpg" title="Special mini holiday package" alt="Special mini holiday package" >
         </div>
         <div class="details-text">
          <div class="content-holder">
            <h2><a href="#">Assument Park</a></h2>
            <P> Unlimited Rides >> Disco-Disco, Break Dance, Mono Cycle, Jumping Frog, Racing Horse, Merry Go Round, Baby Train, Kids Roller Coaster, Super Trooper, Slide-Bouncy, Pirate Ship, PlayPen, water Falls</P>
            
            <a class="btn hvr-back-pulse" href="contactus.php">Get Any Inquiry</a>
          </div>
        </div>
      </div> <!-- item -->
      <div class="item">
      <div class="col-xs-12 ">
      <h1>Picnic</h1>
      <p class="slogan">Just try once and believe it is going to be real memorable one</p>
    </div>
        <div class="left-images">
        <img src="img/slide3.jpg" title="Pool party lawns in Delhi NCR" alt="Pool party lawns in Delhi NCR" >
       </div>
       <div class="details-text">
        <div class="content-holder">
          <h2><a href="#">Picnic</a></h2>
          <P>Billiard's/Snooker, Table Tennis, Badminton, Soft Ball Cricket, Dart Board, Tambola Board, Chess, Musical Chairs, Tug of war, Matka Phod, Rain Dance.</P>
         
          <a class="btn hvr-back-pulse" href="contactus.php">Get Any Inquiry</a>
        </div>
      </div>
    </div> <!-- item -->
  </div> <!-- carousel-inner -->
</div> <!-- carousel -->
</div> <!-- col-sm-12 -->
</div> <!-- row -->
</div> <!-- container -->
</section>

<section class="service-tab">
 <div class="container">
 	<div class="row pad-top">
    	<div class="col-md-12 text-center">
        	<h1>The Platinum Resort Offers You</h1>
        </div>
        <div class="col-md-12">
        	<div class="text-center">
        	<ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">Water Park Slides</a></li>
              <li><a data-toggle="tab" href="#menu1">Amusement Park</a></li>
              <li><a data-toggle="tab" href="#menu2">Food and Dining</a></li>
               <li><a data-toggle="tab" href="#menu3">Conference and Banquet Hall</a></li>
                <li><a data-toggle="tab" href="#menu4">Activities</a></li>
                 <li><a data-toggle="tab" href="#menu5">Celebrations</a></li>
            </ul>
            </div>
           <div class="panel-group visible-xs" id="myTab-accordion"></div>
        <div class="tab-content">
  		<div id="home" class="tab-pane fade in active">
           		<div class="row pad-top tab-txt">
                	<div class="col-md-12">
                		<h2>Water Park Slides</h2>
                         <div class="head-border"></div>
                     </div>   
                     
                     <?php
						$selq="select * from gallery where category ='water_park' LIMIT 4";
						$sel_res=mysqli_query($conn,$selq);
						while ($sel_row = mysqli_fetch_assoc($sel_res))
						{			
						$image=$sel_row['image'];							
						$title=$sel_row['title'];
					?>
                     
                	<div class="col-md-3">
                    	<div class="bac-mg">
                        <div class="hover01 column">
                			<figure>
                            <a href="<?php echo $waterpath.$image; ?>" data-lightbox="1"> <img src="<?php echo $waterpath.$image; ?>" title="Family Resort in Delhi NCR" alt="Family Resort in Delhi NCR" class="img-responsive" /></a>
                            </figure>
                    	</div>
                        	<a href="#"><h3 class="text-center"><?php echo $title; ?></h3></a>
                        </div>
                    </div>
                    <?php } ?>
                    	<!--<div class="col-md-3">
                        	<div class="bac-mg">
                        	<div class="hover01 column">
                			<figure>
                            <a href="img/offers/slid/s2.jpg" data-lightbox="1"> <img src="img/offers/slid/s2.jpg" title="Conference Room in Delhi NCR" alt="Conference Room in Delhi NCR" class="img-responsive" /></a>
                            </figure>
                    		</div>
                            <a href="#"><h3 class="text-center">Tornedo</h3></a>
                            </div>
                        </div>
                        	<div class="col-md-3">
                            	<div class="bac-mg">
                            	<div class="hover01 column">
                                <figure>
                                <a href="img/offers/slid/s3.jpg" data-lightbox="1"> <img src="img/offers/slid/s3.jpg" title="Luxury Resort in Delhi NCR" alt="Luxury Resort in Delhi NCR" class="img-responsive" /></a>
                                </figure>
                               </div>
                                <a href="#"><h3 class="text-center">Black Hole</h3></a>
                               </div>
                            </div>
                            <div class="col-md-3">
                            	<div class="bac-mg">
                            	<div class="hover01 column">
                                <figure>
                                <a href="img/offers/slid/s4.jpg" data-lightbox="1"> <img src="img/offers/slid/s4.jpg" title="Picnic Place in Delhi NCR" alt="Picnic Place in Delhi NCR" class="img-responsive" /></a>
                                </figure>
                               </div>
                                <a href="#"><h3 class="text-center">Magic Twist</h3></a>
                               </div>
                            </div>-->
                </div>
              </div>
              <div id="menu1" class="tab-pane fade">
               <div class="row pad-top tab-txt">
                	<div class="col-md-12">
                		<h2>Assument Rides</h2>
                         <div class="head-border"></div>
                     </div>  
                     <?php
						$selq="select * from gallery where category ='amusement_park' LIMIT 4";
						$sel_res=mysqli_query($conn,$selq);
						while ($sel_row = mysqli_fetch_assoc($sel_res))
						{			
						$image=$sel_row['image'];							
						$title=$sel_row['title'];
					?> 
                	<div class="col-md-3 col-sm-6">
                    	<div class="bac-mg">
                        <div class="hover01 column">
                			<figure>
                            <a href="<?php echo $assumentpath.$image; ?>" data-lightbox="1"> <img src="<?php echo $assumentpath.$image; ?>" class="img-responsive" /></a>
                            </figure>
                    	</div>
                        	<a href="#"><h3 class="text-center"><?php echo $title; ?></h3></a>
                        </div>
                    </div>
                     <?php } ?>
                    	<!--<div class="col-md-3 col-sm-6">
                        	<div class="bac-mg">
                        	<div class="hover01 column">
                			<figure>
                            <a href="img/assument/a2.jpg" data-lightbox="1"> <img src="img/assument/a2.jpg" class="img-responsive" /></a>
                            </figure>
                    		</div>
                            <a href="#"><h3 class="text-center">Santa Clause Ride</h3></a>
                            </div>
                        </div>
                        	<div class="col-md-3 col-sm-6">
                            	<div class="bac-mg">
                            	<div class="hover01 column">
                                <figure>
                                <a href="img/assument/a3.jpg" data-lightbox="1"> <img src="img/assument/a3.jpg" class="img-responsive" /></a>
                                </figure>
                               </div>
                                <a href="#"><h3 class="text-center">Punjab Express</h3></a>
                               </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                            	<div class="bac-mg">
                            	<div class="hover01 column">
                                <figure>
                               <a href="img/assument/a4.jpg" data-lightbox="1"> <img src="img/assument/a4.jpg" class="img-responsive" /></a>
                                </figure>
                               </div>
                                <a href="#"><h3 class="text-center">Mini-Jumbo Jet</h3></a>
                               </div>
                            </div>-->
                </div>
              </div>
              <div id="menu2" class="tab-pane fade">
               <div class="row pad-top tab-txt">
                	<div class="col-md-12">
                		<h2>Food and Dining</h2>
                         <div class="head-border"></div>
                     </div>   
                	<div class="col-md-3">
                    	<div class="bac-mg">
                        <div class="hover01 column">
                			<figure>
                            <a href="img/offers/slid/s1.jpg" data-lightbox="1"> <img src="img/restaurant.jpg" class="img-responsive" /></a>
                            </figure>
                    	</div>
                        	<a href="#"><h3 class="text-center">Restaurent</h3></a>
                        </div>
                    </div>
                    	<div class="col-md-3">
                        	
                        </div>
                        	<div class="col-md-3">
                            	
                            </div>
                            <div class="col-md-3">
                            	
                            </div>
                </div>
              </div>
              <div id="menu3" class="tab-pane fade">
               <div class="row pad-top tab-txt">
                	<div class="col-md-12">
                		<h2>Conference and Banquet Hall</h2>
                         <div class="head-border"></div>
                     </div>   
                      <?php
						$selq="select * from gallery where category ='confrence' LIMIT 4";
						$sel_res=mysqli_query($conn,$selq);
						while ($sel_row = mysqli_fetch_assoc($sel_res))
						{			
						$image=$sel_row['image'];							
						$title=$sel_row['title'];
					?> 
                	<div class="col-md-3">
                    	<div class="bac-mg">
                        <div class="hover01 column">
                			<figure>
                            <a href="<?php echo $conferencepath.$image; ?>" data-lightbox="1"> <img src="<?php echo $conferencepath.$image; ?>" title="Resort with conference Hall" alt="Resort with conference Hall" class="img-responsive" /></a>
                            </figure>
                    	</div>
                        	<a href="conference-room.php"><h3 class="text-center"><?php echo $title; ?></h3></a>
                        </div>
                    </div>
                    <?php } ?>
                    	<!--<div class="col-md-3">
                        	<div class="bac-mg">
                        	<div class="hover01 column">
                			<figure>
                            <a href="img/confrence/c2.jpg" data-lightbox="1"> <img src="img/confrence/c2.jpg" class="img-responsive"/></a>
                            </figure>
                    		</div>
                            <a href="banquet-hall.php"><h3 class="text-center">Engagement Ceremony at Banquet Hall</h3></a>
                            </div>
                        </div>
                        	<div class="col-md-3">
                            	<div class="bac-mg">
                            	<div class="hover01 column">
                                <figure>
                               <a href="img/confrence/c3.jpg" data-lightbox="1"> <img src="img/confrence/c3.jpg" class="img-responsive" /></a>
                                </figure>
                               </div>
                                <a href="banquet-hall.php"><h3 class="text-center">Banquet Hall</h3></a>
                               </div>
                            </div>
                            <div class="col-md-3">
                            	<div class="bac-mg">
                            	<div class="hover01 column">
                                <figure>
                                <a href="img/confrence/c4.jpg" data-lightbox="1"> <img src="img/confrence/c4.jpg" class="img-responsive" /></a>
                                </figure>
                               </div>
                                <a href="conference-room.php"><h3 class="text-center">U SHAPE CONFERENCE HALL</h3></a>
                               </div>
                            </div>-->
                </div>
              </div>
              <div id="menu4" class="tab-pane fade">
               <div class="row pad-top tab-txt">
                	<div class="col-md-12">
                		<h2>Activities</h2>
                         <div class="head-border"></div>
                     </div>   
                     <?php
						$selq="select * from gallery where category LIKE '%activities%' LIMIT 4";
						$sel_res=mysqli_query($conn,$selq);
						while ($sel_row = mysqli_fetch_assoc($sel_res))
						{			
						$image=$sel_row['image'];							
						$title=$sel_row['title'];
					?>
                	<div class="col-md-3">
                    	<div class="bac-mg">
                        <div class="hover01 column">
                			<figure>
                           <a href="<?php echo $activitypath.$image; ?>" data-lightbox="1"> <img src="<?php echo $activitypath.$image; ?>" class="img-responsive" /></a>
                            </figure>
                    	</div>
                        	<a href="#"><h3 class="text-center"><?php echo $title; ?></h3></a>
                        </div>
                    </div>
                    <?php } ?>
                    	<!--<div class="col-md-3">
                        	<div class="bac-mg">
                        	<div class="hover01 column">
                			<figure>
                            <a href="img/activites/a2.jpg" data-lightbox="1"> <img src="img/activites/a2.jpg" class="img-responsive" /></a>
                            </figure>
                    		</div>
                            <a href="#"><h3 class="text-center">POOL TABLE</h3></a>
                            </div>
                        </div>
                        	<div class="col-md-3">
                            	<div class="bac-mg">
                            	<div class="hover01 column">
                                <figure>
                                <a href="img/activites/a3.jpg" data-lightbox="1"> <img src="img/activites/a3.jpg" class="img-responsive" /></a>
                                </figure>
                               </div>
                                <a href="#"><h3 class="text-center">TABLE TENNIS</h3></a>
                               </div>
                            </div>
                            <div class="col-md-3">
                            	<div class="bac-mg">
                            	<div class="hover01 column">
                                <figure>
                                <a href="img/activites/a4.jpg" data-lightbox="1"> <img src="img/activites/a4.jpg" class="img-responsive" /></a>
                                </figure>
                               </div>
                                <a href="#"><h3 class="text-center">CRICKET</h3></a>
                               </div>
                            </div>-->
                </div>
              </div>
              <div id="menu5" class="tab-pane fade">
               <div class="row pad-top tab-txt">
                	<div class="col-md-12">
                		<h2>Celebrations</h2>
                         <div class="head-border"></div>
                     </div>   
                     <?php
						$selq="select * from gallery where category ='celebration' LIMIT 4";
						$sel_res=mysqli_query($conn,$selq);
						while ($sel_row = mysqli_fetch_assoc($sel_res))
						{			
						$image=$sel_row['image'];							
						$title=$sel_row['title'];
					?>
                	<div class="col-md-3">
                    	<div class="bac-mg">
                        <div class="hover01 column">
                			<figure>
                             <a href="<?php echo $celebrationpath.$image; ?>" data-lightbox="1"> <img src="<?php echo $celebrationpath.$image; ?>" class="img-responsive" /></a>
                            </figure>
                    	</div>
                        	<a href="#"><h3 class="text-center"><?php echo $title; ?></h3></a>
                        </div>
                    </div>
                    <?php } ?>
                    
                    	<!--<div class="col-md-3">
                        	<div class="bac-mg">
                        	<div class="hover01 column">
                			<figure>
                            <a href="img/celebration/c2.jpg" data-lightbox="1"> <img src="img/celebration/c2.jpg" class="img-responsive" /></a>
                            </figure>
                    		</div>
                            <a href="#"><h3 class="text-center">New Year Party Celebration</h3></a>
                            </div>
                        </div>
                        	<div class="col-md-3">
                            	<div class="bac-mg">
                            	<div class="hover01 column">
                                <figure>
                                 <a href="img/celebration/c3.jpg" data-lightbox="1"> <img src="img/celebration/c3.jpg" class="img-responsive" /></a>
                                </figure>
                               </div>
                                <a href="#"><h3 class="text-center">New Year Party Celebration</h3></a>
                               </div>
                            </div>
                            <div class="col-md-3">
                            	<div class="bac-mg">
                            	<div class="hover01 column">
                                <figure>
                                <a href="img/celebration/c4.jpg" data-lightbox="1"> <img src="img/celebration/c4.jpg" class="img-responsive" /></a>
                                </figure>
                               </div>
                                <a href="#"><h3 class="text-center">Holi Celebration</h3></a>
                               </div>
                            </div>-->
                </div>
              </div>
            </div>
        </div>
    </div>
 </div>
</section>

<!----<section class="wel-content">
 <div class="container pad-top">
 	<div class="row">
    	<div class="col-md-4 column-margin">
        	<div class="grid">
        	<figure class="effect-julia">
				<img src="img/water-park.jpg" class="img-responsive" />
				<figcaption>
					<h2>Water <span>Park</span></h2>
					<div class="text-right bok-txt"><a href="#"><h2 class="hvr-rectangle-out">Book Now</h2></a></div>
				 </figcaption>			
			  </figure>
              </div>    
        
        </div>
        	<div class="col-md-4 column-margin">
            	<div class="grid">
        	<figure class="effect-julia">
				<img src="img/assument-park.jpg" class="img-responsive" />
				<figcaption>
					<h2>Assument <span>Park</span></h2>
					
					<div class="text-right bok-txt"><a href="#"><h2 class="hvr-rectangle-out">Book Now</h2></a></div>		
				 </figcaption>			
			  </figure>
              </div>
            </div>
            <div class="col-md-4 column-margin">
            	<div class="grid">
        	<figure class="effect-julia">
				<img src="img/assument-park.jpg" class="img-responsive" />
				<figcaption>
					<h2><span>Picnics</span></h2>
					
						<div class="text-right bok-txt"><a href="#"><h2 class="hvr-rectangle-out">Book Now</h2></a></div>
				 </figcaption>			
			  </figure>
              </div>
            </div>
            	
                
    </div>
    <div class="row">
    	<div class="col-md-4 column-margin">
        	<div class="grid">
        	<figure class="effect-julia">
				<img src="img/water-park.jpg" class="img-responsive" />
				<figcaption>
					<h2>Birthday<span> Parties</span></h2>
					
						<div class="text-right bok-txt"><a href="#"><h2 class="hvr-rectangle-out">Book Now</h2></a></div>
				 </figcaption>			
			  </figure>
              </div>    
        
        </div>
        	<div class="col-md-4 column-margin">
            	<div class="grid">
        	<figure class="effect-julia">
				<img src="img/assument-park.jpg" class="img-responsive" />
				<figcaption>
					<h2>Wedding  <span>Party</span></h2>
					
						<div class="text-right bok-txt"><a href="#"><h2 class="hvr-rectangle-out">Book Now</h2></a></div>
				 </figcaption>			
			  </figure>
              </div>
            </div>
            <div class="col-md-4 column-margin">
            	<div class="grid">
        	<figure class="effect-julia">
				<img src="img/assument-park.jpg" class="img-responsive" />
				<figcaption>
					<h2><span>Games</span></h2>
					
						<div class="text-right bok-txt"><a href="#"><h2 class="hvr-rectangle-out">Book Now</h2></a></div>
				 </figcaption>			
			  </figure>
              </div>
            </div>
            	
                
    </div>
 </div>
</section>-->
<!---<section class="home-gallery">
 <div class="container">
    <div class="row">
    	<div class="col-md-12">
        <h1>gallery</h1>
        <p class="slogan">best quality wine available</p>
      </div>
      	 <div class="row">
       		<div class="col-md-6">
            	<img src="img/gallery/g1.jpg" class="img-responsive">
            </div>
            	<div class="col-md-3">
                	<img src="img/gallery/g2.jpg" class="img-responsive">
                </div>
                	<div class="col-md-3">
                    	<img src="img/gallery/g3.jpg" class="img-responsive">
                    </div>
         </div>   
    </div>
  </div>  
</section>-->

<!--<section class="review-col">
	<div class="container">
	<div class="row">
		<h2>Whats New</h2>
	</div>
</div>
<div class="carousel-reviews broun-block">
    <div class="container">
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
            
                <div class="carousel-inner">
                    <div class="item active">
                	    <div class="col-md-4 col-sm-6">
        				    <div class="block-text rel zmin">
						        <a title="" href="#">Rooms with new interior and washrooms with latest fittings</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>The Club Platinum has renovated its Rooms by changing Flooring,ceiling and... more Sample Heading one Resort is also suitable for Corporate and Companies who are willing to have...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel">
				               <img src=""/>
								<a title="" href="#">Anna</a>
								<i>from Glasgow, Scotland</i>
							</div>
						</div>
            			<div class="col-md-4 col-sm-6 hidden-xs">
						    <div class="block-text rel zmin">
						        <a title="" href="#">Sample Heading one</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
        						<p>Resort is also suitable for Corporate and Companies who are willing to have..</p>
					            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				            </div>
							<div class="person-text rel">
				                <img src=""/>
						        <a title="" href="#">Ella Mentree</a>
								<i>United States</i>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
							<div class="block-text rel zmin">
								<a title="" href="#">Club Platinum Resort</a>
								<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
    							<p>The Club Platinum Resort has been renovated.The rooms have been refurbished..</p>
								<ins class="ab zmin sprite sprite-i-triangle block"></ins>
							</div>
							<div class="person-text rel">
                            		 <img src=""/>
									<a title="" href="#">Rannynm</a>
								<i>Indonesia</i>
							</div>
						</div>
                    </div>
                    
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
        				    <div class="block-text rel zmin">
						        <a title="" href="#">Hercules</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Never before has there been a good film portrayal of ancient Greece's favourite myth. So why would Hollywood start now? This latest attempt at bringing the son of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett Ratner. If the name of the director wasn't enough to dissuade ...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel">
								<img alt="" src="http://myinstantcms.ru/images/img13.png">
								<a title="" href="#">Anna</a>
								<i>from Glasgow, Scotland</i>
							</div>
						</div>
            			<div class="col-md-4 col-sm-6 hidden-xs">
						    <div class="block-text rel zmin">
						        <a title="" href="#">The Purge: Anarchy</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
        						<p>The 2013 movie "The Purge" left a bad taste in all of our mouths as nothing more than a pseudo-slasher with a hamfisted plot, poor pacing, and a desperate attempt at "horror." Upon seeing the first trailer for "The Purge: Anarchy," my first and most immediate thought was "we really don't need another one of these."  </p>
					            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				            </div>
							<div class="person-text rel">
								<img alt="" src="http://myinstantcms.ru/images/img14.png">
						        <a title="" href="#">Ella Mentree</a>
								<i>United States</i>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
							<div class="block-text rel zmin">
								<a title="" href="#">Planes: Fire & Rescue</a>
								<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
    							<p>What a funny and entertaining film! I did not know what to expect, this is the fourth film in this vehicle's universe with the two Cars movies and then the first Planes movie. I was wondering if maybe Disney pushed it a little bit. However, Planes: Fire and Rescue is an entertaining film that is a fantastic sequel in this magical franchise. </p>
								<ins class="ab zmin sprite sprite-i-triangle block"></ins>
							</div>
							<div class="person-text rel">
								<img alt="" src="http://myinstantcms.ru/images/img15.png">
								<a title="" href="#">Rannynm</a>
								<i>Indonesia</i>
							</div>
						</div>
                    </div>                    
                </div>
                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>
</section>--> 
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
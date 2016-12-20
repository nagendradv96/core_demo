<?php

if(isset($_POST['submit']))

{

$name=$_REQUEST['name'];
$mail=$_REQUEST['mail'];
$phone=$_REQUEST['phone'];
$subject=$_REQUEST['subj'];
$message=$_REQUEST['msg'];


 $msg .="Contact Us  http://www.clubplatinumresort.com/<br>";  

		    $msg .="<b>Name: </b>" . $name. "<br>";
			$msg .="<b>E-mail Address : </b>" .$mail. "<br>";
			$msg .="<b>Mobile Number: </b>" .$phone. "<br>";
			$msg .="<b>Subject : </b>" .$subject. "<br>";
			$msg .="<b>Requirement Detail: </b>" .$message. "<br>";

			

			$sub="Contact Us clubplatinumresort.com";
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
$corp_address=$sel_row['corp_address'];
$corp_mobile1=$sel_row['corp_mobile1'];	
$corp_mobile2=$sel_row['corp_mobile2'];	
$contact_person=$sel_row['contact_person'];				
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Club Platinum Resort</title>
<meta name="description" content="Club Platinum Resort"/>
<meta name="keywords" content="Club Platinum Resort"/>
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
<section class="inner-banner">
 <div class="inner-ban-overlay">
  <div class="container">
  	<div class="row">
    	<div class="col-md-12 ">
        	<h1>get in touch</h1>
            <p>The Platinum Resort cum Funtown Amusement & Water Park</p>
        </div>
    </div>
  </div>
 </div> 
</section>

<section class="contact">
 <div class="container">
 	<div class="row ro-back">
      <div class="col-md-8">
      	<h1>SEND A INQUIRY</h1>
        <div class="head-border mar-btm-border"></div>
      	<form class="form-role" method="post">
        	<p class="name"><input type="name" name="name" required placeholder="Your Name"  class="form-control" /> <i class="fa fa-user"></i></p>
            <p class="mail"><input type="email" name="mail" required placeholder="E-mail" class="form-control" /> <i class="fa fa-envelope"></i></p>
            <p class="mobile"><input type="tel" name="phone" required placeholder="Mobile No." class="form-control" /> <i class="fa fa-phone"></i></p>
            <p class="com"><input type="text" name="subj" required placeholder="subject" class="form-control" /> <i class="fa fa-comments"></i></p>
            <p><textarea class="form-control" rows="3" name="msg" placeholder="requirement details"></textarea></p>
             <button class="hvr-rectangle-out" name="submit">Send Now</button>
        </form>
        <div class="map-sec">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3498.5565031107117!2d76.8480328141354!3d28.732797186288764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0aea5fa07a4f%3A0xed6d314e6cc5269e!2sClub+Platinum+Resort!5e0!3m2!1sen!2sin!4v1467457306394" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      	</div>
      </div>
        <div class="col-md-4">
        	<h1>Get in Touch</h1>
            <div class="head-border mar-btm-border"></div>
            <div class="ful-add">
                <div class="add-icn">
                    <p><i class="fa fa-home"></i></p>
                </div>
                <div class="add-detail">
                    <P><?php echo $address; ?></p> 
                </div>
            </div>
               <div class="ful-add">
                    <div class="add-icn mob-ic">
                        <p><i class="fa fa-mobile"></i></p>
                    </div>
                    <div class="add-detail">
                       <P><a href="tel: <?php echo $mobile1; ?>"><?php echo $mobile1; ?></a>, <a href="tel: <?php echo $mobile2; ?>"><?php echo $mobile2; ?></a>, 
                       <br /><a href="tel:<?php echo $mobile3; ?>"><?php echo $mobile3; ?></a> </p> 
                    </div>
                </div>
                <div class="ful-add">
                    <div class="add-icn">
                        <p><i class="fa fa-envelope"></i></p>
                    </div>
                    <div class="add-detail">
                       <P><a href="mailto:<?php echo $email1; ?>"><?php echo $email1; ?></a></p> 
                    </div>
                </div>
           <div class="col-md-12 phr-sze">
        	<h1 class="size-cont">Corporate Sales Office</h1>
            <div class="head-border "></div>
            
                <div class="ful-add">
                <div class="add-icn">
                    <p><i class="fa fa-home"></i></p>
                </div>
                <div class="add-detail">
                    <p><?php echo $corp_address; ?></p>
                </div>
            </div>   
                        
                <div class="ful-add">
                    <div class="add-icn mob-ic">
                        <p><i class="fa fa-mobile"></i></p>
                    </div>         
              <div class="add-detail">
                       <P><a href="tel: <?php echo $corp_mobile1; ?>"><?php echo $corp_mobile1; ?></a>, <a href="tel: <?php echo $corp_mobile2; ?>"><?php echo $corp_mobile2; ?></a>, </P>
              </div> 
        </div>   
        <div class="ful-add">
                <div class="add-icn">
                    <p><i class="fa fa-user"></i></p>
                </div>
                <div class="add-detail">
                    <p>GM-Sales & Marketing</p>
                      <p><?php echo $contact_person; ?></p>
                        
                </div>
            </div>  
         <div class="col-md-12 phr-sze">
        	<h1 class="size-cont">Account Details:</h1>
            <div class="head-border "></div>
            <p><strong>Account Name:</strong> U.V Resorts & Recreation L L P</p>
            <p><strong>A/C No.:</strong> 50200004131334</p>
            <p><strong>Bank Name:</strong> H.D.F.C</p>
            <p><strong>IFSC Code:</strong> HDFC0000325</p>
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
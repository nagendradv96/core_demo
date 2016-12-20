<?php

if(isset($_POST['submit']))

{

$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$code=$_REQUEST['code'];
$state=$_REQUEST['state'];
$mail=$_REQUEST['mail'];
$phone=$_REQUEST['phone'];
$arrival=$_REQUEST['date'];
$departure=$_REQUEST['date1'];


 $msg .="Online Booking  http://www.clubplatinumresort.com/<br>";  

		    $msg .="<b>Name : </b>" . $name. "<br>";
			$msg .="<b>Address : </b>" . $address. "<br>";
			$msg .="<b>City : </b>" . $city. "<br>";
			$msg .="<b>Postal Code : </b>" . $code. "<br>";
			$msg .="<b>State : </b>" . $state. "<br>";
			$msg .="<b>Mobile Number : </b>" .$phone. "<br>";
			$msg .="<b>E-mail Address : </b>" .$mail. "<br>";
			$msg .="<b>Checki-in-date : </b>" .$arrival. "<br>";
			$msg .="<b>Check-out-date : </b>" .$departure. "<br>";

			

			$sub="Online Booking  http://www.clubplatinumresort.com/";
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

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>

<body class="bg-color">
<div class="wrapper">
<?php include"header.php";?>
<section class="inner-banner">
 <div class="inner-ban-overlay">
  <div class="container">
  	<div class="row">
    	<div class="col-md-12 ">
        	<h1>Online Booking</h1>
        </div>
    </div>
  </div>
 </div> 
</section>

<section class="contact">
 <div class="container">
 	<div class="row ro-back">
      <div class="col-md-7">
      	<h1>Online Booking</h1>
        <div class="head-border mar-btm-border"></div>
         <img src="img/call-3.gif" class="img-responsive">
      	<form class="fomr-role" method="post">
        	<div class="col-md-3 contact-grid">
            	<p class="online-fm">Name</p>
            </div>
             <div class="col-md-9 contact-grid">
                <input type="text" value="" name="name" required palaceholder="Name" >						
             </div>
             
             <div class="col-md-3 contact-grid">
             	<p class="online-fm">Address</p>
             </div>
               <div class="col-md-9 contact-grid">
				<textarea  rows="3" name="address" required ></textarea>
             </div> 
             
             <div class="col-md-3 contact-grid">
            	<p class="online-fm">City</p>
            </div>
             <div class="col-md-9 contact-grid">
                <input type="text" name="city" required palaceholder="City" >						
             </div>
             
             <div class="col-md-3 contact-grid">
            	<p class="online-fm">Postal Code</p>
            </div>
             <div class="col-md-9 contact-grid">
                <input type="text" value="" name="code" required palaceholder="Name" >						
             </div>
             
             
             <div class="col-md-3 contact-grid">
             	<p class="online-fm">State</p>
             </div>
			   <div class="col-md-9 contact-grid">
				  <input type="text" value="" name="state" required palaceholder="E-mail" >							
			   </div>

				<div class="col-md-3 contact-grid">
                	<p class="online-fm">Mobile</p>
                </div>
                  <div class="col-md-9 contact-grid">											
					<input type="text" value="" name="phone" required palaceholder="Mobile no." >							
				  </div>
                  
                  <div class="col-md-3 contact-grid">
                	<p class="online-fm">E-mail</p>
                </div>
                  <div class="col-md-9 contact-grid">											
					<input type="email" value="" name="mail" required palaceholder="Mobile no." >							
				  </div>
                  
                  <div class="col-md-3 contact-grid">
                	<p class="online-fm">Check-in-date</p>
                </div>
                  <div class="col-md-9 contact-grid">											
					<input type="text" id="calender"  name="date" required  >							
				  </div>
                  
                  <div class="col-md-3 contact-grid">
                	<p class="online-fm">Check-out-date</p>
                </div>
                  <div class="col-md-9 contact-grid">											
					<input type="text" id="calender1" name="date1" required >							
				  </div>
                  
                  <div class="col-md-12 contact-grid text-center">											
					<input type="submit" class="book-online" name="submit" value="Book Now">						
				</div>
        </form>
      </div>
        <div class="col-md-5 onl-side">
   			<img src="img/payumoney.gif" class="img-responsive">
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
<script src="js/jquery-ui.js"></script>
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
<script>
  $(function() {
    $( "#calender" ).datepicker({
      changeMonth: true,
      numberOfMonths: 2,
      minDate: 0,
      dateFormat:"d-M-yy",
      onClose: function( selectedDate ) {
        $( "#calender1" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#calender1" ).datepicker({
      changeMonth: true,
      numberOfMonths: 1,
      minDate: 0,
      dateFormat:"d-M-yy",
      onClose: function( selectedDate ) {
        $( "#calender" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
  </script>


  
</body>
</html>
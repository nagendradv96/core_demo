<?php

if(isset($_POST['submit']))

{

$name=$_REQUEST['firstname'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$code=$_REQUEST['code'];
$state=$_REQUEST['state'];
$mail=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$arrival=$_REQUEST['date'];
$departure=$_REQUEST['date1'];

$msg='';
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
	                $from=$mail;
						//$to="sushen.infosindia@gmail.com";
	                $to="info@clubplatinumresort.com";
                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                        $headers .= 'From:'.$mail . "\r\n" .
                        'Reply-To:' . "\r\n" .
                        'X-Mailer: PHP/'.phpversion();
                       $mail= mail($to,$sub,$msg,$headers);

if($mail)

{

?>

<script>

alert("Thank you . Your Enquiry Is Submited");
//window.location.href ='index.php';

</script>

<?php

}



?>


<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "jx0DkdRp";

// Merchant Salt as provided by Payu
$SALT = "3knfwt55wg";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
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
  
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
</head>

<body class="bg-color" onLoad="submitPayuForm()">

<?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
	
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
      	<form class="fomr-role" action="<?php echo $action; ?>" method="post" name="payuForm">
			  <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
			  <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
			  <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
        	<div class="col-md-3 contact-grid">
            	<p class="online-fm">Name</p>
            </div>
             <div class="col-md-9 contact-grid">
                <input type="text" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" name="firstname" id="firstname" required palaceholder="Name" >						
             </div>
             
			 <div class="col-md-3 contact-grid">
            	<p class="online-fm">Amount</p>
            </div>
             <div class="col-md-9 contact-grid">
                <input type="text" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" name="amount" required palaceholder="Amount" >						
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
				  <input type="text" value="" name="state" required palaceholder="State" >							
			   </div>

				<div class="col-md-3 contact-grid">
                	<p class="online-fm">Mobile</p>
                </div>
                  <div class="col-md-9 contact-grid">											
					<input type="text" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" name="phone" required palaceholder="Mobile no." >							
				  </div>
                  
                  <div class="col-md-3 contact-grid">
                	<p class="online-fm">E-mail</p>
                </div>
                  <div class="col-md-9 contact-grid">											
					<input type="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" name="email" id="email" required palaceholder="Mobile no." >							
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
                  
				  <div class="col-md-3 contact-grid">
            	<p class="online-fm">Product Info</p>
            </div>
             <div class="col-md-9 contact-grid">
                <textarea name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?>Club Platinum Resort</textarea>				
             </div>
			 
			 <div class="col-md-3 contact-grid">
            	<p class="online-fm">Success URI:</p>
            </div>
             <div class="col-md-9 contact-grid">
                <input name="surl" value="<?php echo (empty($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" />						
             </div>
			 
			 <div class="col-md-3 contact-grid">
            	<p class="online-fm">Failure URI:</p>
            </div>
             <div class="col-md-9 contact-grid">
                <input name="furl" value="<?php echo (empty($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" />						
             </div>
			 			 
             <div class="col-md-9 contact-grid">
                <input type="hidden" name="service_provider" value="payu_paisa" size="64" />						
             </div>
				  <?php if(!$hash) { ?>
                  <div class="col-md-12 contact-grid text-center">											
					<input type="submit" class="book-online" name="submit" value="Book Now">						
				</div>
				 <?php } ?>
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
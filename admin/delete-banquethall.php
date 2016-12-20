<?php
session_start();
if(!isset($_SESSION['login_user'])){
header("location: index.php");
}
?>

<?php
include '../config/conn.php';
$id=$_REQUEST['id'];
$delq="DELETE FROM `banquet_hall` where id='$id'";
$del_res=mysqli_query($conn,$delq);
	 
 if($del_res)
 {
	 header('Location: banquet-hall.php');
 }

?>

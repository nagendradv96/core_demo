<?php
session_start();
if(!isset($_SESSION['login_user'])){
header("location: index.php");
}
?>

<?php
include '../config/conn.php';
$id=$_REQUEST['id'];
$delq="DELETE FROM `packages` where id='$id'";
$del_res=mysqli_query($conn,$delq);
	 
 if($del_res)
 {
	 header('Location: package4.php');
 }

?>

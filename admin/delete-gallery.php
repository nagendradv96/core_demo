<?php
session_start();
if(!isset($_SESSION['login_user'])){
header("location: index.php");
}
?>

<?php
include '../config/conn.php';
$id=$_REQUEST['id'];
$category=$_REQUEST['cat'];
$delq="DELETE FROM `gallery` where id='$id' and category='$category'";
$del_res=mysqli_query($conn,$delq);
	 
 if($del_res)
 {
	 header('Location: gallery.php?cat='.$category.'');
 }

?>

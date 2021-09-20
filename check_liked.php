
<?php
include 'config.php';
session_start();
if(isset($_SESSION['username'])){ $username=$_SESSION['username']; 
   $post_id=$_POST['pid'];
   $active='Active';
$sql1="SELECT * FROM likes WHERE liked_by='{$username}' AND post_id={$post_id} AND status='{$active}'";
 $result1=mysqli_query($conn,$sql1) or die('Query failed');
  $output='';                           
 if(mysqli_num_rows($result1)>0){
     $output.= "<span style='font-size:50px; font-weight:600; cursor:pointer; margin-left:8px;'> <i class='fa fa-thumbs-up' aria-hidden='true' style='color:blue'></i></span>";
 } else{ 
  $output.="<span style='font-size:50px; font-weight:600; cursor:pointer; margin-left:8px;'>  <i class='fa fa-thumbs-up' aria-hidden='true' style='color:pink'></i></span>";
   }
  echo $output;                              
}else{
    echo "<span style='font-size:50px; font-weight:600; cursor:pointer; margin-left:6px;'>  <i class='fa fa-thumbs-up' aria-hidden='true' style='color:#73C6B6'></i></span>";
}
?>
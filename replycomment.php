<?php
include 'config.php';
session_start();
if(isset($_SESSION['username'])){ $username=$_SESSION['username'];
$comment=$_POST['comment'];
$post_id=$_POST['post_id'];
$btn_id=$_POST['btnid'];
date_default_timezone_set("Asia/Kolkata");
$date=date('j M Y');
$time=date('h:ia');
 $sql1="SELECT * FROM comments WHERE id={$btn_id}";
 $result1=mysqli_query($conn,$sql1) or die('Query failed');
  while($row=mysqli_fetch_assoc($result1)){
    $author=$row['username'];
  }                             
    $sql="INSERT INTO comments(username,toUsername,comment,post_id,date,time)VALUES('{$username}','{$author}','{$comment}',{$post_id},'{$date}','{$time}')";
    if(mysqli_query($conn,$sql)){
        echo 1;
       }
       else{
        echo 0;
      } 
}
else {
    echo -1;
}





?>
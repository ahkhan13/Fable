<?php
include 'config.php';
session_start();
if(isset($_SESSION['username'])){ $username=$_SESSION['username'];
$comment=$_POST['comment'];
$author=$_POST['author'];
$post_id=$_POST['id'];
date_default_timezone_set("Asia/Kolkata");
$date=date('j M Y');
$time=date('h:ia');
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
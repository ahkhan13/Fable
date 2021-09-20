<?php
include 'config.php';
session_start();
if(isset($_SESSION['username'])){
$sender=$_SESSION['username'];
$receiver=$_POST['receiver'];
date_default_timezone_set("Asia/Kolkata");
$date=date('j M Y');
$time=date('h:ia');
$msg=$_POST['msg'];
$sql="INSERT INTO messages(msg_sender,msg,msg_reciever,time)VALUES('{$sender}','{$msg}','{$receiver}','{$time}')";
if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}
}else{
    
}
?>
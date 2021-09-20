<?php
include 'config.php';
session_start();
if(isset($_SESSION['username'])){ $sender=$_SESSION['username'];
$reciever=$_POST['reciever'];
$inactive='Inactive';
$active='Active';
$sql1="SELECT * FROM friend_requests WHERE sender='{$sender}' AND reciever='{$reciever}' AND status='{$inactive}' OR 
 sender='{$reciever}' AND reciever='{$sender}' AND status='{$inactive}'";
 $result1=mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result1)>0) {
      echo 2;
  } else{
 $sql2="SELECT * FROM friend_requests WHERE sender='{$sender}' AND reciever='{$reciever}' AND status='{$active}' OR 
sender='{$reciever}' AND reciever='{$sender}' AND   status='{$active}'";
 $result2=mysqli_query($conn,$sql2);
  if(mysqli_num_rows($result2)>0){
      echo 3;
    }
else{
$sql="INSERT INTO friend_requests(sender,reciever,status)VALUES('{$sender}','{$reciever}','{$inactive}')";
    if(mysqli_query($conn,$sql)){
        echo 1;
       }else{
     echo 0;
    }
   }
  }
}
else {
    echo -1;
    
}

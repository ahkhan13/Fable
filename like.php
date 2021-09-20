<?php
include 'config.php';
session_start();
if(isset($_SESSION['username'])){ 
$username=$_SESSION['username'];
$post_id=$_POST['post_id'];
$author=$_POST['author'];
$date=date('j M Y');
$time=date('h:ia');
$active='Active';
$inactive='Inactive';
$sql1="SELECT * FROM likes WHERE liked_by='{$username}' AND post_id={$post_id} AND status='{$active}'";
 $result1=mysqli_query($conn,$sql1) or die('Query failed');
 if(mysqli_num_rows($result1)>0){
       while($row=mysqli_fetch_assoc($result1)){
           $id=$row['id'];
        }
     $sql2="UPDATE likes SET status='{$inactive}' WHERE id = {$id}";
     if(mysqli_query($conn,$sql2)) {
         echo 2;
    }
 }
 else{ 
     $sql3="SELECT * FROM likes WHERE liked_by='{$username}' AND post_id={$post_id} AND status='{$inactive}'";
 $result3=mysqli_query($conn,$sql3) or die('Query failed');
 if(mysqli_num_rows($result3)>0){
       while($row=mysqli_fetch_assoc($result3)){
           $id=$row['id'];
        }
     $sql4="UPDATE likes SET status='{$active}' WHERE id = {$id}";
     if(mysqli_query($conn,$sql4)){
        echo 2;
     } 
    }
    else{      
    $sql="INSERT INTO likes(post_id,liked_by,author,status,date,time)VALUES({$post_id},'{$username}','{$author}
','{$active}','{$date}','{$time}')";
    if(mysqli_query($conn,$sql)){
        echo 1;
       }
       else{
        echo 0;
      } 
}
}
}
else {
    echo -1;
}





?>
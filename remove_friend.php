<?php
   include 'config.php';
    $sender_id=$_POST['sender_id'];
    $status='Active';
    $sql="DELETE FROM friend_requests WHERE request_id={$sender_id}";
     if(mysqli_query($conn,$sql)){
        echo 1;
    }else{
        echo 0;
    }
?> 
<?php
   include 'config.php';
    $sender_id=$_POST['sender_id'];
    $status='Active';
    $sql="UPDATE friend_requests SET status = '{$status}' WHERE request_id={$sender_id}";
     if(mysqli_query($conn,$sql)){
        echo 1;
    }else{
        echo 0;
    }
?> 
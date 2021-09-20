<?php
   include 'config.php';
    $sender=$_POST['logged_person'];
    $sql="SELECT * FROM friend_requests WHERE sender={$post_id}";
    $result=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($result);
    echo $total.' Likes';
?> 
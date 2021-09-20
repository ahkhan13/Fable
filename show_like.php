<?php
   include 'config.php';
    $post_id=$_POST['pid'];
    $active='Active';
    $sql="SELECT * FROM likes WHERE post_id= {$post_id} AND status='{$active}'";
    $result=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($result);
    echo $total. ' Likes';
?> 
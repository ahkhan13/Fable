<style>
     <link rel="stylesheet" href="css/font-awesome.css">
  
</style>
<?php
    include 'config.php';
    $post_id=$_POST['pid'];
    $sql="SELECT * FROM comments WHERE post_id={$post_id} ORDER BY id DESC";
    $result=mysqli_query($conn,$sql);
    $output='';
    if(mysqli_num_rows($result)>0){
         While($row=mysqli_fetch_assoc($result)){
              $id=$row['id'];
              $output.= "<div style='border-bottom:2px solid pink; border-radius:4px; margin-top:5px; margin-left:30px'>
<div style='padding:10px;'><span style='color:darkred; font-weight:bold; font-size:15px;'><i class='fa fa-user' aria-hidden='true'></i> {$row['username']}</span> <span style='font-size:12px'>{$row['date']} , {$row['time']}</span>
<h4><span style='font-size:13px; color:blue;'>@{$row['toUsername']}</span> <span style='font-size:18px'>{$row['comment']}</span></h4>
<a  href='' class='' id='replybtn' data-id='{$id}' style='font-weight:500; font-size:12px;'>Reply</a>
 <div id='{$id}' style='display:none; padding-top:7px;'>
 <input type='text' id='{$id}'>
 <button class='{$id}' style='background:purple; font-size:12px; color:snow; border-radius:4px; padding:4px; margin-top:10px; border:none'>Sumbit</button>
        <h3 id='error' style='display:none'></h3>
            </div>
                    </div>
                    </div>";
          }
        echo $output;
    }
    else{
        echo "<h4 style='color:black; '>No comments available</h4>";
    }


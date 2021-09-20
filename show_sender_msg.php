<?php
include 'config.php';
session_start();
if(isset($_SESSION['username'])){
$sender=$_SESSION['username'];
$receiver=$_POST['receiver'];
$msg=$_POST['msg'];
$output='';
 $sql="SELECT * FROM messages WHERE msg_sender='{$sender}' AND msg_reciever='{$receiver}' OR msg_sender='{$receiver}' AND msg_reciever='{$sender}' ORDER BY msg_id ASC";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $sender_msg=$row['msg'];
        $sender=$row['msg_sender'];
        $time=$row['time'];
        $output.="
        <div class='row'>
        
          <div class='col-md-offset-4 col-md-6' id=''>
          <div style='background:#2f3542;' padding:16px;>
        <span style='color:cyan;;margin-top:10px; margin-left:5px; border-radius:3px; display:block; font-size:19px; font-weight:bold; padding:6px'>{$sender_msg}</span>
         <div style='color:darkcyan;font-size:14px; padding:6px'>
         <span>{$time} ,</span><span> {$sender}</span>
         </div>
        </div>
</div></div>";
    }
     /*while($row=mysqli_fetch_assoc($result1)){
        $sender_msg=$row['msg'];
        $output.="<div class='' style='margin-right:100px; margin-top:5px;'><div class='col-md-4' id=''>
        <span style='color:snow; background:red; padding:2px;margin-top:5px; border-radius:3px; display:block;'>{$sender_msg}</span>
            </div>
         </div>
    ";
    }
    */
    echo $output;
}else{
    
}
}else{
    
}
?>
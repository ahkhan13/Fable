<?php
include 'config.php';
session_start();
if(isset($_SESSION['username'])){
$sender=$_SESSION['username'];
$receiver=$_POST['receiver'];
$msg=$_POST['msg'];
$output='';
$sql="SELECT * FROM messages WHERE msg_sender='{$receiver}' AND msg_reciever='{$sender}' ORDER BY msg_id DESC";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $receiver_msg=$row['msg'];
        $output.="<span style='color:snow; background:red; padding:2px;margin-top:5px; border-radius:3px; display:block;'>{$receiver_msg}</span>
        ";
    }
    echo $output;
}else{
    
}
}else{
    
}
?>
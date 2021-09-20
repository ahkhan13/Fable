<?php
$conn=mysqli_connect("localhost", "root", "", "dependent") or die("connection failed");
if($filename=$_FILES['image']['name']!=''){
   $filename=$_FILES['image']['name'];
   $extension=pathinfo($filename,PATHINFO_EXTENSION);
    $valid_ext=array("jpg", "png", "jpeg","gif");
    if(in_array($extension,$valid_ext)){
        $newname=rand().".".$extension;
        $path="images/".$newname;
  if(move_uploaded_file($_FILES['image']['tmp_name'],$path)){
       echo '<img src="'.$path.'" /><button data-path="'.$path.'" id="deletebtn">Delete</button>';  
     }
    }else{
        echo 1;
    }
} else{
    echo 0;
}
?>
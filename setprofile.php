<?php
session_start();
$user=$_SESSION['username'];

?>
<?php
include 'config.php';
if(isset($_POST['save'])){
      
/*if(isset($_FILES['image'])){
   $filename=$_FILES['image']['name'];
   $extension=pathinfo($filename,PATHINFO_EXTENSION);
    $valid_ext=array("jpg", "png", "jpeg","gif");
 if(in_array($extension,$valid_ext)){
        $newname=rand().".".$extension;
        $path="images/".$newname;
  move_uploaded_file($_FILES['image']['tmp_name'],$path);
   }
}
else{
    echo "ERROR";
}
*/
if(isset($_FILES['fileToUpload'])){
        $errors=array();
       $file_name=$_FILES['fileToUpload']['name'];
       $file_size=$_FILES['fileToUpload']['size'];
       $file_tmp=$_FILES['fileToUpload']['tmp_name'];
       $file_type=$_FILES['fileToUpload']['type'];
      $file_ext = end(explode('.',$file_name));
     $extensions=array("jpeg","jpg","png");
    if(in_array($file_ext,$extensions)===false){
    $errors[]="File should be in jpeg , jpg or png format only";
}
if($file_size > 209715278677){
    $errors[]="File size must be less than 20mb";
}
 if(empty($errors)==true){
move_uploaded_file($file_tmp,"images/".$file_name);
 }else{
     print_r($errors);
     die();
 }    
} else{
    echo "ERROr";
}


  $sql="UPDATE user SET profile='{$file_name}' WHERE username='{$user}'";
    if(mysqli_query($conn,$sql)){
        
    }else{
        echo "errro";
    }
}
?>

<html>

<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>News</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
    
    </head>
<style>
    
         
     #profile-img img{
               width:100px;
               height:100px;
               border-radius: 50%;
               object-fit: cover;
               object-position: center;
               border: 1px solid #bdc3c7;
              
             }
       #success{
                background: pink;
                color: red;
                padding: 5px;
                left: 50px;
                width: 200px;
                display: none;
            }
    #profile-img {
        font-size:60px; margin-left:0px; background:grey; padding:2px;color:cyan; border-radius:50%;
        transition: all 1 ease;
    }
     #no_profile {
        font-size:60px; margin-left:0px; background:grey; padding:18px;color:cyan; border-radius:50%;
        transition: all 1 ease;
    }
    #profile-img:hover{
        background: lightblue;
        color:grey;
        border-radius: 50%;
    }
   no_profile:hover{
        background: lightblue;
        color:grey;
        border-radius: 50%;
    }
    .container{
        margin-top: 10px;
    }
    #profile1{
      box-shadow: 0px 1px 3px rgba(0,0,0,0.3);
        padding:25px;
        margin-top: 20px;
        margin-left: 20px;
    }
     #profile{
      box-shadow: 0px 1px 3px rgba(0,0,0,0.3);
        padding:15px;
        margin-top: 20px;
        margin-left: 20px;
    }
    .container{
        margin-top:15px;
    }
    #viewimg img{
                width:100%;
                height: 400px;
                box-sizing: border-box;
             }
    
</style>
    <body>
        
<div class='container'>
    <div class='row'>
        <div class="col-md-12 bg-primary">

            <span>
            <a href='index.php'><i class='fa fa-arrow-left float-left' style="color:#dff9fb; font-size:23px"></i></a></span>
            <span style='font-size:20px; margin-left:20px;'>
            <?php echo $user;?>
            </span>
        </div>
    </div>
      
   <div class="row">
       <div class="col-md-12" style="">
           <div class="row">
               
             <div class="col-md-2 text-center" style="border:0px solid red;" id='profile1'>
            <h3 style="font-weight:bold; color:blue; margin-top:0px"><?php echo $user;?></h3>
        <?php
    $sql1="SELECT * FROM user WHERE username='{$user}' AND profile!=''";
    $result=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result)>0){
     $row=mysqli_fetch_assoc($result);       
     echo "<div id='profile-img' style='display:inline-block'>
      <img src='images/{$row['profile']}' height='60px' width='60px'></div>";
    } else {            
     echo "<div id='no_profile' style='display:inline-block'>
     <i class='fa fa-user' style='color:pink'></i>
      </div>"; 
    }
         ?>
                <a href=" " class='btn btn-primary' style='margin-top:40px; text-center; display:block;' id='change_pic_btn'>Change Profile</a>

            <div class="profile_pic"style='display:none; margin-top:20px;'>
      <form action="" style="padding:0; box-shadow:0px 0px 0px rgba(0,0,0,0);" method="POST" enctype="multipart/form-data">
                 <input type='file' name="fileToUpload"  style='margin-top:10px;' required>
                  <input type="submit" class='btn btn-primary btn-block' style='margin-top:10px; text-center; display:block;' name='save' value="Upload">
                    </form>
                    </div>
                
           </div>
            <div class="col-md-5 text-center" style="border:0px solid red;" id='profile'>
        <h3 style="font-weight:bold; color:blue; margin-top:0px">Post</h3>
                
            </div>
              <div class="col-md-4" style="border:0px solid red;" id='profile'>
    
                  <?php include 'show_friends.php';?>
                
            </div>
         </div>
    
     </div>
      
   </div>

</div>
     <script type="text/javascript" src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
        $('#change_pic_btn').click(function(e){
           e.preventDefault(); 
            $('.profile_pic').fadeIn();
            $('#change_pic_btn').hide();
        });
        
    });
    </script>
    </body>
</html>
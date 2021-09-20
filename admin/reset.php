<?php
include 'config.php';
session_start();
 $id=$_GET['id'];
 $email=$_GET['email'];
 $sql="SELECT * FROM user WHERE user_id={$id} AND email='{$email}'";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
     if(isset($_POST['save'])){
         $new_pass=$_POST['new_password'];
         $confirm_pass=$_POST['confirm_password'];
         if($new_pass===$confirm_pass){
        $sql1="UPDATE user SET password='{$new_pass}' WHERE user_id={$id}";
           if(mysqli_query($conn,$sql1)){
           echo "<div class='alert alert-success'>Password Updated Successfully</div>";
          }else{
           echo "<div class='alert alert-danger'>Error! Try Again..</div>";
           
          }
        }else{
            echo "<div class='alert alert-danger'>Password are not matching</div>";
        }
     }

 } else{
    echo "<div class='alert alert-danger'>Error! Try Again..</div>";
  }
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN Panel</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="../css/font-awesome.css">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body class="backgorund-white">
        <!-- HEADER -->
        
     <div id="admin-content">
       <div class="container">
         <div class="row">
         <div class="col-md-offset-4 col-md-4">
    <img class="logo" src='images/news.jpg'>
             </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <form  action="" method ="POST" autocomplete="off">
              <div class="form-group">
        <input type="password" name="new_password" class="form-control" placeholder="New Password" required>
                      </div>
                       <div class="form-group">
        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                      </div>
                      <div class="form-group">
                      <input type="submit"  name="save" class="btn btn-primary btn-block" value="Save" required />
                      </div>
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
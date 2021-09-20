
<?php
include 'config.php';
if(isset($_POST['save'])){
   $fname=$_POST['fname']; 
   $lname=$_POST['lname']; 
   $uname=$_POST['user'];
   $email=$_POST['email']; 
   $password=$_POST['password']; 
   $role=$_POST['role'];
   $sql="SELECT * FROM user WHERE username='{$_POST['user']}'";
 $sql1="SELECT * FROM user WHERE email='{$_POST['email']}'";
    $result=mysqli_query($conn,$sql);
    $result1=mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result)>0){
        echo "<div class='alert alert-danger'>Username Already Taken </div>";
    }else if(mysqli_num_rows($result1)>0){
        echo "<div class='alert alert-danger'>Email Already Exits</div>";
    }else{
$sql="INSERT INTO user(first_name,last_name,username,password,role,email) VALUES('{$fname}','{$lname}','{$uname}','{$password}','{$role}','{$email}')";
if(mysqli_query($conn,$sql)){
    header("Location: {$host}/admin/index.php");
}else{
    echo "<div class='alert alert-danger'>Please Try Again</div>";
}
}
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
                  <h1 class="admin-heading text-center font-weight-bold">Create Account</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <form  action="" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                      </div>
                          <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user" class="form-control" placeholder="Username" required>
                      </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="email" class="form-control" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select>
                      </div>
                      <input type="submit"  name="save" class="btn btn-primary btn-block" value="Create Account" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
<?php include "footer.php"; ?>

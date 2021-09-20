
<?php
include 'config.php';
if(isset($_POST['save'])){
    $email=$_POST['email'];
    $user=$_POST['user'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $password=$_POST['password'];
 $sql="SELECT * FROM user WHERE username='{$user}'";
 $sql1="SELECT * FROM user WHERE email='{$email}'";
    $result=mysqli_query($conn,$sql);
    $result1=mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result)>0){
        echo "<div class='alert alert-danger'>Username Already Taken </div>";
    }else if(mysqli_num_rows($result1)>0){
        echo "<div class='alert alert-danger'>Email Already Exits</div>";
    }else{
       
     $subject="Email Verification";
    $output="<table cellspacing='2px' cellpadding='10px' border='1px'>
                <tr style='background:green; color:snow'>
                <th>First Name</th>
                <th>Last Name</th> 
                <th>Username</th> 
                <th>Email </th>  
                <th>Password</th>
                </tr>
                 <tr>
                 <td>$fname</td>
                 <td>$lname</td>
                 <td>$user</td>
                 <td>$email</td>
                 <td>$password</td>
                </tr>
             </table>";
    $body="<h1>Hello, $user </h1>
    <h3>Click below button to Verify Your Email</h3>
   <a href='testingcodeofficial.epizy.com/admin/verify.php?ema=$email&fna=$fname&lna=$lname&pas=$password&use=$user' id='verify'  style='font-size:20px;background-color:red; color:snow; padding:6px; border-radius:4px;'>Verify</a>
   <h2>Your Details</h2>
   $output";
     include 'phpmail/PHPMailerAutoload.php';
     $mail=new PHPMailer(true);
     $mail->isSMTP();
     $mail->Host="smtp.gmail.com";
     $mail->Port=587;
     $mail->SMTPSecure="tls";
     $mail->SMTPAuth=true;
     $mail->Username="khanahs3351@gmail.com";
     $mail->Password="Aftab@13@29";
     $mail->setFrom("khanahs3351@gmail.com");
     $mail->addAddress($email);
     $mail->IsHTML(true);
     $mail->Subject=$subject;
     $mail->Body=$body;
    if($mail->send()){
      echo "<div class='alert alert-danger'>Check Your Email For Verification</div>";
    }else{
        echo 'Failed';
    
     
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="../css/font-awesome.css">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="../css/style.css">
        <style>
        #nav{
            background: purple;
        }
.navbar-brand{
    color:snow;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 660;
  font-size: 36px;
  margin:auto;
  letter-spacing: 1px;
  text-shadow: 3px 3px 1px darkcyan;
  background:purple;
}
        </style>
    </head>
    <body class="backgorund-white">
        <!-- HEADER -->
        
     <div id="admin-content">
       <div class="container">
         <div class="row">
         <div class="col-md-offset-4 col-md-4" id="nav">
    <span class="navbar-brand">NEWS</span>
             </div>
              <div class="col-md-offset-4 col-md-4">
                  <h2 class="admin-heading text-center">Create Account</h2>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method ="POST" autocomplete="off">
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
                      <input type="submit"  name="save" class="btn btn-primary btn-block" value="Create Account" required />
                      </div>
                     <div class="form-group" id="log">
                          <span>Already Have a Account ? </span>
                          <a href="index.php" style="font-size:17px; font-weight:bold;">Login</a>
                      </div>
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
<?php include "footer.php"; ?>
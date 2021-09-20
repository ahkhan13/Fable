<?php
include 'config.php';
    

 $email=$_GET['ema'];
 $password=$_GET['pas'];
 $user=$_GET['use'];
 $lname=$_GET['lna'];
 $fname=$_GET['fna'];
 $role='0';
 
 $sql="SELECT * FROM user WHERE username='{$user}'";
 $sql1="SELECT * FROM user WHERE email='{$email}";
    $result=mysqli_query($conn,$sql);
    $result1=mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result)>0){
       // echo "<div class='alert alert-danger'>Username Already Taken </div>";
    }else if(mysqli_num_rows($result1)>0){
       // echo "<div class='alert alert-danger'>Email Already Exits</div>";
    }else{
 $sql2="INSERT INTO user(first_name,last_name,username,email,password,role) VALUES('{$fname}','{$lname}','{$user}','{$email}','{$password}','{$role}')";
if(mysqli_query($conn,$sql2)){
     $subject="New User Verified";
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
    $body="
   <h2>New verified User Details</h2>
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
     $mail->addAddress("khanahs3351@gmail.com");
     $mail->IsHTML(true);
     $mail->Subject=$subject;
     $mail->Body=$body;
    if($mail->send()){
      echo " ";
    }else{
        echo '';
    }
 }else{
    echo "<div class='alert alert-danger'>Try again</div>";
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
                  <!-- Form Start -->
                  <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method ="POST" autocomplete="off">
                   <div class='row'>
                     <div class='col bg-dark'>
                     <h2 class='text-center' style='color:blue; font-weight:600'>Welcome <?php echo $user;?></h2>
                     </div>
                       <div class='col bg-light text-dark py-3 m-auto'>
                       <h4 class='text-center'> Email Verified Successfully</h4>
                     </div>
                     <div class='col'>
                     <a href='index.php' class='btn btn-success btn-block'>Login Here</a>
                     </div>
                </div>
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
<?php
include 'config.php';
if(isset($_POST['save'])){
    $email=$_POST['email'];
    $sql="SELECT * FROM user WHERE email='{$_POST['email']}'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $user=$row['username'];
             $id=$row['user_id'];
        }
    $subject="Reset Password";
    $body="<h1>Hello, $user </h1>
    <h3>Click below button to Reset Your Password</h3>
   <a href='testingcodeofficial.epizy.com/admin/reset.php?id=$id&email=$email' id='verify' style='font-size:20px; background-color:red; color:snow; padding:6px; border-radius:4px;'>Reset Password</a>";
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
      echo "<div class='alert alert-success'>Check Your Email to Reset your Password</div>";
    } else{
        echo "<div class='alert alert-danger'>Email Sending Failed...</div>";
    }
}
    else{
echo "<div class='alert alert-danger'>ERROR ! Please Enter Correct Email</div>";
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
        <style>
        
        </style>
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
                  <h1 class="admin-heading text-center">Recover Account</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method ="POST" autocomplete="off">
    
                      <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="email" class="form-control" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                      <input type="submit"  name="save" class="btn btn-primary btn-block" value="Send Mail" required />
                      </div>
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
<?php include "footer.php"; ?>
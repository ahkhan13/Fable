
<?php
if(isset($_POST['save'])){
    $conn=mysqli_connect("localhost", "root", "", "mail");
    $email=$_POST['email'];
    $user=$_POST['username'];
    $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    $subject="Record";
    $output="<div class='container'>
             <div class='row my-5'>
              <table cellspacing='2px' cellpadding='10px' border='1px'>
                <tr style='background:green; color:snow'>
                <th>Full Name</th>
                <th>Username</th>
                <th>Mobile Number</th> 
                <th>Email </th>  
                </tr>
                 <tr>
                 <td>$fname</td>
                 <td>$user</td>
                 <td>$phone</td>
                 <td>$email</td>
                </tr>
              </table>
              </div>
            </div>";
    $body="<h1>Hello, $user </h1>
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
      echo "<div class='alert alert-danger'>Email Sent Successfully</div>";
    }else{
        echo 'Failed';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    
        <title>Send Mail</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <style>
           .header{
            text-align: center;
            background: blue;
            color: snow;
            font-size: 30px;
            font-weight: 700;
            padding-bottom: 6px;
            padding-top: 6px;
        }
            .form-data{
                 box-shadow: 0px 2px 3px rgba(0,0,0,0.3);
                padding: 40px;
                
            }
        </style>
    </head>
    <body class="backgorund-white">
        <!-- HEADER -->
         <div class="header">
                         Send Mail
                     </div>
             <div class="container">
                <div class="row my-3">
                
                 <div class="offset-md-3 col-md-6">
                     <div class="form-data">
                  <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Full Name</label>
                          <input type="text" name="fname" class="form-control" placeholder="Full Name" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control" placeholder="Username" required>
                      </div>
                      <div class="form-group">
                          <label>Mobile Number </label>
                          <input type="text" name="phone" class="form-control" placeholder="Mobile Number" required>
                      </div>
                      <div class="form-group">
                          <label>Your Email</label>
                          <input type="email" name="email" class="form-control" placeholder="Email" required>
                      </div>
                     
                      <div class="form-group">
                      <input type="submit"  name="save" class="btn btn-primary btn-block" value="Send Mail" required />
                      </div>
                     </form>
                        </div>
                     </div>
                 </div>
                 
               </div>
    </body>
</html>

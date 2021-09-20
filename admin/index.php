<?php
include 'config.php';
session_start();
if(isset($_SESSION['username'])){
header("Location: {$host}/admin/post.php");
}
?>
<?php
include 'config.php';
if(isset($_POST['save'])){
    $user=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM user WHERE username='{$user}'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       $row=mysqli_fetch_assoc($result);
        session_start();
      
        $pass=$row['password'];
        if($pass==$password){
        $_SESSION['role']=$row['role'];
        $_SESSION['username']=$row['username'];
            header("Location: http://{$host}/news/index.php");
        }else{
           echo "<div class='alert alert-danger'>Password Unmatched</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Incorrect Username</div>";
    }
}

?>
<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN | Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
     <style>
      .navbar-brand{
    color:snow;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 660;
  font-size: 36px;
  margin:auto;
  letter-spacing: 1px;
  text-shadow: 3px 3px 1px darkcyan;
}
     </style>
    <body>
        <div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4" style="background:purple">
                         <span class="navbar-brand">NEWS</span> 
                         </div>
                         <div class="col-md-offset-4 col-md-4">
                       <h3 class="heading text-center font-weight-bold">Login Here</h3>
                       </div>
                        <!-- Form Start -->
                        <div class="col-md-offset-4 col-md-4">
                        <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method ="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                             <div class="form-group">
                             <input type="submit" name="save" value="Login" class="btn btn-primary btn-block">
                            </div>
                              <div class="form-group">
                                <a href="forget.php">Recover Account ?</a>
                            </div>
                        </form>
                        </div>
                        <!-- /Form  End -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

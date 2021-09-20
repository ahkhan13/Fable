<?php
session_start();
include 'config.php';
if(!isset($_SESSION['username'])){
header("Location: {$host}/admin/index.php");
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <style>
   #gohome a{
           display:block;
           border-radius: 5px;
           color: lightgreen;
           font-size: 14px;
           font-weight:520;
           margin-left:15px;
           margin-top: 14px;
           transition:all 0.5s ease 0s;
            }

        
    
#gohome a:hover,
#gohome a.active{
    color:pink;
}
#logout:hover,#logout.active{
    color:black;
}
      .navbar-brand{
    color:snow;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 660;
  font-size: 26px;
  letter-spacing: 1px;
  text-shadow: 3px 3px 1px darkcyan;
  
}

 #logout{
       border:1px solid lightgreen;
       color:lightgreen;
       transition:all 0.5s ease-in-out;
   }
   #logout:hover{
       background:darkred;
       color:snow;
       border:1px solid darkred;
   }
   #user{
       position:absolute;
       top:10px;
       right:100px;
   }
    #user span{
        margin-right:30px;
        padding:2px 6px 3px 6px;
    }
    @media(max-width:768px){
       #user{
       position:absolute;
       top:10px;
       right:10px;
   } 
    }
        </style>
    </head>
    <body>
        <!-- HEADER -->
        <div id="" style="background:purple">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row" id="head">
                    <!-- 
                    <div class="col-1">
                    <div class="navbar-brand">NEWS</div>
                    </div>
                    <div class="" style="text-align:center">
                    <a  href="/index.php" class="btn" id ='gohome'>Home</a>
                    </div>
                    
                    <div class="" style:"text-align:right">
                     <span class="text-pink" style="font-size:14px; background:red; color:snow; margin-top:5px">Hi <?php echo $_SESSION['username'];?></span>
                     <a href="" class="admin-logout btn btn-sm"  style="font-size:13px;" id="logout" >Logout</a>
                    </div>
                     -->
                    <div class="navbar-brand">
                         <span>NEWS</span>
                    </div>
                    <div id="gohome">
                      <a href="../index.php">Home</a>
                    </div>
                    <div id="user">
                        <span class="text-pink" style="font-size:14px; background:red; color:snow; margin-top:5px">Hi <?php echo $_SESSION['username'];?></span>
                         <a href="" class="admin-logout btn btn-sm"  style="font-size:15px;" id="logout" >Logout</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <ul class="admin-menu">
                            <li>
                                <a href="post.php">Post</a>
                            </li>
                        
                            <li>
                             <?php
                           if($_SESSION['role']==1){
                  echo  "<a  href='category.php'>Category</a>"; 
                           } 
                           
                           ?>
                     
                            </li>
                           <li>
                             <?php
                           if($_SESSION['role']==1){
                    echo "<a  href='users.php'>Users</a>"; 
                           }
                           ?>
                     
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Menu Bar -->
     <script type="text/javascript" src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
        $('#logout').click(function(e){
            e.preventDefault();
          if(confirm("Are You Sure ?")){
           window.location.replace("http://localhost/news/admin/logout.php"); 
          }  
        });
    });
    </script>
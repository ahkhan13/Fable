<?php
session_start();
if(isset($_SESSION['username'])){
   $username=$_SESSION['username'];
}
?>
<html>
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    <style>
    body{
        background:;
    }
    .nav_menu{
        background:purple;
    }
    .nav-link{
        margin-left:4px;
        color:snow;
        font-weight:600;
        font-size:16px;
        transition:all 0.4s ease-in-out;

    }
    .nav-link:hover{
       color:lightgreen;
       transform: scale(1.2,1.2); 
    }
.navbar-brand{
    color:snow;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 660;
  font-size: 26px;
  letter-spacing: 1px;
  text-shadow: 3px 3px 1px darkcyan;
}
   #inline_form{
       background:purple;
       box-shadow:none;
   }
   #inline_form input{
      }
   .user_pro{
       font-size:17px;
       font-weight:500;
       color:lightgreen;
       transition:all 0.5s ease-in-out;
   }
   .user_pro:hover{
       color:yellow;
       transform:scale(1.2,1.2);
   }
   #idlogout{
       border:1px solid lightgreen;
       color:lightgreen;
       transition:all 0.5s ease-in-out;
   }
   #idlogout:hover{
       background:darkred;
       color:snow;
       border:1px solid darkred;
   }
    </style>
<body> 
    <div class="nav_menu">
    <div class="container">
     <nav class="navbar navbar-expand-lg">
                <span href="" class="navbar-brand">NEWS</span>
      <?php 
          if(isset($_SESSION['username'])){
                      echo "<a href='profile.php' class='user_pro' style='font-weight:bold; font-size:13px; padding:4px; border-radius:2px;'>$username</a>";
          }?>
            
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
  </button>
          <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ml-auto">
          <?php 
          if(!isset($_SESSION['username'])){
           echo "<li class='nav-item hover'>
          <a href='admin/sign.php' class='nav-link'>Create Account</a>
          </li>";
           echo "<li class='nav-item hover'>
          <a href='admin/index.php' class='nav-link'>Login</a>
          </li>";
          }
          else{
         echo "<div id='inline_form'><form class='form-inline my-2 my-lg-0' style='background:purple;margin-right:10px;padding:0px;' method='GET' action='search_friends.php'>
      <input class='form-control mr-sm-2 py-0' type='search' placeholder='Search Friends' aria-label='Search' name='search_friends'
      >
      <button class='btn btn-success btn-sm my-2 my-sm-0' type='submit'>Search</button>
    </form> </div>";
            echo "<li class='nav-item hover'>
          <a href='index.php' class='nav-link'>Home</a>
          </li>";
          echo "<li class='nav-item hover'>
          <a href='admin/add-post.php' class='nav-link'>Add Post</a>
          </li>";
           echo "<li class='nav-item hover'>
          <a href='setprofile.php' class='nav-link'>Profile</a>
          </li>";
            echo "<li class='nav-item hover'>
          <a href='messages.php' class='nav-link'>Messages</a>
          </li>";
            echo "<li class='nav-item hover'>
          <a href='show_friend_request.php' class='nav-link'>Requests</a>
          </li>";
        
         echo "<li class='nav-item'>
          <a class='btn btn-sm ml-6 my-1' href='' class='nav-link' id='idlogout'>Logout</a>
          </li>";

   
          }
          ?>
         <?php 
         if(isset($_SESSION['username']) AND $_SESSION['role']==1){
     echo "<li class='nav-item'>
          <a href='https://iiitdmkl.codetantra.com/secure/tla/jnr.jsp?m=870d855e-262c-462f-84de-cff6e864d9a7&d=1598236200000&ds=1598207400000' class='nav-link'>CodeTantra</a>
          </li>";

         }
         
         ?>
         </ul>
       </div>
    
     </nav> 
    </div>
      </div> 
   <script type="text/javascript" src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
        $(document).on('click','#idlogout',function(e){
            e.preventDefault();
         if(confirm("Are you sure ?")){
         window.location.replace("http://localhost/news/admin/logout.php");    
         }  
        });
    
      
    });
    </script>

</body> 
</html>
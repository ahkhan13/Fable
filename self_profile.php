<?php
include 'config.php';
$username=$_SESSION['username'];
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
               width:60px;
               height:60px;
               border-radius: 50%;
               object-fit: cover;
               object-position: center;
               border: 1px solid #bdc3c7;
              
             }
         no_profile i{
               width:60px;
               height:60px;
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
        font-size:40px; margin-left:0px; background:grey; padding:1px;color:cyan; border-radius:50%;
        transition: all 1 ease;
    }
     #no_profile {
        font-size:35px; margin-left:0px; background:grey; padding:10px;color:cyan; border-radius:50%;
        transition: all 1 ease;
    }
    #profile-img:hover{
        background: lightblue;
        color:grey;
        border-radius: 50%;
    }
   #no_profilehover{
        background: lightblue;
        color:grey;
        border-radius: 50%;
    }
    </style>
<body>
     <?php
    $sql1="SELECT * FROM user WHERE username='{$username}' AND profile!=''";
    $result=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result)>0){
     $row=mysqli_fetch_assoc($result);       
     echo "<div id='profile-img' style='display:inline-block'>
      <img src='images/{$row['profile']}' height='60px' width='60px'>
      ";
    } else {            
       echo "<div id='no_profile' style='display:inline-block'>
     <i class='fa fa-user' style='color:pink'></i>
      </div>"; 
    }
         ?> 
</body>
</html>



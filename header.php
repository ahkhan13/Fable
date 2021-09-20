<?php 
 session_start();
if(isset($_SESSION['username'])){
$username=$_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>News</title>
    <!-- Bootstrap -->
  <!--  <link rel="stylesheet" href="css/bootstrap.css">-->
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    #menu-bar{
        background:red;
        padding-bottom:0px;
    }
    #menu-bar li a{
        padding:6px 10px;
        font-size:16px;
    }
    body a{
        text-decoration:none;
    }
     body a:hover{
        text-decoration:none;
    }
     #addpost{
            font-size: 18px;
            color: snow;
            font-weight: 600;
            
        }
    #index a{
    padding: 3px 6px;
    text-transform: uppercase;
    display: block;
    border-radius: 3px;
    color: lightcyan;
    background:black;
    font-size: 16px;
    font-weight:600;
    transition:all 0.5s ease 0s;
}
        #index{
         background: red; 
            padding: 4px;
        } 
#index  a:hover,
#index  a.active{
    color:snow;
    background:brown;
}
        #logout{
            margin-top: 10px;
        }
        li{
        padding-left:10px;
        }
        .naver li{
            display: inline-block;
            font-size:16px;
            font-weight:bold;
            padding: 5px;
        }
    </style>
</head>
<body>
<!-- HEADER -->
    <!-- container -->
     <?php include "menubar.php"?>   
       <div class="container">
      <div class="row">
        <!--   <div class='col-md-4'>
                <form style='padding:0px; margin:2px; background:red' action="search_friends.php" method='GET'>
                 <span style="margin-left:25px; margin-bottom:10px">
                <input type="text" name="search_friends" class="" placeholder="Search Friends..." style="padding:3px; border-radius:3px; border:1px solid red;">
            <button type="submit" class="btn btn-danger btn-sm" style=" margin-left:4px; margin-bottom:3px;">Search</button>
                </span>
           </form>
    
    </div>

      <div class="col-md-6">
               <ul class='naver' style='margin-left:8px;'>
               <li><a href='show_friends.php'>Friends</a></li>
                <li><a href=''>Messages</a></li>
                 <li><a href='show_friend_request.php'>Requests</a></li>
                 <li>
                     <a href='admin/sign.php'>Sign Up</a>
                         </li>
              </ul>
          </div>
          -->

      </div>
    </div> 
<!-- /HEADER -->
<!-- Menu Bar -->

    <?php
    include 'config.php';
    if(isset($_GET['cat'])){
    $cat=$_GET['cat'];
    }
  $sql="SELECT * FROM category WHERE post > 0";
  $result=mysqli_query($conn,$sql);
    $active='';
    if(mysqli_num_rows($result)>0){
        $md=md5("hello");
        ?>
    <div id="menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class='menu'>
                <?php 
                 if(!isset($_GET['cat'])){
                echo "<li><a href='index.php?&msd=<?php echo $md;?>' class='active'>HOME</a></li>";
                 }else{
     echo "<li><a href='index.php?&msd=<?php echo $md;?>' class=''>HOME</a></li>";   
                 }
                 ?>
                   <?php While($row=mysqli_fetch_assoc($result)){
                    $cat_name=$row['category_name'];
                    if(isset($_GET['cat'])){
                      if($cat_name==$cat){
                        $active="active";
                    } else{
                        $active='';
                    }
              }
                   
              echo  "<li><a href='category.php?cat=$cat_name&msd=$md' class='{$active}'>$cat_name</a></li>";
        }
     ?>

                </ul>
            </div>
        </div>
    </div>
        </div>
    <?php } ?> 
 <script type="text/javascript" src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
        $(document).on('click','.admin-logout',function(e){
            e.preventDefault();
         if(confirm("Are you sure ?")){
         window.location.replace("http://testingcodeofficial.epizy.com/admin/logout.php");    
         }  
        });
            $(document).on('mouseover','.admin-logout',function(e){
            e.preventDefault();
         $(this).css("color","brown");
        });
           $(document).on('mouseleave','.admin-logout',function(e){
            e.preventDefault();
         $(this).css("color","snow");
        });
       /*$('#search_btn').click(function(){
           var search_item=$('#search_friends').val();
            if(search_item==''){
                
            }else{
                $.ajax({
                   url:'search_friends.php',
                   type:'POST',
                    data:{s:search_item},
                    success:function(data){
                        alert(data);
                    }
                    
                });
            }
        });*/
    });
    </script>

<!-- /Menu Bar -->

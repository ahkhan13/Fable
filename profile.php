
<html>
<head>
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
     include 'config.php';
    $user=$_GET['author'];
    $sql1="SELECT * FROM user WHERE username='{$user}' AND profile!=''";
    $result=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result)>0){
     $row=mysqli_fetch_assoc($result);       
     echo "<div id='profile-img' style='display:inline-block'>
      <img src='images/{$row['profile']}' height='60px' width='60px'></div>";
    } else {            
     echo "<div id='no_profile' style='display:inline-block'>
     <i class='fa fa-user' style='color:pink'></i>
      </div>"; 
    }
         ?> 
</body>
</html>



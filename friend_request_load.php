<?php
include'config.php';
$output='';
if(isset($_SESSION['username'])){
     <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- post-container -->
                    <div class="post-container">
         <?php
    include 'config.php';
    if(isset($_GET['search_friends'])){
    $search_item=$_GET['search_friends'];
    $sql="SELECT * FROM user WHERE username LIKE '%{$search_item}%'";
    $output='';
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
              $username=$row['username'];
                        ?>
                        <div class="post-content" style="border-bottom:1px solid #d1d1d1">
                            
              
           <span style="font-size:21px; font-weight:bold;">
         <i class="fa fa-user" aria-hidden="true"></i>
         <a href='author.php?author=<?php echo $row['username'];?>&mrf=<?php echo $md; ?>'><?php echo $row['username'];?></a>
                                            </span>
     <span>
      <?php echo "<button data-id='{$username}' class='btn btn-primary btn-block btn-sm'  id='add_friend'>Add Friend</button>"; ?>
                                            </span>  
                                    </div>
                <?php } 
        } else{
    echo "<h3 style='font-weight:bold'>No results found</h3>";
       }
    }
            ?>
                     <!--   <ul class='pagination'>
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                      -->
                        </ul>
                    </div><!-- /post-container -->
               </div>
    <?php include 'sidebar.php'; ?>     
</div>
</div>
 <div id='logged_person' style='display:none'><?php 
     echo $_SESSION['username'];?></div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}else{
    
}

?>

<?php include 'header.php';?>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
            <h2 class="page-heading" style='font-weight:bold; font-size:25px'>                            All Search Results
           </h2>
            
             <div id='already' style='display:none; font-size:17px; background:pink; padding:3px; color:red' margin-bottom:10px;></div>
                
                    <!-- post-container -->
                    <div class="post-container">
         <?php
    include 'config.php';
    if(isset($_SESSION['username'])){
    if(isset($_GET['search_friends'])){
    $search_item=$_GET['search_friends'];
    $sql="SELECT * FROM user WHERE username LIKE '%{$search_item}%' AND username!='{$_SESSION['username']}'";
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
         
        } 
     else{
    echo "<h3 style='font-weight:bold'>No results found</h3>";
       }
     }
    }
       else{
          echo "<h3 style='font-weight:bold; color:snow; background:red; padding:3px'>Please Login</h3>"; 
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
<script type="text/javascript" src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
    var logged_person=$('#logged_person').html();
      /* function already_requested(){
           $.ajax({
              url:'already_requested',
              type:'POST',
               data:{sender:logged_person},
               success:function(data){
                   
               }
           });
       } */

       $(document).on('click','#add_friend',function(){
           var a=$(this).data('id');
               $(this).addClass(a);
            $.ajax({
              url:'friend_request.php',
              type:'POST',
              data:{reciever:a},
              success:function(data){
                  if(data==1){
                $('.'+a).css('background','red');
           $('#already').html('Request Sent Successfully').fadeIn();
               }else if(data==2){
     $('#already').removeClass('already_friend').addClass('already_requested').html('Already Requested').fadeIn();
               } else if(data==3){
    $('#already').removeClass('already_requested').addClass('already_friend').html('Already Your Friend').fadeIn();
               }
                  else if(data==-1){
                   alert('login please');
               }else{
                   alert('try again');
               }
              }
            });
        });
    });
</script>



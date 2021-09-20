
<?php include 'header.php';

?>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
         
         <div id='already' style='display:none; font-size:17px; background:pink; padding:3px; color:red' margin-bottom:10px;></div>
                    <!-- post-container -->
                    <div class="post-container">
                     <h2 class="page-heading" style='font-weight:bold; font-size:25px'>                            All Friends
           </h2>
         <?php
    if(isset($_SESSION['username'])){
    include 'config.php';
    $status='Active';
    $sql="SELECT * FROM friend_requests WHERE status='{$status}' AND  sender='{$_SESSION['username']}' OR status='{$status}' AND  reciever='{$_SESSION['username']}' ORDER BY request_id DESC";
    $output='';
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
                  $sender_id=$row['request_id'];
                  $sender=$row['sender'];
                        ?>
                        <div class="post-content" style="border-bottom:1px solid #d1d1d1">
                            
              
           <span style="font-size:21px; font-weight:bold;">
         <i class="fa fa-user" aria-hidden="true"></i>
         <a href='author.php?author=<?php
            if($row['sender']==$_SESSION['username']){
            echo $row['reciever'];
            }else{
            echo $row['sender'];  
            }
             ?>&mrf=<?php echo $md; ?>'><?php
            if($row['sender']==$_SESSION['username']){
            echo $row['reciever'];
            }else{
            echo $row['sender'];  
            }
             ?></a>
                                            </span>
     <span>
      <a href='show_messages.php?author=<?php
            if($row['sender']==$_SESSION['username']){
            echo $row['reciever'];
            }else{
            echo $row['sender'];
            }
             ?>' data-id='{$sender_id}' 
    data-sender='{$sender}'class='btn btn-primary btn-block btn-sm'  id='remove_friend'>Message</a>
                                            </span>  
                                    </div>
                <?php } 
        } else{
    echo "<h3 style='font-weight:bold'>No Friends Available</h3>";
       } }else{
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
<script type="text/javascript" src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
        $(document).on('click','#remove_friend',function(){
            var a=$(this).data('id');
            var sender=$(this).data('sender');
             $(this).addClass(sender);
             $('.'+sender).css('background','red');
        });
        
      });
</script>
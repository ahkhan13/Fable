
<?php include 'header.php'; ?>
<html>
<head>
<style>
    add_comment{
        margin-top:10px;
        margin-left: 0px;
        display:;
    }
    send{
        margin-top: 12px;
        display:;
    }
    #reply_comment{
        margin-top:13px;
        padding-left: 50px;
        display: none;
    }
    #add_reply{
    display: none;
    }
    #btnid{
        display: none;
    }
    #comment_btn{
        margin-top: 10px;
    }
    like{
        font-weight:bold;
        cursor: pointer;
        color: darkred;
        font-size:20px;
    }
    #show_like{
        font-size: 14px;
        color: blue;
        margin-left:5px;
        font-weight: bold;
    }
</style>
</head>
<body>
    <div id='btnid'></div>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <!-- post-container -->
     <?php
    include 'config.php';
     $post_id=$_GET['post_id'];
     ?> 
    <?php
  $sql="SELECT * FROM post WHERE post_id={$post_id}";
  $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        While($row=mysqli_fetch_assoc($result)){
           $id=$row['post_id'];
            $md=md5($id);
                        ?>
                    <div class="post-container">
                        <div class="post-content single-post">
            <h3><?php echo $row['title'];?></h3>
             <input type="hidden" value="<?php echo $row['post_id'];?>" id="post_id">
                            <div class="post-information">
                                <span>
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                        <?php echo $row['category']?>
                                </span>
                                <span>
                                    <i class="fa fa-user" aria-hidden="true"></i>
      <a href='author.php?author=<?php echo $row['author'];?>&msds=<?php echo $md;?>' id='author_name'><?php echo $row['author']?></a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <?php echo $row['post_date']?>
                                </span>
                            </div>
                            <img class="single-feature-image" src="admin/images/<?php echo $row['post_img']?>" alt=""/>
                            <p class="description">
                               <?php echo $row['description']?>
                            </p>
                        </div>
                     
                      <div class="row">
      <div class="offset-md-1 my-2" id="showlike">
            <span id='like'></span><span id='show_like'></span> 
            </div>
            </div>
                    <div class="row">
                    <div class="offset-md-1 col-md-10 my-2 py-1" id='login_please_likes' style='display:none; background:pink; color:red; font-size:16px;'>
                     <div style=''>Please Login</div> 
                     </div>
                     </div> 
                    
    
        <div class='row'>
            <div class='offset-md-1 col-md-7'>
                      <div class="form-group">
                         <input type="text" id="add_comment" class="form-control" placeholder=" Write something Here...">
                  </div>
             </div>
            <div class="col-md-3">
             <button id='send' class='btn btn-success btn-block'>Add Comment</button>
             </div>
           <div id='login_please_add_comment' style='display: none; background:pink; color:red; font-size:17px; margin-top:5px; padding:3px;'>Please Login</div>
                          </div>
          <div class="row">
         <div class='offset-md-2 col-md-9'>
         <div class='form-group' id='show_comment'></div>
                            </div>
                            </div>
                     </div>       
                   
                    <!-- /post-container -->
           <?php } }?>
                </div>
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div> 
 <script type="text/javascript" src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
        var i =$('#post_id').val();
       function check(i){
            $.ajax({
                    url:'check_liked.php',
                    type: 'POST',
                    data: {pid:i},
                    success:function(data){
                  $('#like').html(data);
                    }
                }); 
       }  
        check(i);
        function show_likes(i){
             $.ajax({
                    url:'show_like.php',
                    type: 'POST',
                    data: {pid:i},
                    success:function(data){
                  $('#show_like').html(data);
                    }
                });
        }
    
      show_likes(i);
        
        
        function show_comment(i){
             $.ajax({
                    url:'show_comment.php',
                    type: 'POST',
                    data: {pid:i},
                    success:function(data){
                    $('#add_comment').val('');
             
                  $('#show_comment').html(data);
                    }
                });
        }
    
      show_comment(i);
        
      
        $('#send').click(function(){
       var c = $('#add_comment').val();
       var a =$('#author_name').html();
       var i =$('#post_id').val();
            if(c==''){
             
            }else{
                $.ajax({
                    url:'comment.php',
                    type: 'POST',
                    data:{comment:c ,author:a, id:i},
                    success:function(data){
                       if(data==1){
                           
                      show_comment(i);    
                     } else if(data==0){
                         alert('Try again');
                     } else{
                   $('#login_please_add_comment').fadeIn();      
                     }
                    }
                });
            }
         });
    $(document).on('click','#replybtn',function(e){
         e.preventDefault();
          var btnid = $(this).data('id');
            $('#'+btnid).fadeIn();
         $('.'+btnid).click(function(e){
                e.stopPropagation();
               var c=$('#'+btnid+' '+'input').val();
                var i=$('#post_id').val();
             if(c==''){ 
             } else{
                    $.ajax({
                    url:'replycomment.php',
                    type: 'POST',
                    data:{comment:c,btnid:btnid,post_id:i},
                    success:function(data){
                        if(data==1){
                      show_comment(i);    
                     } else if(data==0){
                        alert('try again');
                     } else{
                     $('#'+btnid+' '+'input').val('');
                        alert('Login Please');
                
                     }
                    }
                });
             }
            });
        });
        $('#like').click(function(){
            var i=$('#post_id').val();
            var a =$('#author_name').html();
            
           $.ajax({
                    url:'like.php',
                    type: 'POST',
                    data:{post_id:i, author:a},
                    success:function(data){
                       if(data==1){
                      show_likes(i); 
                      check(i);
                     } else if(data==0){
                         alert('Try again');
                     } else if(data==2){
                      show_likes(i); 
                      check(i);
                     } else{
                      $('#login_please_likes').fadeIn();     
                     }
                  }
            });
        });
       
    
    });
    </script>
</body>
</html>
<?php include 'footer.php'; ?>

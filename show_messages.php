<?php
include 'config.php';
 $friend=$_GET['author'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
    <style>
    body {
       background:#82589F;
    }
    #header{
        background:red;
        padding:10px;
    }
      #footer{
      background:;
      padding:5px;
    }
    
    .container{
        
    }
    #msg-area{
        
        margin-top:45px;
        margin-bottom:150px;
    }
    @media(max-lenght:660px){

    }
    </style>
<body>   
    <div id='footer' class='fixed-top bg-danger'>
       <div class='container'>
        <div class='col-md-12 '>
        <div class='col-md-offset-6 col-md-3'>
        <span style='color:cyan; font-size:23px; font-weight:bold' id='receiver'><?php echo $friend;?></span>
        </div>
        </div>
        </div>
        </div>
        <div id='msg-area'>
        <div class="container">
        <div class="row">
         <div class="col-md-12" id='send_msg'>
            
         </div>
         </div>
       </div>
       </div>
     <div id='header' class='fixed-bottom bg-danger'>
       <div class='container'>
           <div class="row">
           <div class="col">
           <form class="form-inline">
           <div class="form-group">
           <input type='text' id='msg' class="form-control" placeholder='Type message here...'>
           </div>
           <button class='btn btn-primary' id='msg_send_btn'>Send</button>
          </form>
        </div>
        </div>
        </div>
        </div>
        <script type="text/javascript" src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
        var receiver=$('#receiver').html();
         function show_send_msg(receiver){
            var receiver=$('#receiver').html();
                 $.ajax({
                     url:'show_sender_msg.php',
                     type:'POST',
                     data:{receiver:receiver},
                     success:function(data){
                     $('#send_msg').html(data);
                     }
                 });
          }
    show_send_msg(receiver);
    setInterval(show_send_msg,1000);
     /*
     setInterval(show_receive_msg,100);
          function show_receive_msg(receiver){
                var receiver=$('#receiver').html();
                 $.ajax({
                     url:'show_receiver_msg.php',
                     type:'POST',
                     data:{receiver:receiver},
                     success:function(data){
                   $('#recieve_msg').html(data);
                     }
                 });
          }
        show_receive_msg(receiver);
        */
        $('#msg_send_btn').click(function(){
          var send_msg=$('#msg').val();
          var receiver=$('#receiver').html();
          if(send_msg==''){

          }else{
              $.ajax({
               url: 'send_messages.php',
               type:'POST',
               data:{msg:send_msg,receiver:receiver},
               success:function(data){
                   if(data==1){
               send_msg=$('#msg').val('');
                show_send_msg(receiver);
                show_receive_msg(receiver);
                 }
               }
              });
          }
        });
       
    });
    </script>
</body>
</html>
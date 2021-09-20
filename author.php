<?php include 'header.php'; ?>
    <div id="main-content">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                 <?php
     include 'config.php';
     $author=$_GET['author'];
?>
                <div class="post-container">
                  <h2 class="page-heading">                                                   <?php include 'profile.php';?>
<?php echo $author;?></h2>
                  <?php $sql="SELECT * FROM post WHERE author='{$author}' ORDER BY post_id DESC";
  $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       While($row=mysqli_fetch_assoc($result)){
                        $id=$row['post_id'];
           $md=md5($id);
                        ?>
                    <div class="post-content">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="post-img" href="single.php?post_id=<?php echo $id;?>&lfor=<?php echo $md;?>"><img src="admin/images/<?php echo $row['post_img']?>"height="140px" alt=""/></a>
                            </div>
                            <div class="col-md-8">
                                <div class="inner-content clearfix">
                                    <h4 style='font-weight:600'><a href='single.php?post_id=<?php echo $id;?>&lfor=<?php echo $md;?>'><?php echo $row['title']?></a></h4>
                                    <div class="post-information">
                                        <span>
                                            <i class="fa fa-tags" aria-hidden="true"></i>
                                            <a href='category.php?post_id=<?php echo $id;?>&lfor=<?php echo $md;?>'><?php echo $row['category']?></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href='author.php?author=<?php echo $row['author'];?>&lfor=<?php echo $md;?>'><?php echo $row['author']?></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <?php echo $row['post_date']?>
                                        </span>
                                    </div>
                                    <p class="description">
                                        <?php echo $row['description']?>
                                    </p>
                                    <a class='read-more pull-right' href='single.php?post_id=<?php echo $id;?>&lfor=<?php echo $md;?>'>Comment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                <!--    <ul class='pagination'>
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                    </ul>
-->
            <?php }
                  else{
                      echo "<h3>No Post Available</h3>";
                  }  
                    ?>
                </div><!-- /post-container -->
            </div>
            <?php include 'sidebar.php'; ?>
        </div>
      </div>
    </div>
<?php include 'footer.php'; ?>

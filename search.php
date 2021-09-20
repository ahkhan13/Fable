
<?php include 'header.php';
    if(isset($_GET['search'])){
   $search_term=$_GET['search'];
    
?>
    <div id="main-content">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">
                  <h2 class="page-heading">Search : <?php
                      echo $search_term;?></h2>
                    <?php
             $sql="SELECT * FROM post WHERE title LIKE '%{$search_term}%' OR description LIKE '%{$search_term}%' OR author LIKE '%{$search_term}%' OR post_date LIKE '%{$search_term}%' OR category LIKE '%{$search_term}%'";
              $result=mysqli_query($conn,$sql) or die('queryfailed');
                  if(mysqli_num_rows($result)>0){
                   while($row=mysqli_fetch_assoc($result)){
                     $id=$row['post_id'];
                     $cat=$row['category'];
                     $md=md5($id);
                    ?>
                    <div class="post-content">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="post-img" href="single.php?post_id=<?php echo $id;?>&mda=<?php echo $md;?>"><img src="admin/images/<?php echo $row['post_img'];?>" alt=""/></a>
                            </div>
                            <div class="col-md-8">
                                <div class="inner-content clearfix">
                                    <h3><a href='single.php?post_id=<?php echo $id;?>&mda=<?php echo $md;?>'>  <?php echo $row['title'];?></a></h3>
                                    <div class="post-information">
                                        <span>
                                            <i class="fa fa-tags" aria-hidden="true"></i>
                                            <a href='category.php?cat=<?php echo $cat;?>&mda=<?php echo $md;?>'> <?php echo $row['category'];?></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href='author.php?author=<?php echo $row['author'];?>&mda=<?php echo $md;?>'> <?php echo $row['author'];?></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                             <?php echo $row['post_date'];?>
                                        </span>
                                    </div>
                                    <p class="description">
                                        <?php echo $row['description'];?>
                                    </p>
                                    <a class='read-more pull-right' href='single.php?post_id=<?php echo $id;?>&mda=<?php echo $md;?>'>read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 

     }?>
                   <!-- <ul class='pagination'>
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                    </ul> 
                -->
            <?php
                  }        else {
            echo "<h2>No Result Found</h2>";
        }
    }
        ?>
                </div><!-- /post-container -->
            </div>
            <?php include 'sidebar.php'; ?>
        </div>
      </div>
    </div>
<?php include 'footer.php'; ?>

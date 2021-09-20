
<div id="sidebar" class="col-md-4">
    <!-- search box -->
    <div class="search-box-container">
        <h4>Search</h4>
        <form class="search-post" action='search.php' method ="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search .....">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-danger">Search</button>
                </span>
            </div>
        </form>
    </div>
    <!-- /search box -->
    <!-- recent posts box -->
    <div class="recent-post-container">
        <h4>Recent Posts</h4>
  <?php
    include 'config.php';
  $sql="SELECT * FROM post ORDER BY post_id DESC LIMIT 5";
  $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        While($row=mysqli_fetch_assoc($result)){
           $id=$row['post_id'];
           $md=md5($row['post_id']);
                        ?>
        <div class="recent-post">
            <a class="post-img" href="single.php?post_id=<?php echo $id;?>&str=<?php echo $md;?>">
                <img src="admin/images/<?php echo $row['post_img'];?>" alt="" height='90px'/>
            </a>
            <div class="post-content">
                <h5><a href="single.php?post_id=<?php echo $id;
                ?>&str=<?php echo $md;?>"><?php echo $row['title'];?></a></h5>
                <span>
                    <i class="fa fa-tags" aria-hidden="true"></i>
                    <a href='category.php?cat=<?php echo $row['category'];?>&str=<?php echo $md;?>'><?php echo $row['category'];?></a>
                </span>
                  <span>
               <i class="fa fa-user" aria-hidden="true"></i>
         <a href='author.php?author=<?php echo $row['author'];?>&mrf=<?php echo $md; ?>'><?php echo $row['author']?></a>
             </span>
                <span>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                   <?php echo $row['post_date'];?>
                </span>
                <a class="read-more" href="single.php?post_id=<?php echo $id; ?>&str=<?php echo $md;?>">read more</a>
            </div>
        </div>
        <?php } }?>
    <!-- /recent posts box -->
</div>

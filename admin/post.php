
<?php include "header.php";
if($_SESSION['role']==1){
$sql="SELECT * FROM post";
$result=mysqli_query($conn,$sql);
$i=0;
if(mysqli_num_rows($result)>0){
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-post.php">add post</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                     <?php
                    While($row=mysqli_fetch_assoc($result)){
                           $i=$i+1;    
                          ?>
                          <tr>
                              <td class='id'><?php echo $i ;?></td>
                              <td><?php echo $row['title'];?></td>
                              <td><?php echo $row['category'];?></td>
                              <td><?php echo $row['post_date']?></td>
                              <td><?php echo $row['author'];?></td>
                              <td class='edit'><a href='update-post.php?post_id=<?php echo $row['post_id'];?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php?post_id=<?php echo $row['post_id'];?>'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                   <?php }?>
                      </tbody>
                  </table>
                <!--  <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul>
                  -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
     <?php } }
else{
  $sql="SELECT * FROM post WHERE author='{$_SESSION['username']}'";
$result=mysqli_query($conn,$sql);
$i=0;


?>
 <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-post.php">add post</a>
              </div>
              <?php if(mysqli_num_rows($result)>0) { ?>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                     <?php
                    While($row=mysqli_fetch_assoc($result)){
                           $i=$i+1;    
                          ?>
                          <tr>
                              <td class='id'><?php echo $i ;?></td>
                              <td><?php echo $row['title'];?></td>
                              <td><?php echo $row['category'];?></td>
                              <td><?php echo $row['post_date']?></td>
                              <td><?php echo $row['author'];?></td>
                              <td class='edit'><a href='update-post.php?post_id=<?php echo $row['post_id'];?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php?post_id=<?php echo $row['post_id'];?>'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                   <?php }?>
                      </tbody>
                  </table>
                <!--  <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul>
                  -->
              </div>
          </div>
      </div>
  </div>
 <?php } 
      else {
           echo "<div class='alert alert-danger'>No Post Available</div>";
      }
?>
<?php }?>

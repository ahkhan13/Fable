
<?php include "header.php"; 
if(isset($_POST['submit'])){
    if(isset($_FILES['fileToUpload'])){
        $errors=array();
       $file_name=$_FILES['fileToUpload']['name'];
       $file_size=$_FILES['fileToUpload']['size'];
       $file_tmp=$_FILES['fileToUpload']['tmp_name'];
       $file_type=$_FILES['fileToUpload']['type'];
      $file_ext = end(explode('.',$file_name));
     $extensions=array("jpeg","jpg","png");
    if(in_array($file_ext,$extensions)===false){
    $errors[]="File should be in jpeg , jpg or png format only";
}
if($file_size > 209715278677){
    $errors[]="File size must be less than 20mb";
}
 if(empty($errors)==true){
move_uploaded_file($file_tmp,"images/".$file_name);
 }else{
     print_r($errors);
     die();
 }    
} 
$title=mysqli_real_escape_string($conn,$_POST['post_title']);
$desc=mysqli_real_escape_string($conn,$_POST['postdesc']);
$category=mysqli_real_escape_string($conn,$_POST['category']);
$author=$_SESSION['username'];
date_default_timezone_set("Asia/Kolkata");
$date=date("j-M-Y");                                   
 $sql1="INSERT INTO post(title,description,category,post_date,author,post_img) VALUES('{$title}','{$desc}','{$category}','{$date}','{$author}','{$file_name}');";
 echo $sql1.="UPDATE category SET post=post+1 WHERE category_name='{$category}'";
 if(mysqli_multi_query($conn,$sql1)){
      header("Location: admin/post.php");
 }else{
     echo "<div class='alert alert-danger'>Failed</div>";
 }
}
?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Post</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="post_title" class="form-control" autocomplete="off">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="postdesc" class="form-control" rows="5"  ></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Category</label>
                          <select class="form-control" name="category">
                               <?php 
                              $sql="SELECT * FROM category";
                         $result=mysqli_query($conn,$sql);
                              if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                              ?>
             <option value='<?php echo $row['category_name'];?>'><?php echo $row['category_name'];?></option>
                            <?php } }?>
                          </select> 
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Post image</label>
                          <input type="file" name="fileToUpload" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>

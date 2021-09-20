
<?php include "header.php";
if(isset($_POST['save'])){
  $cat=$_POST['cat'];
  $sql1="SELECT * FROM category WHERE category_name='{$cat}'";  
  $result1=mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result1)>0){
      echo "<div class='alert alert-danger'>ERROR ! Category Already Exists.</div>";
  } else{
  $sql="INSERT INTO category(category_name) VALUES('{$cat}')";

  if(mysqli_query($conn,$sql)){
      header("Location: {$host}/admin/category.php");
  }
         echo "<div class='alert alert-danger'>ERROR ! Insertion Failed.</div>";
}
}
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading text-center">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary btn-block" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>

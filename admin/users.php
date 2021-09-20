<?php
session_start();
if(!isset($_SESSION['username'])){
 header("Location: {$host}/admin/index.php");

}
?>
<?php include "header.php"; 
$sql="SELECT * FROM user";
$result=mysqli_query($conn,$sql);
$i=0;
if(mysqli_num_rows($result)>0){
    


?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Users</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-user.php">add user</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Full Name</th>
                          <th>User Name</th>
                          <th>Role</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                          <?php
                    While($row=mysqli_fetch_assoc($result)){
                           $i=$i+1;    
                          ?>
                          <tr>
                              <td><?php echo $i ;?></td>
                              <td><?php echo $row['first_name'].' '.$row['last_name'];?></td>
                             <td><?php echo $row['username'];?></td>
                              <td><?php if($row['role']==1){
                              echo "Admin";
                          }else{
                              echo "Normal User";
                          }
                              ?></td>
                              <td class='edit'><a href='update-user.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-user.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                  </table>
        <?php } ?>
                 <!-- <ul class='pagination admin-pagination'>
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

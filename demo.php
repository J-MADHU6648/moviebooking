<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>IT SourceCode</title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  </head>
  <?php
  include 'config.php';
  session_start();
$id=	$_SESSION['user'];
$query=mysqli_query($con,"SELECT * FROM tbl_registration where user_id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);

  ?>
  <h1>User Profile</h1>
<div class="profile-input-field">
      
        <form method="post" action="#" >
          <div class="form-group">
            <label>Fullname</label>
            <input type="text" class="form-control" name="name" style="width:20em;" placeholder="Enter your Fullname" value="<?php echo $row['name']; ?>" />
          </div>
          <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="age" style="width:20em;" placeholder="Enter your Age" value="<?php echo $row['age']; ?>">
          </div>
          <div class="form-group">
            <label>Gender</label>
            <input type="text" class="form-control" name="gender" style="width:20em;" placeholder="Enter your Gender" required value="<?php echo $row['gender']; ?>" />
          </div>
          
         
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
           
          </div>
        </form>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
    
      
      $query = "UPDATE tbl_registration SET name = '$name', age = $age, gender = '$gender'
                      WHERE user_id = '$id'";
                    $result = mysqli_query($con, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>
        <?php
             }               
?>
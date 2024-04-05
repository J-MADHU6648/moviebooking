<?php
include('config.php');
session_start();
date_default_timezone_set('Asia/Kathmandu');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>OMTBS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
<link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='js/jquery.color-RGBa-patch.js'></script>
<script src='js/example.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="header"style="background: #e16f6f;">
	<div class="header-top">
		<div class="wrap">
			<div class="h-logo">
			<a href="index.php"><img src="images/Logo1.png" required style="height: 150px; width: 150px; margin: 0px 0px -35px 0px;" alt=""/></a>
		</div>
			  <div class="nav-wrap">
					<ul class="group" id="example-one" >
			           <li><a href="index.php" style="color: #000;" >Home </a></li>
			  		   <li><a href="movies_events.php"style="color: #000;">Movies</a></li>
						 <li><a href="contact.php" style="color: #000;">Contact</a></li>
						 <li><a href="orders.php" style="color: #000;">Orders</a></li>
						 <!-- <li><a href="profile.php" style="color: #000;">Profile</a></li> -->
					   <!-- <li><a href="about.html" style="color: #000;">About</a></li> -->
			  		   <li><?php if(isset($_SESSION['user'])){
			  		   $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?><a href="profile.php"  style="color: #000;"><?php echo $user['name'];?></a><a href="logout.php"style="color: #000;">Logout</a><?php }else{?><a href="login.php" style="color: #000;">Login</a> <a href="registration.php" style="color: #000;">Register</a><?php }?></li>
			        </ul>
			  </div>
 			<div class="clear"></div>
			
   		</div>
		
    </div>
     			<div class="clear"></div>
   	
<div class="block">
	<div class="wrap">
		
        <form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
		       <fieldset>
		       	<div class="field" >
		       	
		       		     
                               

    </div>       	

		       </fieldset>
            </form>
            <div class="clear"></div>
   </div>
</div>
<script>
function myFunction() {
     if($('#hero-demo').val()=="")
        {
            alert("Please enter movie name...");
            return false;
        }
    else{
        return true;
    }
}
    </script>
</div>

<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>OMTBS</title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  </head>
  <style>
    label {
    margin-right: 206px;
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}
  </style>
  <div class="content" style="background-color:#eabdbd;">
  <?php
  include 'config.php';

$id=	$_SESSION['user'];
$query=mysqli_query($con,"SELECT * FROM tbl_registration where user_id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);

  ?>
  <center>
  <h3>User Profile</h3>
<div class="profile-input-field">
      
        <form method="post" action="#" >
          <div class="form-group">
            <label>Fullname</label>
            <input type="text" class="form-control" name="name" style="width:20em;" placeholder="Enter your Fullname" value="<?php echo $row['name']; ?>" />
          </div>
          <div class="form-group">
            <label style="    margin-left: -23px;">Age</label>
            <input type="number" class="form-control" name="age" style="width:20em;" placeholder="Enter your Age" value="<?php echo $row['age']; ?>">
          </div>
          <div class="form-group">
            <label style="    margin-left: -13px;">Gender</label>
            <input type="text" class="form-control" name="gender" style="width:20em;" placeholder="Enter your Gender" required value="<?php echo $row['gender']; ?>" />
          </div>
          
         
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
           
          </div>
        </form>
      </div>
      </center>
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
            window.location = "profile.php";
        </script>
        <?php
             }               
?>
<div class="footer">
	<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_4 span_1_of_4">
					<div class="footer-nav">
		                <ul>
		                   <li><a href="">Our Tips of gallery Template diam</a></li>
		                    <li><a href="">Our Tips of gallery Template diam</a></li>
		                     <li><a href="">Our Tips of gallery Template diam</a></li>
		                       <li><a href="">Our Tips of gallery Template diam</a></li>
		                   </ul>
		              </div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="textcontact">
						<p>consectetuer adipiscing elit,<br>
						consectetuer<br>
						Ph: +1-800-234-52589.<br>
						Email:Support(at)Fotoria-scope.com<br>
						</p>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="call_info">
						<p class="txt_3">Call us toll free:</p>
						<p class="txt_4">1 800 234 23456</p>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class=social>
						<a href="#"><img src="images/fb.png" alt=""/></a>
						<a href="#"><img src="images/tw.png" alt=""/></a>
						<a href="#"><img src="images/dribble.png" alt=""/></a>
						<a href="#"><img src="images/pinterest.png" alt=""/></a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
	<div class="wrap">
	<div class="copy">
		<p>All rights Reserved | Design by <a href="http://w3layouts.com">W3Layouts</a></p>
	</div>
 	</div>
</div>
</body>
</html>
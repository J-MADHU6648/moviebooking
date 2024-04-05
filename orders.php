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

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
       <title>OMTBS </title>
        
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="admin/images/image 9.png" style="margin-top: 20px;margin-left:20px;">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
       

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.0/bootstrap-table.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css'>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<style>
   
/*    
   th {
     background-color: white;
   }
   tr:nth-child(odd) {
     background-color: grey;
   }
   th, td {
     padding: 0.5rem;
   }
   td:hover {
     background-color: lightsalmon;
   }
   
   .paginate_button {
     border-radius: 0 !important;
   } */
   
       /* CSS */
       #example {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#example td, #example th {
  border: 1px solid #eadbdb;
  padding: 8px;
}

#example tr:nth-child(even){background-color: #f2f2f2;}

#example tr:hover {background-color: #ddd;}

#example th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #10477c;
  color: white;
}
   .button-10 {
     display: flex;
     flex-direction: column;
     align-items: center;
     padding: 6px 14px;
     font-family: -apple-system, BlinkMacSystemFont, 'Roboto', sans-serif;
     border-radius: 6px;
     border: none;
   
     color: #eabdbd;
     background: linear-gradient(180deg, #4B91F7 0%, #367AF6 100%);
      background-origin: border-box;
     box-shadow: 0px 0.5px 1.5px rgba(54, 122, 246, 0.25), inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2);
     user-select: none;
     -webkit-user-select: none;
     touch-action: manipulation;
   }
   
   .button-10:focus {
     box-shadow: inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2), 0px 0.5px 1.5px rgba(54, 122, 246, 0.25), 0px 0px 0px 3.5px rgba(58, 108, 217, 0.5);
     outline: 0;
   }

   .body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #eabdbd;
}

#button111 {
    position: relative;
    padding: 6px 15px;
    left: -8px;
    border: 2px solid #ca072b;
    background-color: #ca072b;
    color: #fafafa;
}
   </style>
   </head>

   <body style="background:#eabdbd;">
    
 
    <main>

    <table id="example" class="display" cellspacing="0" style="margin-top: 45px;
    font-size: 16px;text-align: center;" width="100%">
        <thead style="background-color: grey;">
            <tr>
            
                <th>User id</th>
                <th>Payment id</th>
                <th>Amount</th>
                <th>Movie</th>
                <th>Seats</th>
            </tr>
        </thead>
 
        <!-- <tfoot>
            <tr>
                <th>BookingID</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Service</th>
                <th>Booking Date</th>
                <th>Status</th>
            </tr>
        </tfoot> -->
 
        <tbody>
        <?php
        // Database connection
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'movietheatredb';

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
	
	
        $id=$_SESSION['user'];
        // Query to select all images from the table
		$sql = "SELECT  user_id, payment_id, amount, movie, seats FROM orders WHERE user_id=$id";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            // Retrieve the data
			// $id=$row['id'];
            $user_id = $row['user_id'];
            $payment_id = $row['payment_id'];
            $amount = $row['amount'];
            $movie = $row['movie'];
            $seats = $row['seats'];
      
            // Generate the HTML for each row with Bootstrap card styling
            echo '<tr>
            
                    <td>' . $user_id . '</td>
                    <td>' . $payment_id . '</td>
                    <td>' . $amount . '</td>
                    <td>' . $movie . '</td>
                    <td>' . $seats . '</td>';
		  }}
        
           
        ?>
          
		

          
           
        </tbody>
    </table>
    <!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js'></script>

                                                                                                                                                                                                                                                                   

    </main>
    

	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        

        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>

  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_v2uRVdVdpyEH96",
    "amount": (totalAmount), // 2000 paise = INR 20
    "name": "Tutsmake",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });

</script>

<script src=""></script>

<script>
 
  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_v2uRVdVdpyEH96", // secret key id
    "amount": (totalAmount), // 2000 paise = INR 20
    "name": "Tutsmake",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {
 
               window.location.href = 'payment-success.php';

            }
        });
      
    },
 
    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });
 
</script>
    </body>

</html>
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

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<div class="block">
	<div class="wrap">
		
        <form action="#" id="reservation-form" method="post">
		       <fieldset>
		                <div class="field">
			                 <label style="color:#000;">Find a Movie:</label>
			                  <select class="select2">
			                    <option >Movie list</option>
								<option>Animal</option>
								<option>Tiger3</option>
								<option>Hii Nanna</option>
								<option>Conguring Kannappan</option>
								<option>Sam Bahadur</option>
								<option>Pindam</option>
								<option>Extra Ordinary Man</option>
								<option>Joruga Husharuga</option>

			                  </select>
			            </div>
		                <div class="field1">
			                   <label style="color:#000;">Search</label>
			                  <select class="select1">
			                    <option>Movies or Actors</option>
								<option>Ranbir Kapoor,Rashmika Mandanna</option>
								<option>Salman Khan, Katrina Kaif,Shah Rukh Khan</option>
								<option>Regina Cassandra,Redin Kingsley</option>
								<option>Nani,Mrunal Thakur</option>
								<option>Vicky Kaushal,Fatima Sana Shaikh</option>
								<option>Kushee Ravi, Srikanth,Easwari Rao</option>
								<option>Nithiin, Sreeleela, Sudev Nair</option>
								<option>Rohini, SaiKumar,Pujita ponnada</option>
			                  </select>
		                </div>
		       </fieldset>
            </form>
            <div class="clear"></div>
   </div>
</div>
</div>
<div class="content" style="background:#eabdbd;">
	<div class="wrap">
		<div class="content-top">
				<div class="section group" style="border: 2px solid #f4f4f4;background: url(images/contact1.jpg); background-repeat: no-repeat;
    background-size: cover;">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form action="process_contact.php" method="post" name="form11">
					    	<div>
						    	<span style="    display: block;
    font-size: 0.8125em;
    color: white;
    padding-bottom: 5px"><label>NAME</label></span>
						    	<span><input type="text" value="" required name="name"></span>
						    </div>
						    <div>
						    	<span style="    display: block;
    font-size: 0.8125em;
    color: white;
    padding-bottom: 5px"><label>E-MAIL</label></span>
						    	<span><input type="text" value="" required name="email"></span>
						    </div>
						    <div>
						     	<span style="    display: block;
    font-size: 0.8125em;
    color: white;
    padding-bottom: 5px"><label>MOBILE.NO</label></span>
						    	<span><input type="number" value="" required name="mobile"></span>
						    </div>
						    <div>
						    	<span style="    display: block;
    font-size: 0.8125em;
    color: white;
    padding-bottom: 5px"><label>SUBJECT</label></span>
						    	<span><textarea required name="subject"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" style=" right: 290px;"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h3>Find Us Here</h3>
					    	  <div class="map">
							   	    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#fff;text-align:left;font-size:12px">View Larger Map</a></small>
							  </div>
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p style="    font-size: 0.8125em; color: white;
    line-height: 1.8em;">500 Lorem Ipsum Dolor Sit,</p>
						   		<p style="    font-size: 0.8125em; color: white;
    line-height: 1.8em;">22-56-2-9 Sit Amet, Lorem,</p>
						<p style="    font-size: 0.8125em; color: white;
    line-height: 1.8em;"> Phone:(00) 7075673046</p>
				   		<p style="    font-size: 0.8125em;
    color: white;
    line-height: 1.8em;">Fax: (000) 000 00 00 0</p>
				 	 	<p style="    font-size: 0.8125em;
    color: white;
    line-height: 1.8em;">Email: <span>fusionmovies12@gmail.com</span></p>
				   		<p style="    font-size: 0.8125em;
    color: white;
    line-height: 1.8em;">Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				 </div>
			  </div>
				<div class="clear"></div>		
			</div>
	</div>
</div>
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

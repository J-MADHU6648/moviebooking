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
			           <!-- <li><a href="index.php" style="color: #000;" >Home </a></li> -->
			  		   <!-- <li><a href="movies_events.php"style="color: #000;">Movies</a></li> -->
						 <!-- <li><a href="contact.php" style="color: #000;">Contact</a></li> -->
						 <!-- <li><a href="orders.php" style="color: #000;">Orders</a></li> -->
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
<div class="content" style="background-color:#eabdbd;">
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				  <div class="panel-heading">Login</div>
				  <div class="panel-body">
				  	<?php include('msgbox.php');?>
				<p class="login-box-msg">Sign in to start your session</p>
				<form action="process_login.php" method="post">
      <div class="form-group has-feedback">
        <input name="Email" type="text" size="25" placeholder="Email" class="form-control" placeholder="Email"/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="Password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">Login</button>
 
          <p class="login-box-msg" style="padding-top:20px">New Here? <a href="registration.php">Register</a></p>
      </div>
      </div>
</div>
    </form>
			</div>
		</div>
		<div class="clear"></div>	
		
	</div>

<div class="footer">
    <div class="wrap">
        
        <div class="footer-top">
            <div class="col_1_of_4 span_1_of_4">

                <div class="footer-nav">
                    <ul>
                        <li><a href="index.php" style="text-decoration:none;">Home</a></li>
                        <li><a href="movies_events.php" style="text-decoration:none;">Movies</a></li>
                        <li><a href="login.php" style="text-decoration:none;">Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <div class="textcontact">
                    <p>Theatre Assistance<br>
                    Fusion Movies Booking System
                    <br>
                    Ph:7075673046<br>
                    </p>
                    <p>To contact us, please email <a href="mailto:fusionmovies12@gmail.com" class="email-link">fusionmovies12@gmail.com</a>.</p>
                </div>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <div class="call_info">
                    <p class="txt_3">Call us toll free:</p>
                    <p class="txt_4">1 200 696 39669</p>
                </div>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <div class="social">
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
</body>
</html>

<style>
    .content {
        padding-bottom:0px !important;
    }
    #form111 {
        width:500px;
        margin:50px auto;
    }
    #search111{
        padding:8px 15px;
        background-color:#fff;
        border:0px solid #dbdbdb;
    }
    #button111 {
        position:relative;
        padding:6px 15px;
        left:-8px;
        border:2px solid #ca072b;
        background-color:#ca072b;
        color:#fafafa;
    }
    #button111:hover  {
        background-color:#b70929;
        color:white;
    }
</style>

<script src="js/auto-complete.js"></script>
<link rel="stylesheet" href="css/auto-complete.css">
<script>
    var demo1 = new autoComplete({
        selector: '#search111',
        minChars: 1,
        source: function(term, suggest){
            term = term.toLowerCase();
            <?php
            $qry2=mysqli_query($con,"select * from tbl_movie");
            ?>
            var string="";
            <?php $string="";
            while($ss=mysqli_fetch_array($qry2))
            {
            
            $string .="'".strtoupper($ss['movie_name'])."'".",";
            
            }
            ?>
            var choices=[<?php echo $string;?>];
            var suggestions = [];
            for (i=0;i<choices.length;i++)
                if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
            suggest(suggestions);
        }
    });
</script>

<script>
    var videoIndex = 0;
    var videos = document.getElementById('videoPlayer').getElementsByTagName('source');
    
    function playNextVideo() {
        videoIndex = (videoIndex + 1) % videos.length;
        document.getElementById('videoPlayer').src = videos[videoIndex].src;
        document.getElementById('videoPlayer').load();
        document.getElementById('videoPlayer').play();
    }

    // Automatically play the next video when the current one ends
    document.getElementById('videoPlayer').addEventListener('ended', function () {
        playNextVideo();
    });
</script>

</div>
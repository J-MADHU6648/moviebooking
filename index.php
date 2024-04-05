<html>
<body>
<?php
 $start_time = microtime(true);
$activePage = 'home';
include('header.php');
 $end_time = microtime(true);

// // Calculate response time
$response_time = ($end_time - $start_time) * 1000;

// // Output response time
echo "<p>Response Time: " . number_format($response_time, 2) . " milliseconds</p>";
?>

<style>
    .marquee {
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    position: relative;
    animation: marquee 20s linear infinite;
  }

  @keyframes marquee {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
  }

  /* DEMO styling */
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background:black;
  }

  /* .container {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
  } */

  .message {
    font-size: 2vw;
    color: #333;
    padding: 10px;
    background-color: #f0f0f0;
    border: 2px solid #ccc;
    border-radius: 10px;
  }
    </style>
<div class="content" style="background:#eabdbd;">
    <div class="wrap">
        <div class="content-top">

        
        <style>
    .movie-content p {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Number of lines to show */
        -webkit-box-orient: vertical;
    }
    .movie-content .cast {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* Number of lines to show */
        -webkit-box-orient: vertical;
    }
    .content-top h4 {
    color: #000;
    font-size: 1.5em;
    padding: 1.5%;
}
.movies-container,
    .trailers-container {
        margin-bottom: 20px;
        overflow:hidden;
    }
    .movie-list .movie-item {
        display: inline-block;
        width: 20%; /* Adjust as needed */
        margin-right: 5%;
        margin-bottom: 20px;
        vertical-align: top;
    }
    .trailer-list .trailer-item {
        display: inline-block;
        width: 20%; /* Adjust as needed */
        margin-right: 5%;
        margin-bottom: 20px;
        vertical-align: top;
    }
    .movie-image {
        width:100%;
        height: auto;
    }
    .movie-content {
        position: static;
       height: 15em;
        padding: 5px;
        background: #eba1a1;
        width: 229px;
    }
    .trailer-name {
        margin-top: 10px;
        text-align: center;
    }
    .trailer-image {
        width: auto;
        height: auto;
    }
    .content-top h3 {
    color: #000;
    font-size: 2em;
    padding: 1.5%;
}
</style>

<div class="movies-container">
    <h2 style="color:#000;font-size: 24px">Upcoming Movies</h2>
    <div class="container">
        <div class="marquee">
            <div class="movie-list">
                <?php 
                $qry3=mysqli_query($con,"SELECT * FROM tbl_news LIMIT 8");
                
                while($n=mysqli_fetch_array($qry3))
                {
                ?>
                <div class="movie-item">
                    <img src="admin/<?php echo $n['attachment'];?>" class="movie-image">
                    <div class="movie-content">
                        <h4><?php echo $n['name'];?></h4>
                        <p class="cast"><strong>Cast:</strong> <?php echo $n['cast'];?></p>
                        <p><strong>Release Date:</strong> <?php echo $n['news_date'];?></p>
                        <p><?php echo $n['description'];?></p>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
                
            <div class="trailers-container">
                <h2 style="color:#000;font-size: 24px;">Recommended Trailers</h2>
                <div class="trailer-list">
                    <?php 
                    $qry4=mysqli_query($con,"SELECT * FROM tbl_movie ORDER BY rand() LIMIT 8");
                
                    while($nm=mysqli_fetch_array($qry4))
                    {
                    ?>
                    <div class="trailer-item">
                        <a target="_blank" href="<?php echo $nm['video_url'];?>">
                            <img src="<?php echo $nm['image'];?>" class="trailer-image" alt=""/>
                        </a>
                        <p class="trailer-name"><a target="_blank" href="<?php echo $nm['video_url'];?>" class="link" style="text-decoration:none; font-size:14px;"><?php echo $nm['movie_name'];?></a></p>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>              
       
        
 			<div class="listview_1_of_3 images_1_of_3">
					<h2 style="color:#000;font-size: 24px;">Films in Theaters</h2>
					
					<?php
          	 $today=date("Y-m-d");
          	$qry2=mysqli_query($con,"select * from  tbl_movie where status='0' order by rand() limit 8");
						
          	  while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
            <div class="content-left">
					<div class="listimg listimg_1_of_2">
					<?php
						
						?>
						 <a href="about.php?id=<?php echo $m['movie_id'];?>"><img src="<?php echo $m['image'];?>"></a>
					</div>
					<div class="text list_1_of_2">
						  <div class="extra-wrap1">
                                         <a href="about.php?id=<?php echo $m['movie_id'];?>" class="link4" style="text-decoration:none; font-size:18px;"><?php echo $m['movie_name'];?></a><br>
                                        <span class="data">Release Date: <?php echo $m['release_date'];?></span><br>
                                        Cast: <Span class="data"><?php echo $m['cast'];?></span><br>
                                        Description: <span" class="color2" style="text-decoration:none;"><?php echo $m['desc'];?></span><br>
                                    </div>
					</div>
					
					<div class="clear"></div>
				</div>
  	    <?php
  	    	}
  	    	?>			
					
				
				
				
				
				</div>		
				<div class="clear"></div>		
			

    </div>
</div>
<?php include('footer.php');?>
</div>
<?php include('searchbar.php');?>

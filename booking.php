<?php include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
	$qry2=mysqli_query($con,"select * from tbl_movie where movie_id='".$_SESSION['movie']."'");
	$movie=mysqli_fetch_array($qry2);

	
	?>
<div class="content" style="	background:#eabdbd;">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">	
						<h3><?php echo $movie['movie_name']; ?></h3>	
							<div class="about-top">	
								<div class="grid images_3_of_2">
									<img src="<?php echo $movie['image']; ?>" alt=""/>
								</div>
								<div class="desc span_3_of_2">
									<p class="p-link" style="font-size:15px"><b>Cast : </b><?php echo $movie['cast']; ?></p>
									<p class="p-link" style="font-size:15px"><b>Release Date : </b><?php echo date('d-M-Y',strtotime($movie['release_date'])); ?></p>
									<p style="font-size:15px"><?php echo $movie['desc']; ?></p>
									<a href="<?php echo $movie['video_url']; ?>" target="_blank" class="watch_but">Watch Trailer</a>
								</div>
								<div class="clear"></div>
							</div>
							<table class="table table-hover table-bordered text-center">
							<?php
								$s=mysqli_query($con,"select * from tbl_shows where s_id='".$_SESSION['show']."'");
								$shw=mysqli_fetch_array($s);
								
									$t=mysqli_query($con,"select * from tbl_theatre where id='".$shw['theatre_id']."'");
									$theatre=mysqli_fetch_array($t);
									?>
									<tr>
										<td class="col-md-6">
											Theatre
										</td>
										<td>
											<?php echo $theatre['name'].", ".$theatre['place'];?>
										</td>
										</tr>
										<tr>
											<td>
												Screen
											</td>
										<td>
											<?php 
												$ttm=mysqli_query($con,"select  * from tbl_show_time where st_id='".$shw['st_id']."'");
												
												$ttme=mysqli_fetch_array($ttm);
												
												$sn=mysqli_query($con,"select  * from tbl_screens where screen_id='".$ttme['screen_id']."'");
												
												$screen=mysqli_fetch_array($sn);
												echo $screen['screen_name'];
							
												?>
										</td>
									</tr>
									<tr>
										<td>
											Date
										</td>
										<td>
											<?php 
											if(isset($_GET['date']))
							{
								$date=$_GET['date'];
							}
							else
							{
								if($shw['start_date']>date('Y-m-d'))
								{
									$date=date('Y-m-d',strtotime($shw['start_date'] . "-1 days"));
								}
								else
								{
									$date=date('Y-m-d');
								}
								$_SESSION['dd']=$date;
							}
							?>
							<div class="col-md-12 text-center" style="padding-bottom:20px">
								<?php if($date>$_SESSION['dd']){?><a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "-1 days"));?>"><button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i></button></a> <?php } ?><span style="cursor:default" class="btn btn-default"><?php echo date('d-M-Y',strtotime($date));?></span>
								<?php if($date!=date('Y-m-d',strtotime($_SESSION['dd'] . "+4 days"))){?>
								<a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "+1 days"));?>"><button class="btn btn-default"><i class="glyphicon glyphicon-chevron-right"></i></button></a>
								<?php }
								$av=mysqli_query($con,"select sum(no_seats) from tbl_bookings where show_id='".$_SESSION['show']."' and ticket_date='$date'");
								$avl=mysqli_fetch_array($av);
								?>
							</div>
										</td>
									</tr>
									<tr>
										<td>
											Show Time
										</td>
										<td>
											<?php echo date('h:i A',strtotime($ttme['start_time']))." ".$ttme['name'];?> Show
										</td>
									</tr>
									<tr>
										<td>
											Number of Seats
										</td>
										<td>
											<form  action="complete_payment.php" method="post">
												<input type="hidden" name="screen" value="<?php echo $screen['screen_id'];?>"/>
											<input type="number" required tile="Number of Seats" max="<?php echo $screen['seats']-$avl[0];?>" min="0" name="seats" id="selected_seats" class="form-control" value="1" style="text-align:center" id="seats"/>
											<input type="hidden" name="amount" id="hm" value="<?php echo $screen['charge'];?>"/>
											<input type="hidden" name="date" value="<?php echo $date;?>"/>
										</td>
									</tr>
									
									<!-- <tr><td></td>
                                          <td> <a href="seat.php?seats=">Choose Seats </a></td>
									</tr> -->
									<tr>
										<td>
											Amount
										</td>
										<td id="amount" style="font-weight:bold;font-size:18px">
											Rs <?php echo $screen['charge'];?>
										</td>
									</tr>
									<tr>
										<td colspan="2"><?php if($avl[0]==$screen['seats']){?><button type="button" class="btn btn-danger" style="width:100%">House Full</button><?php } else { ?>
										<!-- <button class="btn btn-info" style="width:100%"> <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/c05917807.png" data-amount="<?php echo $screen['charge'];?>" data-id="1"> Book Now </a></button> -->
										<button class="btn btn-info" style="width:100%"> <a href="javascript:void(0)" onclick="bookingpage()" class="btn btn-sm btn-primary float-right " > Continue </a></button>

										<?php } ?>
										</form></td>
									</tr>
						<table>
							<tr>
								<td></td>
							</tr>
						</table>
					</div>			
				<?php include('movie_sidebar.php');?>
			</div>
				<div class="clear"></div>		
			</div>
	</div>
</div>
<?php include('footer.php');?>

<script type="text/javascript">
    var defaultCharge = 100;

    $('#selected_seats').change(function(){
        var charge = <?php echo $screen['charge'];?>;
        var selectedSeats = $(this).val();
        
        // Set the amount to Rs 100 if only 1 seat is selected, otherwise calculate based on screen charge
        var amount = (selectedSeats == 1) ? charge : charge * selectedSeats;

        $('#amount').html("Rs "+amount);
        $('#hm').val(amount);
    });
</script>


</script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_MGWGsjkJ3Kthbl",
    "amount": (totalAmount), // 2000 paise = INR 20
    "name": "Fusion Movies",
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

  function bookingpage(){
    var seats = document.getElementById("selected_seats").value;
    var amount = $('#hm').val();
    var movie = '<?php echo $movie["movie_name"]; ?>'; // Assuming $movie is defined
    window.location.href = "book_seat.php?seats="+seats+"&amount="+amount+"&movie="+encodeURIComponent(movie);
}

</script>

<script src=""></script>
<script>
 
  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_MGWGsjkJ3Kthbl", // secret key id
    "amount": (totalAmount), // 2000 paise = INR 20
    "name": "Fusion Movies",
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
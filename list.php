<?php
$date_in = isset($_POST['reservation_start']) ? $_POST['reservation_end'] : date('Y-m-d');
$date_out = isset($_POST['reservation_start']) ? $_POST['reservation_end'] : date('Y-m-d',strtotime(date('Y-m-d').' + 3 days'));
?>

	 <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                    	 <h1 class="text-uppercase text-white font-weight-bold">Rooms</h1>
                        <hr class="divider my-4" />
                    </div>
                    
                </div>
            </div>
        </header>

<section class="page-section bg-dark">
		
		<div class="container">	
				<div class="col-lg-12">	
						<div class="card">
							<div class="card-body">	
									<form action="dash.php?page=list" id="filter" method="POST">
			        					<div class="row">
			        						<div class="col-md-3">
			        							<label for="">Chech-in Date</label>
			        							<input type="text" class="form-control datepicker" name="reservation_start" autocomplete="off" value="<?php echo isset($reservation_start) ? date("Y-m-d",strtotime($reservation_start)) : "" ?>">
			        						</div>
			        						<div class="col-md-3">
			        							<label for="">Chech-out Date</label>
			        							<input type="text" class="form-control datepicker" name="reservation_end" autocomplete="off" value="<?php echo isset($reservation_end) ? date("Y-m-d",strtotime($reservation_end)) : "" ?>">
			        						</div>
			        						<div class="col-md-3">
			        							<br>
			        							<button class="btn-btn-block btn-primary mt-3">Check Availability</button>
			        						</div>

			        					</div>
			        				</form>
							</div>
						</div>	

						<hr>	
						
						<?php 
						
						 $cat = $conn->query("SELECT * FROM rooms");
						$cat_arr = array();
						while($row = $cat->fetch_assoc()){
							$cat_arr[$row['room_id']] = $row;
						}
						$qry = $conn->query("SELECT distinct(room_id),room_id from rooms where room_id not in (SELECT room_id from reservation where '$reservation_start' BETWEEN date(reservation_start) and date(reservation_end) and '$reservation_end' BETWEEN date(reservation_start) and date(reservation_end)  )");
							while($row= $qry->fetch_assoc()):

						?>
						<div class="card item-rooms mb-3">
							<div class="card-body">
								<div class="row">
								<div class="col-md-5">
									<img src="assets/img/<?php echo $cat_arr[$row['room_id']]['cover_img'] ?>" alt="">
								</div>
								<div class="col-md-5" height="100%">
									<h3><b><?php echo '$ '.number_format($cat_arr[$row['room_id']]['price'],2) ?></b><span> / per day</span></h3>

									<h4><b>
										<?php echo $cat_arr[$row['room_id']]['room_type'] ?>
									</b></h4>
									<div class="align-self-end mt-5">
										<button class="btn btn-primary  float-right book_now" type="button" data-id="<?php echo $row['room_id'] ?>">Book now</button>
									</div>
								</div>
							</div>

							</div>
						</div>
						<?php endwhile; ?>
				</div>	
		</div>	
</section>
<style type="text/css">
	.item-rooms img {
    width: 23vw;
}
</style>
<script>
	$('.book_now').click(function(){
		uni_modal('Book','admin/book.php?in=<?php echo $reservation_start ?>&end=<?php echo $reservation_oend ?>&cid='+$(this).attr('data-id'))
	})
</script>
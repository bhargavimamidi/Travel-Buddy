<?php
session_start();
?>
<?php
 include "../fconnection2.php";
 if(($_SERVER['REQUEST_METHOD'] == 'POST')) {
	$place1=mysqli_real_escape_string($con, $_SESSION['place']);
	$checkin= mysqli_real_escape_string($con, $_REQUEST['checkin']);
	$checkout=mysqli_real_escape_string($con, $_REQUEST['checkout']);
	$nor=mysqli_real_escape_string($con, $_REQUEST['nor']);
	$noa=mysqli_real_escape_string($con, $_REQUEST['noa']);
	$noc=mysqli_real_escape_string($con, $_REQUEST['noc']);
	$email=mysqli_real_escape_string($con, $_REQUEST['email']);
	$Mobile=mysqli_real_escape_string($con, $_REQUEST['mobile']);
	$sql="insert into bookings values ('$place1','$checkin','$checkout','$nor','$noa','$noc','$email','$Mobile')";
	$sql1="select * from bookings";
	if(mysqli_query($con, $sql)){
		echo "Records added successfully.";
		header("location: gateway.html");
	} else{
		echo "ERROR: Could not able to execute  ";
	}
	mysqli_close($con);
 }	
?> 
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form </title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header" contentEditable="true">
							<h1>Booking</h1>
						</div>
						<div class="form-header">
						<?php
									if(isset($_GET['pl'])){
								$place = $_GET['pl'];}
								$_SESSION['place'] = $place;
								echo "<h1>  Let's go to $place</h1>";
		?>
							
						</div>
						<form action="" method="post">
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" required name="checkin" id="checkin">
										<span class="form-label">Check In</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" required name="checkout" id="checkout">
										<span class="form-label">Check out</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" required name="nor" id="nor">
											<option value="" selected hidden >no of rooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Rooms</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" required name="noa" id="noa">
											<option value="" selected hidden>no of adults</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" required name="noc" id="noc">
											<option value="" selected hidden>no of children</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Children</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="email" name="email" id="email" value="<?php echo $_SESSION['email']; ?>">
										<span class="form-label">Email</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="tel" name="mobile" id="mobile" value="<?php echo $_SESSION['mobile']; ?>">
										<span class="form-label">Phone</span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
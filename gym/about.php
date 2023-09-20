<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Gym Management System</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	<!-- Page Preloder -->
	

	<!-- Header Section -->
	<?php include 'include/header.php';?>
	<!-- Header Section end -->

	

	                                                                              
	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>our trainers</h2>
				</div>
			</div>
		</div>
	</section>



	<!-- Pricing Section -->
	<section class="pricing-section spad">
		
		<main class="grid">
		
			<article>
				<br>
				<h3>Lawrence</h3>
				<br>
				<img src="https://img.freepik.com/free-photo/boxing-male-standing-rack_158595-4822.jpg?w=360&t=st=1695147914~exp=1695148514~hmac=e212d811fbb5804d06046b8bc11d3ec7959f3ec1c1d95dc1e2723dffe59e6b39" alt="trainer1" class="round">
				<p>Lawrence is an exceptional kickboxing gym trainer, dedicated to honing your martial arts skills and sculpting your physique. With years of experience, his expertise ensures precise technique instruction, tailored fitness plans, and unwavering motivation. Train under Lawrence to unleash your full kickboxing potential and achieve unparalleled fitness results</p>
				
			</article>
			
			<article>
				<br>
				<h3>Robert</h3>
				<br>
				<img src="https://img.freepik.com/free-photo/man-doing-sport_181624-32005.jpg?w=360&t=st=1695149075~exp=1695149675~hmac=55459db8e33532e35f6388158308d268d0201863ed2e159eb3b21fe8990c9ff8" alt="fresh vegetables, fruit, eggs, and nuts" class="round">
				
				<p></p>
				<p>Meet Robert, your go-to boot camp specialist. With a passion for high-intensity workouts, he'll push you to your limits and beyond. Robert crafts challenging yet rewarding sessions that build strength, endurance, and mental resilience. Get ready to conquer your fitness goals and transform your life with Robert as your guide.</p>
				<p>
			</article>
			
			<article>
				<br>
				<h3>Sophia</h3>
				<br>
				<img src="https://img.freepik.com/free-photo/beautiful-smiling-fitness-girl_144627-11435.jpg?w=360&t=st=1695149166~exp=1695149766~hmac=0a03bf60a2ae2c28d9162f0d95667cb48595c45a862382718ec97ff4475371a6" alt="herb roasted chicken" class="round">
				
				<p>Sophia, our yoga and Zumba maestro, brings a unique blend of serenity and energy to your fitness journey. With a deep understanding of mind-body balance, she'll guide you through tranquil yoga flows and exhilarating Zumba routines. Discover inner peace and joyful movement under Sophia's expert guidance for a holistic wellness experience.</p>
			</article>
			
			
		
		</main>
	</section>
	

	
	

	<!-- Footer Section -->
	<?php include 'include/footer.php'; ?>
	<!-- Footer Section end -->

	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

<?php session_start();
error_reporting(0);
require_once('include/config.php');
if(strlen( $_SESSION["uid"])==0)
    {   
header('location:login.php');
}
else{
$uid=$_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>User | Class Schedule</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

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
					<h2>Class Schedule</h2>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Contact Section -->
	<section class="contact-page-section spad overflow-hidden">
		<div class="container">
			
			<div class="row">
				
				<div class="col-lg-12">
					<table class="table table-bordered" style="color:#fff">
    <thead >
    
				<caption>Group Fitness Class Schedule</caption>
				<tr><!-- Row 1 -->
					<th>Class</th>
					<th>Days</th>
					<th>Times</th>
					<th>Instructor</th>
					<th>Room</th>
				</tr>
				<tr><!-- Row 2 -->
					<td>Cardio</td>
					<td>Mon, Wed, Fri</td>
					<td>6:00am, 6:00pm</td>
					<td>Sophia</td>
					<td>B</td>
				</tr>
				<tr><!-- Row 3 -->
					<td>Boot Camp</td>
					<td>Tue, Thu</td>
					<td>5:00am, 5:00pm</td>
					<td>Lawrence</td>
					<td>B</td>
				</tr>
				<tr><!-- Row 4 -->
					<td>Spinning</td>
					<td>Tue, Thu</td>
					<td>6:00am, 6:00pm</td>
					<td>Robert</td>
					<td>A</td>
				</tr>
				<tr><!-- Row 5 -->
					<td>Kickboxing</td>
					<td>Mon, Wed, Fri</td>
					<td>8:00am, 7:15pm</td>
					<td>Lawrence</td>
					<td>A</td>
				</tr>
				<tr><!-- Row 6 -->
					<td>Yoga</td>
					<td>Tue, Thu</td>
					<td>6:00am, 6:00pm</td>
					<td>Sophia</td>
					<td>B</td>
				</tr>
				<tr><!-- Row 7 -->
					<td>Zumba</td>
					<td>Mon, Wed, Fri</td>
					<td>7:00am, 6:00pm</td>
					<td>Robert</td>
					<td>A</td>
				</tr>
			
			
    </thead>
         
                
  </table>
				</div>
			
			</div>
		</div>
	</section>
	<!-- Trainers Section end -->



	<!-- Footer Section -->
<?php include 'include/footer.php'; ?>
	<!-- Footer Section end -->
	
	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

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
 <style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #dd3d36;
    color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #5cb85c;
    color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
        <?php } ?>
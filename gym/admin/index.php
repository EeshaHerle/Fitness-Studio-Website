<?php  session_start();
error_reporting(0);
include  'include/config.php'; 
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Admin | Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include 'include/header.php'; ?>
    
    <section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Dashboard</h2>
					
				</div>
			</div>
		</div>
	</section>
          
        <div class="col-md-6 col-lg-6">
          <?php
                  $sql="SELECT count(id) as totalcat FROM tblcategory;";
                  $query= $dbh->prepare($sql);
                  $query-> execute();
                  $results = $query -> fetchAll(PDO::FETCH_OBJ);
                  foreach($results as $result)
                  {
                  ?>
                       <a href="add-category.php">  
          <div class="widget-small info coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>All Categories</h4>
              <p><b><?php echo $result->totalcat;?></b></p>
            </div>
          </div></a>
            <?php  } ?>
        </div>

  
        


        <div class="col-md-6 col-lg-6">
          <?php
                  $sql="SELECT count(id) as totalpost FROM tbladdpackage;";
                  $query= $dbh->prepare($sql);
                  $query-> execute();
                  $results = $query -> fetchAll(PDO::FETCH_OBJ);
                  $cnt=1;
                  if($query -> rowCount() > 0)
                  {
                  foreach($results as $result)
                  {
                  ?>

                   <a href="add-package.php">  
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-file fa-3x"></i>
            <div class="info">
              <h4>All Packages</h4>
              <p><b><?php echo $result->totalpost;?></b></p>
            </div>
          </div>
        </a>
            <?php  $cnt=$cnt+1; } } ?>
        </div>
      

        <div class="col-md-6 col-lg-6">
          <?php
                  $sql="SELECT count(id) as totalbookings FROM tblbooking;";
                  $query= $dbh->prepare($sql);
                  $query-> execute();
                  $results = $query -> fetchAll(PDO::FETCH_OBJ);
                  foreach($results as $result)
                  {
                  ?>
                  <a href="booking-history.php"> 
          <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>All Bookings</h4>
              <p><b><?php echo $result->totalbookings;?></b></p>
            </div>
          </div>
        </a>
            <?php  } ?>
        </div>

    
        


    


         
        
      
      
      

     

      

        
      
     
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    
  </body>
</html>
<?php } ?>
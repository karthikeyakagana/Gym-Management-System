<?php
require '../../include/db_conn.php';
page_protect();

?>
<!DOCTYPE html>
<html lang="en">
<head> 

    
    <center><title>CFG | Dashboard </title></center>

    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
     <style>
    	.page-container .sidebar-menu #main-menu li#dash > a {
    	background-color: #2b303a;
    	color: red;
		}

logo {
    height: 50px; 
    width: 50px; 
    
   border-radius: 50%
  
}
body{

  background-image: url('background2.jpg');
  
  background-repeat: no-repeat;
   background-attachment: fixed;
  
  
  background-size: 100% 100%;
}

 </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
    <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->

                        <div class="logo">
                            
			<a href = "index.php"><img src="logo2.png" alt = "CROSS FIT LOGO"></a>
			</div>
                      
                  	
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		
                   <div><div>


		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>

					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li style="color:white;">Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>					
						
							<li>
								<a href="logout.php"style="color:white;">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div></div>

			<h2 style="color:white;">Gym Dashboard</h2>

			

			<div class="col-sm-3"><a href="revenue_month.php">			
				<div class="tile-stats tile-blue">
					
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Income</h2>
						<?php
							date_default_timezone_set("Asia/Calcutta"); 
							$date  = date('Y-m');
							$query = "select * from enrolls_to WHERE  paid_date LIKE '$date%'";

							//echo $query;
							$result  = mysqli_query($con, $query);
							$revenue = 0;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							    	$query1="select * from plan where pid='".$row['pid']."'";
							    	$result1=mysqli_query($con,$query1);
							    	if($result1){
							    		$value=mysqli_fetch_row($result1);
							        $revenue = $value[4] + $revenue;
							    	}
							    }
							}
							echo "".$revenue;
							?>
						</div>
				</div></a>
			</div>
			

			<div class="col-sm-3"><a href="table_view.php">			
				<div class="tile-stats tile-blue">
					
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2 style="color:white;">Total Members</h2>	
							<?php
							$query = "select COUNT(*) from users";

							$result = mysqli_query($con, $query);
							$i      = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
						</div>
				</div></a>
			</div>	
				
			<div class="col-sm-3"><a href="over_members_month.php">			
				<div class="tile-stats tile-blue">
					
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2 style="color:white;">New Members</h2>
							<?php
							date_default_timezone_set("Asia/Calcutta"); 
							$date  = date('Y-m');
							$query = "select COUNT(*) from users WHERE joining_date LIKE '$date%'";

							//echo $query;
							$result = mysqli_query($con, $query);
							$i      = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
						</div>
				</div></a>			
			</div>

			<div class="col-sm-3"><a href="view_plan.php">			
				<div class="tile-stats tile-blue">
					
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Available Plans</h2>	
							<?php
							$query = "select COUNT(*) from plan where active='yes'";

							//echo $query;
							$result  = mysqli_query($con, $query);
							$i = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
						</div>
				</div></a>
			</div>
			

			
   
    	<?php include('footer.php'); ?>
</div>

  
    </body>
</html>

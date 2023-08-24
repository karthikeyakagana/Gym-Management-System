<?php
require '../../include/db_conn.php';
page_protect();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>CFG | Detail Routine</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<style>
    	.page-container .sidebar-menu #main-menu li#routinehassubopen > a {
    	background-color: #2b303a;
    	color: red;
		}
body {
  background-image: url('background8.jpg');
  background-repeat: no-repeat;
   background-attachment: fixed;
  
  
  background-size: 100% 100%;
}
    </style>
	<script>
	function myFunction()
	{
		var prt=document.getElementById("print");
		var WinPrint=window.open('','','left=0,top=0,width=800,height=900,tollbar=0,scrollbars=0,status=0');
		WinPrint.document.write(prt.innerHTML);
		WinPrint.document.close();
		WinPrint.focus();
		WinPrint.print();
		WinPrint.close();
		setPageHeight("297mm");
		setPageWidth("210mm");
		setHtmlZoom(100);
		//window.location.replace("index.php?query=");
	}
	</script>

</head>
     <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div >
		
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
					
				</div>
				<h2 style="color:white;">Routine Detail</h2>
				<hr/>

		<?php
		$id=$_GET['id'];
		$sql="Select * from timetable t Where t.tid=$id";
		$res=mysqli_query($con, $sql);
					 if($res){
						      	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
				
						      }
						
		?>

		
			<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-transparent" style="width:600px; margin:0 auto;">
		<div class="a1-container a1-transparent a1-center">
        	<h6 style="color:white;">EDIT ROUTINE</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="updateroutine.php">
		<table width="519" height="573" border="0" align="center">
			<tr>
				<td><input type="hidden" name='tid' value='<?php echo $id?>'></td>
			</tr>
  <tr>
  	<td width='186' height='103'style="color:white;">Routine Name:</td>
    <td height="87" colspan="2"><input type="text" name='routinename' value='<?php echo $row['tname'] ?>'></td>
    </tr>
  <tr>
    <td width="186" height="103"style="color:white;">Day 1:</td>
    <td width="417"><textarea style="resize:none; margin: 0px; width: 230px; height: 53px;" name="day1" id="boxxe" ><?php echo $row['day1'] ?></textarea></td>
  </tr>
  <tr>
    <td height="96"style="color:white;">Day 2:</td>
    <td><textarea style="resize:none; margin: 0px; width: 230px; height: 53px;" name="day2" id="boxxe" ><?php echo $row['day2'] ?></textarea></td>
  </tr>
  <tr>
    <td height="87"style="color:white;">Day 3:</td>
    <td><textarea style="resize:none; margin: 0px; width: 230px; height: 53px;"  name="day3" id="boxxe" ><?php echo $row['day3'] ?></textarea></td>
  </tr>
  <tr>
    <td height="92"style="color:white;">Day 4:</td>
    <td><textarea style="resize:none; margin: 0px; width: 230px; height: 53px;"  name="day4" id="boxxe" ><?php echo $row['day4'] ?></textarea></td>
  </tr>
  <tr>
    <td height="84"style="color:white;">Day 5:</td>
    <td><textarea style="resize:none; margin: 0px; width: 230px; height: 53px;"  name="day5" id="boxxe" ><?php echo $row['day5'] ?></textarea></td>
  </tr>
  <tr>
    <td height="75"style="color:white;">Day 6:</td>
    <td><textarea style="resize:none; margin: 0px; width: 230px; height: 53px;"  name="day6" id="boxxe" ><?php echo $row['day6'] ?></textarea></td>
  </tr>
  <tr>
               <td height="35">&nbsp;</td>
               <td height="35">
			  <input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Update">
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
        </table>
    </form></div>
    </div>   

			

    	</div>

    </body>
	<?php include('footer.php'); ?>
</html>


										


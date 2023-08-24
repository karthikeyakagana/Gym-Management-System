<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>CFG| New User</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
    <link href="a1style.css" type="text/css" rel="stylesheet">
    <style>
    	.page-container .sidebar-menu #main-menu li#regis > a {
    	background-color: #2b303a;
    	color: red;
		}
       #boxx
	{
		width:220px;
	}
	logo {
    height: 40px; 
    width: 40px; 
    
   border-radius: 50%
  
}
body{

  background-image: url('background3.jpg');
  
  background-repeat: no-repeat;
   background-attachment: fixed;
  
  
  background-size: 100% 100%;
}
</style>

</head>
      <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
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

		
        	<h3 style="color:white;">New Registration</h3>

		
        
        <div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 al-transparent" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-transparent a1-center">
        	<h6 style="color:white;">NEW ENTRY</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="new_submit.php">
         <b><table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35"style="color:white;">MEMBERSHIP ID:</td>
           	   <td height="35"style="color:white;"><input type="text" id="boxx" name="m_id" value="<?php echo time(); ?>" readonly required/></td>
         	   </tr>
			   
			   <tr>
               <td height="35"style="color:white;">NAME:</td>
               <td height="35"><input name="u_name" id="boxx"  required/></td>
             </tr>
             <tr>
               <td height="35"style="color:white;">STREET NAME:</td>
               <td height="35"><input  name="street_name" id="boxx"   required/></td>
             </tr>
             <tr>
               <td height="35"style="color:white;">CITY:</td>
               <td height="35"><input <input type="text" name="city" id="boxx" required/ ></td>
             </tr>
             <tr>
               <td height="35"style="color:white;">ZIPCODE:</td>
               <td height="35"><input type="number" name="zipcode" id="boxx" maxlength="6" required / ></td>
             </tr>
            <tr>
               <td height="35"style="color:white;">STATE:</td>
               <td height="35"><input type="text" name="state" id="boxx" required/ size="30"></td>
             </tr>
            <tr>
               <td height="35"style="color:white;">GENDER:</td>
               <td height="35"><select name="gender" id="boxx" required>

					<option value="">--Please Select--</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select></td>
             </tr>
            <tr>
               <td height="35"style="color:white;">DATE OF BIRTH:</td>
               <td height="35"><input type="date" name="dob" id="boxx" required/ size="30"></td>
             </tr>
			 <tr>
               <td height="35"style="color:white;">PHONE NO:</td>
               <td height="35"><input type="number" name="mobile" id="boxx" maxlength="10" required/ size="30"></td>
             </tr>
			  <tr>
               <td height="35"style="color:white;">EMAIL ID:</td>
               <td height="35"><input type="email" name="email" id="boxx" required/ size="30"></td>
             </tr>
			 <tr>
               <td height="35"style="color:white;">JOINING DATE:</td>
               <td height="35"><input type="date" name="jdate" id="boxx" required size="30"></td>
             </tr>
             <tr>
               <td height="35"style="color:white;">PLAN:</td>
               <td height="35"><select name="plan" id="boxx" required onchange="myplandetail(this.value)">
					<option value="">--Please Select--</option>
					<?php
						$query="select * from plan where active='yes'";
						$result=mysqli_query($con,$query);
						if(mysqli_affected_rows($con)!=0){
							while($row=mysqli_fetch_row($result)){
								echo "<option value=".$row[0].">".$row[1]."</option>";
							}
						}

					?>
					
				</select></td>
             </tr>
			
	    <tbody id="plandetls">
             
            </tbody>

             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Register" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
           </table></b></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   
        
        <script>
        	function myplandetail(str){

        		if(str==""){
        			document.getElementById("plandetls").innerHTML = "";
        			return;
        		}else{
        			if (window.XMLHttpRequest) {
           		 // code for IE7+, Firefox, Chrome, Opera, Safari
           			 xmlhttp = new XMLHttpRequest();
       				 }
       			 	xmlhttp.onreadystatechange = function() {
            		if (this.readyState == 4 && this.status == 200) {
               		 document.getElementById("plandetls").innerHTML=this.responseText;
                
            			}
        			};
        			
       				 xmlhttp.open("GET","plandetail.php?q="+str,true);
       				 xmlhttp.send();	
        		}
        		
        	}
        </script>
        
        
			<?php include('footer.php'); ?>
    	</div>

    </body>
</html>


<?php
	session_start();
//include ('session.php');
	$currentUser=$_SESSION['currentUser'];
?>
<html>

   <head>
      <title>AIUB BOOK STORE</title>
	  	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
a{	
	    text-decoration: none;

}

table{
	border-collapse: collapse;
}
.table th{
	text-align:left;
	background-color: #106120;
	color : white;
	padding: 4px 30px 4px 8px; 
	
}
.table td{
	border : 1px solid #e3e3e3;
	padding : 4px 8px;
	
	
}
.table tr:nth-child(odd) td{
	background-color: #cccfcb;
}
</style>
   </head>

   <body>
      <table width = "100%" height="">
         
         <tr>
            <td colspan = "2" bgcolor = "steelblue" align="right" >
               <h1 style="color:white" align="center">AIUB BOOK STORE</h1>
			    <a href="card.php"  > <i  title="Shoping Card"  style=" position: absolute;top:40px;left:1250px;font-size:20px;color:white" class="fa fa-cart-plus" > Card</i></a>

			   <a href="../admin/viewpro.php"  ><b style="color:white"><font size="4.5" >Logged in as<font size="5"> <?php  echo $currentUser['name']; ?></font> </font></b></a>
				<b>|</b>
				<a href="../table/login.php" ><b style="color:white"><font size="4.5">Logout</font></a> 
            </td>
         </tr>
         <tr valign = "top" height="500">
            <td bgcolor = "#48D1CC" width ="">
               <b>Account</b><br /><hr/>
			   <ul>
            <h3>
				 <a href="../admin/bord.php"> <li> Dashbord</a><br />
				 <a href="../admin/adminpro.php"> <li> View Profile</a><br />
				 <a href="../admin/editpro.php"> <li>Edit Profile</a><br />
				 <a href="../admin/profile.php"> <li> Change Profile Picture</a><br />
				<a href="../admin/reset_password.php">  <li> Change Password</a><br />
				<a href="../table/login.php">  <li> Logout</a><br />
							
				
			</h3>
			   </ul><hr/>
			   
			   <b>User</b><br /><hr/>
			      <ul>
            <h3>
				 <a href="../table/userdetail.php"> <li> uesr details</a><br />
				 <a href="../table/orderdetail.php"> <li> Order details</a><br />
				 <a href="../admin/viewpro.php"> <li> Edit profile</a><br />
			</h3>
			   
			   
            </td>
			
			
            
            <td bgcolor = "#eee" width = "1050" height = "200">
			
			<!--h3>Academic Qualification:</h3-->
<table border="0" align="center" class="table" >
	<tr>
	    <th>serial No.</th>
		<th>Item Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Total</th>
		<th>Action</th>
		<!--th>pass Year</th-->
	</tr>
	
	<tr>	<td>saki mahmud galib</td> <td>galib@gmail.com </td> <td>galib</td> <!--b align="center" style="position:absolute;top:130px;right:260px"--><td>00.00</td> <td>00.00</td> <td><a href="order.php">Order</a> | <a href="">Remove</a></td> </tr>
	<tr>	<td>foysal bin</td> <td>g@gmail.com </td> <td>sakib</td>  <!--b align="center" style="position:absolute;top:150px;right:260px"--><td>00.00 <td>00.00</td> <td><a href="order.php">Order</a> | <a href="">Remove</a></td> </tr>
	<tr>	<td>mehedi hasan</td> <td>a@gmail.com </td> <td>foysal</td> <!--b align="center" style="position:absolute;top:170px;right:260px"--><td>00.00</td> <td>00.00</td> <td><a href="order.php">Order</a> | <a href="">Remove</a></td> </tr>
	
	


</table><br/>

<table align="" width="70%">
<tr><td>
</table>


              <!-- ADD YOUR CODE HERE...<font size="6"><?php echo $_REQUEST['auname']; ?></font-->
            </td>
         </tr>
         <tr>
            <td colspan = "2" bgcolor = "steelblue">
               <center style="color:white">
                  Copyright © 2017
               </center>
            </td>
         </tr>
         
      </table>
   </body>

</html>

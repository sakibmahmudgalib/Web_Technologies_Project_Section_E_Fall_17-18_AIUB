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


</style>
   </head>

   <body>
      <table width = "100%" height="">
         
         <tr>
            <td colspan = "2" bgcolor = "steelblue" align="right" >
               <h1 style="color:white" align="center">AIUB BOOK STORE</h1>
			    <a href="../table/card.php"  > <i  title="Shoping Card"  style=" position: absolute;top:40px;left:1250px;font-size:20px;color:white" class="fa fa-cart-plus" > Card</i></a>

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
				<a href="../table/login.php">  <li> Logout</a><br /><br/>
				
				 
			</h3>
			
			   </ul>
			   
			 <hr/> <b>Users</b><br /><hr/>
				
				  <ul>
            <h3>
				 <a href="../table/userdetail.php"> <li>User details</a><br />
				 				 <a href="../table/orderdetail.php"> <li> Order details</a><br />

				 <a href="../admin/viewpro.php"> <li>Edit user</a><br />
			 
            </td>
            
            <td bgcolor = "#eee" width = "1050" height = "200">
               
			   
<table  align="center" width="100%" >




<form action="../table/passHandler.php">
<fieldset>
<legend>CHANGE PASSWORD</legend>	
<b style="color:">Current Password &nbsp &nbsp &nbsp &nbsp   : </b> <input  type="password" name="old"/><br/><br/>
<b style="color:">New Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input  type="password" name="new"/><br/><br/>
<b style="color:">Retype New Password : </b> <input  type="password" name="rnew"/><br/><br/><hr/>
<input type="submit" value="Save"/>

</fieldset>


</form>



</td>
</tr>
</table><br/>

</form>

			   
            </td>
         </tr>
         <tr>
            <td colspan = "2" bgcolor = "steelblue">
               <center style="color:white">
                  Copyright © 2007
               </center>
            </td>
         </tr>
         
      </table>
   </body>

</html>
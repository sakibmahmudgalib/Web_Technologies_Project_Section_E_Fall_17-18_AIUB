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
			    <a href="card.php"  > <i  title="Shoping Card"  style=" position: absolute;top:40px;left:1250px;font-size:20px;color:white" class="fa fa-cart-plus" > Card</i></a>

			   <b style="color:white"><font size="4.5" >Logged in as <font size="5"> <a href="../table/login.php"  > <?php  echo $currentUser['name']; ?> </a> </font> </font></b>
				<b>|</b>
				<a href="../table/login.php" ><b style="color:white"><font size="4.5">Logout</font></a> 
            </td>
         </tr>
         <tr valign = "top" height="500">
            <td bgcolor = "#48D1CC" width ="">
               <b>Account</b><br /><hr/>
			   <ul>
            <h3>
				 <a href="../table/bord.php"> <li> Dashbord</a><br />
				 <a href="../table/viewpro.php"> <li> View Profile</a><br />
				 <a href="../table/editpro.php"> <li>Edit Profile</a><br />
				 <a href="../table/profile.php"> <li> Change Profile Picture</a><br />
				<a href="../table/reset_password.php">  <li> Change Password</a><br />
				<a href="../table/login.php">  <li> Logout</a><br />
			</h3>
			   </ul>
            </td>
            
            <td bgcolor = "#eee" width = "1050" height = "200">
               ADD YOUR CODE HERE...<font size="6"><?php echo $currentUser['uname']; ?></font>
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

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

			   <a href="../table/home.php"  ><b style="color:white"><font size="4.5" >Logged in as<font size="5"> <?php  echo $currentUser['name']; ?></font> </font></b></a>
				<b>|</b>
				<a href="../table/login.php" ><b style="color:white"><font size="4.5">Logout</font></a> 
            </td>
         </tr>
         <tr valign = "top" height="500">
            <td bgcolor = "#48D1CC" width ="">
               <b>Account</b><br /><hr/>
			   <ul>
            <h3>
				 <a href="bord.php"> <li> Dashbord</a><br />
				 <a href="viewpro.php"> <li> View Profile</a><br />
				 <a href="editpro.php"> <li>Edit Profile</a><br />
				 <a href="profile.php"> <li> Change Profile Picture</a><br />
				<a href="reset_password.php">  <li> Change Password</a><br />
				<a href="../table/login.php">  <li> Logout<br />
			</h3>
			   
			   </ul>
            </td>
            
            <td bgcolor = "#eee" width = "1050" height = "200">
               
			   <form action="handler.php">

<fieldset>
<legend>Profile Picture</legend>
<img src="img_profile.png"/><br/>
<b>Picture</b> <input name="picture" type="file"/><br/><br/>
<input type="submit" value="Change"/><br/><br/>
<!--<b>Validation Rules:</b>
	<p>
	i. UserId cannot be empty and has to be a positive number<br/>
    ii. Picture cannot be empty
	</p>
	-->
</fieldset>
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
<?php
	session_start();
//include ('session.php');
	$currentUser=$_SESSION['currentUser'];
?>
   <form action="edithandler.php">

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
				 <a href="editpro.php"> <li>Edit Profile</a><br />
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

				 <a href="../admin/editpro.php"> <li>Edit user</a><br />
			 
            </td>
            
            <td bgcolor = "#eee" width = "1050" height = "200">
               
			   <form action="edithandler.php">
<fieldset>
<legend>Edit Profile</legend>

<b>Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : </b> <input name="name" type="text" value="<?php  echo $currentUser['name']; ?>"/><br/><hr/>
<b>Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="email" type="text" value="<?php  echo $currentUser['email']; ?>"/><img src="i.png"width="30" title="example@gmail.com"/><br/><hr/>
<!--b>User Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    : </b> <input name="name" type="text" /><br/><hr/>
<b>Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp     : </b> <input name="name" type="text" /><br/><hr/>
<b>Confirm Password &nbsp : </b> <input name="name" type="text" /><br/><hr/-->


<b>Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b>
<?php $m="male";$f="female";$o="other"?>
<input name="gender" type="radio" value="male" checked="<?php if ($currentUser['gender'] == $m){ echo 'checked'; } ?>"/>Male
<input name="gender" type="radio" value="female" checked="<?php if ($currentUser['gender'] == $f){ echo 'checked'; } ?>"/>Female
<input name="gender" type="radio" value="other" checked="<?php if ($currentUser['gender'] == $o){ echo 'checked'; } ?>"/>Other<br/><br/>




<table  >
<td><b>Date of Birth  &nbsp &nbsp &nbsp &nbsp &nbsp :</b>
<td>dd<br/><input name="dd" type="text"  value="<?php echo $currentUser['dd'];?>" / >  /
<td>mm<br/><input name="mm" type="text"  value="<?php echo $currentUser['mm'];?>"/> /
<td>yyyy<br/><input name="yyyy" type="text" value="<?php echo $currentUser['yyyy'];?>"/ ><td>
</td>

</table>
<hr/>

<b>Type  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b>
<select name="type">
	
	<option ></option>
	<option value="Admin">Admin</option>	
	<option value="user">User</option>
	<option value="block">Block</option>
	
</select>
<hr/>
<b>Joined &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b><input type="text" value="since "/><hr/>


<a href="adminpro.php"><button type="button">Update</button></a>
<input type="reset" value="Reset"/>&nbsp
<a href="../admin/viewpro-del.php"><button type="button">Delete</button></a>
&nbsp <a href="../table/userdetail.php">go back?</a>

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
</form>	
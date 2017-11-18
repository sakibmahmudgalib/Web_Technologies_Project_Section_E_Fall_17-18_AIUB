<?php
	session_start();
//include ('session.php');
	$currentUser=$_SESSION['currentUser'];
?>
<form action="passHandler.php">
<header>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
a{	
	    text-decoration: none;

}


</style>
 </header>
<table  align="center" width="100%" >
<tr bgcolor = "steelblue"><!-- style="background-image:url('h.jpg ');background-repeat:no-repeat;background-size:100%;width="50%"" -->
	<td align="right" style="color:white" ><!--img src="b.png" align="left" width="150" /--><font size="6"><center><b><p>Reset Password</p></center></b></font>
	 <a href="card.php"  > <i  title="Shoping Card"  style=" position: absolute;top:40px;left:1250px;font-size:20px;color:white" class="fa fa-cart-plus" > Card</i></a>

	<a href="../table/home.php" ><b style="color:white"><font size="4">Home</font></b></a>
	<b>|</b>
	<a href="../table/login.php" ><b style="color:white"><font size="4">Login</font></a> 
	<b>|</b>
	<a href="../table/registation.php" ><b style="color:white"><font size="4">Registration</font></a><br/>	
	</td>

</tr>

<tr ><!-- style="background-image:url('h.jpg ');background-repeat:no-repeat;background-position:center;background-size:100%;width="50%"" height="500" --> 
<td>

<form action="passHandler.php">
<fieldset>

<legend>CHANGE PASSWORD</legend>	
<b style="color:">Current Password &nbsp &nbsp &nbsp &nbsp   : </b> <input  type="password" name="old"/><br/><br/>
<b style="color:">New Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input  type="password" name="new"/><br/><br/>
<b style="color:">Retype New Password : </b> <input  type="password" name="rnew"/><br/><br/>

<input type="submit" value="Save"/>

</fieldset>


</form>



</td>
</tr>
</table><br/>

</form>

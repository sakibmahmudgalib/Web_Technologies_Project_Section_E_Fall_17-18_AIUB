<?php
	session_start();
//include ('session.php');
	$currentUser=$_SESSION['currentUser'];
?>
<form action="regihandler.php">

<head>
      <title>AIUB BOOK STORE</title>
	  	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
a{	
	    text-decoration: none;

}


</style>
   </head>
   
<table  align="center" width="100%"  >
<tr bgcolor = "steelblue"><!-- style="background-image:url('ab.jpg ');background-repeat:no-repeat;background-size:100%;width="50%" height="40" -->
	<td align="right" style="color:white" ><!--img src="b.png" align="left" width="150" /--><font size="6"><center><b><p>Registration</p></center></b></font>
	 <a href="card.php"  > <i  title="Shoping Card"  style=" position: absolute;top:40px;left:1250px;font-size:20px;color:white" class="fa fa-cart-plus" > Card</i></a>

	<a href="home.php" ><b style="color:white"><font size="4">Home</font></b></a>
	<b>|</b>
	<a href="login.php" ><b style="color:white"><font size="4">Login</font></a> 
	<b>|</b>
	<a href="registation.php" ><b style="color:white"><font size="4">Registration</font></a><br/>	
	
	</td>

</tr>

<tr ><!--style="background-image:url('ab.jpg ');background-repeat:no-repeat;background-position:center;background-size:100%;width="50%"" height="500" --> <td>

<legend>Registration</legend>

<b style="color:">Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  :  </b> <input name="name" type="text" /><br/><br/>
<b style="color:">Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="email" type="text"/><img src="i.png"width="30" title="example@gmail.com"/> <br/><br/>
<b style="color:">User Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : </b> <input name="uname" type="text" /><br/><br/>
<b style="color:">Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="password" type="password" /><br/><br/>
<b style="color:">Confirm Password &nbsp : </b> <input name="password" type="password" /><br/><br/><br/>


<legend style="color:">Gender :</legend>
<input name="gender" type="radio" value="male" /><b style="color:">male
<input name="gender" type="radio" value="female"/>Female
<input name="gender" type="radio" value="other"/>Other<br/><br/>



<legend style="color:">Date of Birth :</legend>
<table >
<td style="color:">dd<br/><input name="dd" type="text" / >  /
<td style="color:">mm<br/><input name="mm" type="text"/ > /
<td style="color:">yyyy<br/><input name="yyyy" type="text"/ ><td style="color:">(dd/mm/yyyy)
</td>

</table><br/><br/>


	<input type="submit" value="Submit"/>&nbsp &nbsp
	<input type="reset" value="Reset"/>





</td>
</tr>
</table><br/>

</form>

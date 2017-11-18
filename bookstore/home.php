<?php
	session_start();
//include ('session.php');
	$currentUser=$_SESSION['currentUser'];
?>
<form action="../table/loginHandler.php">

<head>
      <title>AIUB BOOK STORE</title>
	  	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.table th{
	text-align:left;
	background-color: #106120;
	color : white;
	padding: 4px 30px 4px 8px; 
	
}
.table td{
	
	border : 1px solid #e3e3e3;
	padding : 4px 3px;
	background-color: #b7bab6;
	
	
}	

</style>		  
		  
   </head>
   
<table  align="center"  width="100%">

<tr bgcolor = "steelblue"><!--style="background-image:url('f.jpg ');background-repeat:no-repeat;background-size:100%;width="50%" height="40" -->
	<td align="right" style="color:white"><!--img src="b.png" align="left" width="150" /--><font size="6"><center><b><p>AIUB BOOK STORE</p></center></b></font>
 <a href="card.php"  > <i  title="Shoping Card"  style=" position: absolute;top:40px;left:1250px;font-size:20px;color:white" class="fa fa-cart-plus" > Card</i></a>

	<a href="../table/home.php" ><b style="color:white"><font size="4">Home</font></b></a>
	<b>|</b>
	<a href="../table/login.php" ><b style="color:white"><font size="4">Logout</font></a> 
	<b>|</b>
	<a href="../table/registation.php" ><b style="color:white"><font size="4">Registration</font></a><br/>	
	</td>


<div >
<!--	<style>
	body{
	background-image:url('a.jpg ');
	background-repeat:no-repeat;
	background-position:center;
	background-size:100%
	}
	</style>-->
<body >
<table  class="table"  >
<tr align="" ><!--style="background-image:url('f.jpg ');background-repeat:no-repeat;background-position:center;background-size:100%;width="50%"" height="500"--> <td>




<legend>LOGIN</legend>	<br/>
<b style="color:">User Name : </b> <input name="uname" type="text" placeholder="Enter User Name" /><br/><br/>
<b style="color:">Password &nbsp &nbsp: </b> <input name="password" type="password" placeholder="Enter Password" /><br/><br/>
<input  type="checkbox"/><b style="color:">Remember Me</b><br/><br/>

<input type="submit" value="login"/>



<b><a href="forgotpass.php" style="color:red">Forgot Password?</a></b><br/><br/>


		<?php
		if(isset($_GET['error']))
	{
		echo '<font color="red"<b>Invalid username or password</b></font>';
	}
	?>


</td>


</tr>
</form>
</table>
<table align="center" class="table" style="position:absolute;top:40%;left:40%" >

<tr><!--style="background-image:url('ab.jpg ');background-repeat:no-repeat;background-position:center;background-size:100%;width="50%"" height="500" -->
 <td>

<!--legend>Registration</legend><br/-->
<b> <font size="5" style="color:#6e1a1a"> No Account?  sign up here </font> </b><br/><br/>
<b style="color:">Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  :  </b> <input name="name" type="text" /><br/><br/>
<b style="color:">Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="email" type="text" title="example@gmail.com"/><!--img src="i.png"width="30" title="example@gmail.com"/--> <br/><br/>
<b style="color:">User Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : </b> <input name="uname" type="text" /><br/><br/>
<b style="color:">Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="password" type="password" /><br/><br/>
<b style="color:">Confirm Password &nbsp : </b> <input name="password" type="password" /><br/><br/><br/>




	<input type="submit" value="Submit"/>&nbsp &nbsp
	<input type="reset" value="Reset"/>









</td>
     </tr>
		
		 <table align="center" width="100%" style="position:absolute;top:100%">
          <tr  >
		  
            <td colspan = "2" bgcolor = "steelblue">
               <center style="color:white">
                  Copyright © 2017
               </center>
            </td>
			
         </tr>
        
      </table>
	  </table>
	   
   </body>

</html>

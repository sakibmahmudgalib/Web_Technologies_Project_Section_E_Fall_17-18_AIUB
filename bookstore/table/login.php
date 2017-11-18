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

div.normal {
    margin: 10px;
    
    float:left ;
    width: 160px;
	
	
}
div.gallery {
    margin: 10px;
    border: 1px solid #ccc;
    float:left ;
    width: 160px;
	
	
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
	
    width: 100%;
    height: auto;
}

div.desc {
	
    padding: 15px;
    text-align: center;
}
div.card {
	border: 0px solid #ccc;
   
    text-align: center;
}



div.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  padding: 2px;
  background-color: steelblue;
  text-align: right;
  border: 2px solid #4CAF50;
}

div.sticky1 {
  position: -webkit-sticky;
  position: sticky;
  top: 102;
  padding: 10px;
  background-color:#039fad;
  text-align: right;
  border: 0px solid #4CAF50;
  
}

div.space{
	word-spacing: 18px;
	
	font-size:20px;
}

a{	
	    text-decoration: none;

}

 a:hover {
	 text-decoration: none;
    background-color: #4f4a4a;
    color: white;
}	

</style>		  
		  
   </head>
   
  <table width = "100%" height="">
      <div class="sticky">
		 
         <!--tr -->
		
            <!--td colspan = "2" bgcolor = "steelblue" align="right" -->
			 
               <h1 style="color:white" align="center">AIUB BOOK STORE</h1>
			  <a href="card.php"  > <i  title="Shoping Card"  style=" position: absolute;top:40px;left:1250px;font-size:20px;color:white" class="fa fa-cart-plus" > Card</i></a>
			   <a href="../table/home.php" ><b style="color:white" ><font size="4">Home</font></b></a>
	<b>|</b>
<a href="../table/login.php" ><b style="color:white"><font size="4">Logout</font></a> 
	<b>|</b>
	<a href="../table/registation.php" ><b style="color:white"><font size="4">Registration</font></a><br/>	
</b>

</center>
	<!--/td-->
	
         <!--/tr-->
 </div>
  <tr valign = "top" align="left" >
		  
           
			
			
   <div class="sticky1">
   <div class="space">
   
   
            
				<b > <a href="../admin/bord.php"style="color:white" >  Discover</a></b>
				<b> <a href="../admin/adminpro.php"style="color:white">  TopBooks</a></b>
				<b> <a href="../admin/editpro.php"style="color:white;word-spacing:0px"> coming Soon</a></b>
				<b> <a href="../admin/profile.php"style="color:white">  Recommended</a></b>
				<b><a href="../admin/reset_password.php"style="color:white">  Genres</a></b>
				<!--a href="../table/login.php">  <li> Logout</a><br /><br/-->
				

				<b> <a href="../table/userdetail.php"style="color:white"> Reading</a></b>
				<b> <a href="../admin/viewpro.php"style="color:white"> History</a></b>
				<b> <a href="../admin/viewpro.php"style="color:white;word-spacing:0px"> Read Later</a></b>
				<b><a href="../admin/viewpro.php"style="color:white"> Favourates</a></b>
				
				<b><input type="text" placeholder="Search" style="padding:2px"/><a class="c" href="" style="word-spacing:0px"><!--button  style="width:45px;padding:2px" title="search"--><i style="color:white;padding:2px" class="fa fa-search"></i><!--/button--></a></b>
          
		   </div>
		   </div>
           </tr>
 
 
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
		if(isset($_GET['error1']))
	{
		echo '<font color="red"<b>Invalid username or password</b></font>';
	}
	?>


</td>


</tr>
</form>
</table>

<table align="center" class="table" style="position:absolute;top:40%;left:40%" >
<form action="regihandler1.php">
<tr><!--style="background-image:url('ab.jpg ');background-repeat:no-repeat;background-position:center;background-size:100%;width="50%"" height="500" -->
 <td>

<!--legend>Registration</legend><br/-->
<b> <font size="5" style="color:#6e1a1a"> No Account?  sign up here </font> </b><br/><br/>
<b style="color:">Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  :  </b> <input name="name" type="text" />
<?php
		if(isset($_GET['errors3']))
	{
		echo '<font color="red"<b>Invalid Name</b></font>';
	}
	?><br/><br/>
<b style="color:">Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="email" type="text" title="example@gmail.com"/><!--img src="i.png"width="30" title="example@gmail.com"/-->
<?php
		if(isset($_GET['errors1']))
	{
		echo '<font color="red"<b>Invalid Email</b></font>';
	}
	?> <br/><br/>
<b style="color:">User Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : </b> <input name="uname" type="text" />
<?php
		if(isset($_GET['errors4']))
	{
		echo '<font color="red"<b>Invalid username </b></font>';
	}
	?><br/><br/>
<b style="color:">Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="password" type="password" />
<?php
		if(isset($_GET['errors2']))
	{
		echo '<font color="red"<b>Invalid  Password</b></font>';
	}
	?><br/><br/>
<b style="color:">Confirm Password &nbsp : </b> <input name="cpassword" type="password" />
<?php
		if(isset($_GET['errors5']))
	{
		echo '<font color="red"<b>Invalid Password</b></font>';
	}
	?><br/><br/><br/>




	<input type="submit" value="Submit"/>&nbsp &nbsp
	<input type="reset" value="Reset"/>


<br/><br/>

<?php
		if(isset($_GET['errors']))
	{
		echo '<font color="red"<b>File can not be empty</b></font>';
	}
?>

<?php
		if(isset($_GET['error0']))
	{
		echo '<font  color="green"<b>Registration Successful		</b></font>';
	}
?>



</td>
     </tr>
	 </form>
		
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

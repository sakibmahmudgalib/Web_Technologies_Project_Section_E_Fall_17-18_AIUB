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
ul{
    list-style-type: none;
}
/* a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}
*/
/* Change the link color on hover */
 a:hover {
	 text-decoration: none;
    background-color: #4f4a4a;
    color: white;
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
  background-color: #039fad;
  text-align: right;
  border: 0px solid #4CAF50;
  
}

div.space{
	word-spacing: 18px;
	
	font-size:20px;
}


.a {
    background-color: green;
	border-radius:28px;
	padding:6px 31px;
    color: white;
    
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

.a:hover{
	background-color: red;
}
.c{
	background-color: ;
}
.c:hover{
	background-color: black;
}
.c:active{
	background-color: green;
}
.a:active {
    background-color: #2df50a;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
	  
 </style>
	  
   </head>

   <body>
      <table width = "100%" height="">
      <div class="sticky">
		 
         <!--tr -->
		
            <!--td colspan = "2" bgcolor = "steelblue" align="right" -->
			 
               <h1 style="color:white" align="center">AIUB BOOK STORE</h1>
			  <a href="card.php"  > <i  title="Shoping Card"  style=" position: absolute;top:40px;left:1250px;font-size:20px;color:white" class="fa fa-cart-plus" > Card</i></a>
			   <a href="../table/home.php" ><b style="color:white" ><font size="4">Home</font></b></a>
	<b>|</b>
<a href="../table/login.php" ><b style="color:white"><font size="4">Login</font></a> 
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
 
	<tr>
         <td bgcolor = "#eee" align="left" height="900" valign = "top" >
	    <!--   ADD YOUR CODE HERE...<font size="6"><?php echo $currentUser['name']; ?></font-->
			   
<div class="normal">			   
<div class="gallery">
  <a target="_blank" href="orderhistory.php">
    <img src="e.jpg" alt="Trolltunga Norway" width="600" height="400">
  
  <div class="desc">Add a description of the image here</div>
  
  </a>
  </div>
  <div class="card"> <a class="a" href="card.php"> Add to card </a> </b></div>

</div>
<div class="normal">
<div class="gallery">
  <a target="_blank" href="orderhistory.php">
    <img src="e.jpg" alt="Forest" width="600" height="400">
  
  <div class="desc">Add a description of the image here</div>
  </a>
  </div>
    <div class="card"> <a class="a" href="card.php"> Add to card </a> </b></div>

</div>
<div class="normal">
<div class="gallery">
  <a target="_blank" href="orderhistory.php">
    <img src="e.jpg" alt="Northern Lights" width="600" height="400">
  
  <div class="desc">Add a description of the image here</div>
  </a>
  </div>
    <div class="card"> <a class="a" href="card.php"> Add to card </a> </b></div>

</div>
<div class="normal">
<div class="gallery">
  <a target="_blank" href="orderhistory.php">
    <img src="e.jpg" alt="Mountains" width="600" height="400">
 
  <div class="desc">Add a description of the image here</div>
  </a>
  </div>
    <div class="card"> <a class="a" href="card.php"> Add to card </a> </b></div>

</div>

<div class="normal">			   
<div class="gallery">
  <a target="_blank" href="orderhistory.php">
    <img src="e.jpg" alt="Trolltunga Norway" width="600" height="400">
  
  <div class="desc">Add a description of the image here</div>
  </a>
  </div>
    <div class="card"> <a class="a" href="card.php"> Add to card </a> </b></div>

</div>
<div class="normal">
<div class="gallery">
  <a target="_blank" href="orderhistory.php">
    <img src="e.jpg" alt="Forest" width="600" height="400">
  
  <div class="desc">Add a description of the image here</div>
  </a>
  </div>
    <div class="card"> <a class="a" href="card.php"> Add to card </a> </b></div>

</div>
<div class="normal">
<div class="gallery">
  <a target="_blank" href="orderhistory.php">
    <img src="e.jpg" alt="Forest" width="600" height="400">
  
  <div class="desc">Add a description of the image here</div>
  </a>
  </div>
    <div class="card"> <a class="a" href="card.php"> Add to card </a> </b></div>

</div>
<div class="normal">
<div class="gallery">
  <a target="_blank" href="orderhistory.php">
    <img src="e.jpg" alt="Forest" width="600" height="400">
  
  <div class="desc">Add a description of the image here</div>
  </a>
  </div>
    <div class="card"> <a class="a" href="card.php"> Add to card </a> </b></div>

</div>
<div class="normal">
<div class="gallery">
  <a target="_blank" href="orderhistory.php">
    <img src="e.jpg" alt="Forest" width="600" height="400">
  
  <div class="desc">Add a description of the image here</div>
  </a>
  </div>
    <div class="card"> <a class="a" href="card.php"> Add to card </a> </b></div>

</div>




   
			   
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

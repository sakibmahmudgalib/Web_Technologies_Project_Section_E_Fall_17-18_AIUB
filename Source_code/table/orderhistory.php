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
    background-color: #555;
    color: white;
}


div.gallery {
    margin: 3px;
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

div.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  padding: 5px;
  background-color: steelblue;
  text-align: right;
  border: 2px solid #4CAF50;
}
#align {
    position: absolute;
	top:200px;
	right:800px;
	
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


.a:hover {
    background-color: red;
}
.a:active {
    background-color: #2df50a;
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

 </div>
 <tr>

<td>

<legend><h4>Order History :</h4><legend><br/>
  <img src="e.jpg" alt="Forest" width="300" height="400">
  <b align="center" style="position: absolute;top:200px;left:400px; " > Book Name : <?php echo "Demo" ?></b>
  <b  align="center" style="position: absolute;top:220px;left:400px; "> by <font size="4px" color="green"> <?php echo "Demo" ?></font></b>
  <b style="position: absolute;top:240px;left:400px; ">-----------------------------</b>
   <b style="position: absolute;top:260px;left:400px; ">Edition : <?php echo "Demo" ?> </b>

      <b style="position: absolute;top:280px;left:400px; ">Publisher: <?php echo "Demo"."<br/>"  ?> </b>
	   <b style="position: absolute;top:300px;left:400px; ">Cagagory : <?php echo "Demo"."<br/>" ?> </b>
			   <b style="position: absolute;top:330px;left:400px; "> <a class="a" href="card.php"> Add to card  </a> </b>

		<b style="position: absolute;top:370px;left:400px; ">Related Cetagory : <?php echo "Demo"."<br/>" ?> </b>


</td>

 </tr>
 </table>
</html>
<?php
include('session.php');
$currentUser=$_SESSION['currentUser'];
//var_dump($currentUser);

?><html>
	<head>
		<title>AIUB Online Book Store</title>
	</head>
	<body>
		<table border="1" width="100%" align="center" cellpadding="10px">
			<tr >				
				<td border="0" colspan="2"> <img src="i.png" height="125">
				
				
				<div align="right" cellpadding="-25">
					Logged in as <a href="Dashboard.php"><?php echo $currentUser['name'];?> </a>|
					<a href="Logout.php">Logout</a>
					
				</div>
				</td>
			</tr>				
			<tr valign="top">
				<td width="20%"> 
					<b>Account</b><br/><hr><br/>
					<ul>
						<li><a href="User_Dashboard.php">Dashboard</a></li>
						<li><a href="View_User_Profile.php">View Profile</a></li>
						<li><a href="Edit_User_Profile.php">Edit Profile</a></li>
						<li><a href="Change_User_Picture.php">Change Profile Picture</a></li>
						<li><a href="Change_User_Pass.php">Change Password</a></li>
						<li><a href="Logout.php">Logout</a></li>
					</ul>
				</td>
				<td> 
					<fieldset>
						<legend>Profile</legend>
							<table>
								<tr>
								<td>Name</td>
								<td>: <?php echo $currentUser['name'];?> </td>
								<td rowspan="4" align="center">
									<img src="p.png" height="100"/>
									<br/>
									<a href="ChangePicture.html" >Change</a>
								</td>
								</tr>
								<tr>
								<td>Email</td>
								<td>: <?php echo $currentUser['email'];?> </td>
								</tr>
								<tr>
								<td>Gender</td>
								<td>: <?php echo $currentUser['gender'];?> </td>
								</tr>
								<tr>
								<td>Date of Birth</td>
								<td>: <?php echo $currentUser['dd']."/".$currentUser['mm']."/".$currentUser['yyyy'];?> </td>
								</tr>
							</table>						
						<hr/>
						<a href="Edit_User_Profile.php">Edit Profile</a><br/>
						
					</fieldset>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"> Copyright</td>
			</tr>
		</table>
	</body>

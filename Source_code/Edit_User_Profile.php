<?php
include('session.php');
$_SESSION['currentUser']="Fomy";
$currentUser=$_SESSION['currentUser'];
//var_dump($currentUser['name']);

?>
<html>
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
				<td width="25%"> 
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
				<td width="55%">
					<form action="editHandler.php">
					<fieldset>
						<legend>Edit Profile</legend>
						<table>
						<tr>
						<td><b>Name </b></td>				
						<td><b>: </b><input type="text" name="name" value="<?php echo $currentUser['name'];?>"</td>
						
						</tr>
						
						<tr>
						<td><b>Email </b></td>				
						<td><b>: </b><input type="text" name="email" value="<?php echo $currentUser['email'];?>"></td>
						</tr>		
						
						
						
						<tr>
							<td colspan="2">
							<fieldset>
								<legend>Gender</legend>
								<?php $m="male";$f="female";$o="other"?>
								<input type="radio" name="gender" value="male" checked="<?php if ($currentUser['gender'] == $m){ echo 'checked'; } ?>"/>Male
								<input type="radio" name="gender" value="female"checked="<?php if ($currentUser['gender'] == $f){ echo 'checked'; } ?>"/>Female
								<input type="radio" name="gender" value="other"checked="<?php if ($currentUser['gender'] == $o){ echo 'checked'; } ?>"/>Other
							</fieldset>
							</td>
						</tr>
						
						<tr >
							<td colspan="2">
							<fieldset>
								<legend>Date of Birth</legend>
								<table>
						<tr>
							<td>dd</td>
							<td/>
							<td>mm</td>
							<td/>
							<td>yyyy</td>
						</tr>
						<tr valign="top">
							<td>
								<!--<form action="handler.php">-->
									<input type="dd" name="date" size='1'value="<?php echo $currentUser['dd'];?>">
								<!--</form>-->
							</td>
							<td>/</td>
							<td>
								<!--<form action="handler.php">-->
									<input type="text" name="month" size='1' value="<?php echo $currentUser['mm'];?>">
								<!--</form>-->
							</td>
							<td>/</td>
							<td>
								<!--<form action="handler.php">-->
									<input type="text" name="year"  size='1'value="<?php echo $currentUser['yyyy'];?>"
								<!--</form>-->
							</td>
						</tr>
					</table>
					<input type="submit" value="submit"/>
								
							</fieldset>
							</td>
						</tr>
					</table>
						
					</fieldset>
					</form>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"> Copyright</td>
			</tr>
		</table>
	</body>

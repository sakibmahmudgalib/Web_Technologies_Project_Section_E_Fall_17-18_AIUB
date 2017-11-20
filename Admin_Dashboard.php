<?php
session_start();
//$currentUser=$_SESSION['currentUser'];
//var_dump($currentUser['name']);

?>
<html>
	<head>
		<title>AIUB Online Book Store</title>
	</head>
	<body>
		<table border="1" width="100%" align="center" cellpadding="10px">
			<tr >				
				<td border="0" colspan="2"> <div align="center"><img src="i.png" width="10%"><br/><b>TIENDA DE FLORIS</b></div>
				
				
				<div align="right" cellpadding="-25">
					Logged in as <a href="Dashboard.php"><?php echo "User"/*$currentUser['name']*/;?> </a>|<a href="Users.php">User List</a>|
					<a href="Books.php">Book List</a>|<a href="Employee.php">Employee List</a>|
					<a href="Logout.php">Logout</a>
					
				</div>
				</td>
			</tr>				
			<tr valign="top">
				<td width="20%"> 
					<b>Account</b><br/><hr><br/>
					<ul>
						<li><a href="Admin_Dashboard.php">Dashboard</a></li>
						<li><a href="View_User_Profile.php">View Profile</a></li>
						<li><a href="Edit_User_Profile.php">Edit Profile</a></li>
						<li><a href="Change_User_Picture.php">Change Profile Picture</a></li>
						<li><a href="Change_User_Pass.php">Change Password</a></li>
						<li><a href="Logout.php">Logout</a></li>
					</ul><br/>
					
					<b>Orders</b><br/><hr><br/>
					<ul>
						<li><a href="Order/Orders.php">New Order List</a></li>
						<li><a href="Order/Order_History.php">Order_History</a></li>
												
											
					</ul><br/>
					
					<b>Users</b><br/><hr><br/>
					<ul>
						<li><a href="Users.php">User List</a></li>
						<li><a href="Update_User_Info.php">Update User Info</a></li>
						<li><a href="Add User.php">Add User</a></li>
						<li><a href="Block_User">Block User</a></li>
						<li><a href="Remove_User.php">Remove User</a></li>						
					</ul><br/>
					
					<b>Books</b><br/><hr><br/>
					<ul>
						<li><a href="Books.php">Book List</a></li>
						<li><a href="Update_Book_Info.php">Update Book Info</a></li>
						<li><a href="Add Book.php">Add Book</a></li>						
						<li><a href="Delete_Book.php">Delete Book</a></li>						
					</ul><br/>
					
					<b>Employees</b><br/><hr><br/>
					<ul>
						<li><a href="Employee.php">Employee List</a></li>
						<li><a href="Update_Employee_Info.php">Update User Info</a></li>
						<li><a href="Add Employee.php">Add User</a></li>
						<li><a href="Block_Employee">Block User</a></li>
						<li><a href="Remove_Employee.php">Remove User</a></li>						
					</ul>
					
					
				</td>
				<td><?php echo "Welcome ";?> Here Order list will be shown
					<table cellpadding="15%"align="center">
						<tr>
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
							
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
							
						</tr>
						<tr>
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Price | Order</td>
								</tr>
								</table>
								
							</td>
							
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
							
						</tr>
						<tr>
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
							
							<td>
								<table align="center" border='1'>
								<tr>
								<td><img src="i.png" width="100%" /></td>
								</tr>
								<tr>
									<td align="center">Order No. | Date</td>
								</tr>
								</table>
								
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"> Copyright</td>
			</tr>
		</table>
	</body>

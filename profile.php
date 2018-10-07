<?php
session_start();
$firstname=$_SESSION['u_first'];
$lastname=$_SESSION['u_last'];
$admission=$_SESSION['u_adno'];
$branch=$_SESSION['u_branch'];
$editemail=$_SESSION['u_email'];
$editphone=$_SESSION['u_phone'];
	include 'includes/dbh.inc.php';
	if(isset($_POST['savechanges'])){
	$editphone=mysqli_real_escape_string($conn,$_POST['editphone']);
	$editemail=mysqli_real_escape_string($conn,$_POST['editemail']);
	$adno=$_SESSION['u_adno'];
	$sql="update students SET user_email='$editemail',user_phone='$editphone' WHERE user_adno='$adno'";
	mysqli_query($conn,$sql);
}
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stylewelcome.css">

</head>
<body>
	<div class="head">
            <h1 style="color: blue ;text-align:center;">Sardar Vallabhbhai  National  Institute Of Technology</h1>
             <img src="Logo.jpg" width="120px;">        
    </div>
    <div class="icons">
    	<ul>
    		<li><a href="profile.php">Profile</a></li>
    		<li><a href="course.php">Course Registration</a></li>
    		<li style="float: right; margin-right: 0px; border-right: 0px"><a><form action="includes/logout.inc.php" method="post">
            <button name="logout" class="logout">Log out</button>
        </form></a></li>
    	</ul>
    </div>
	<fieldset>
		<legend>Profile</legend>
		<table width="100%">
			<thead>
				<th></th>
				<th></th>
			</thead>
			<tbody>
				<form action="profile.php" method="POST">
				<tr>
					<td><label>First Name</label></td>
					<td><input type="text" value="<?php echo $firstname; ?>" disabled></td>
				</tr>
				<tr>
					<td><label>Last Name</label></td>
					<td><input type="text" value="<?php echo $lastname; ?>" disabled></td>
				</tr>
				<tr>
					<td><label>Admission Number</label></td>
					<td><input type="text" value="<?php echo $admission; ?>" disabled></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td><input type="email" value="<?php echo $editemail; ?>" name="editemail"></td>
				</tr>
				<tr>
					<td><label>Branch</label></td>
					<td><input type="text" value="<?php echo $branch; ?>" disabled></td>
				</tr>
				<tr>
					<td><label>Phone Number</label></td>
					<td><input type="number" value="<?php echo $editphone; ?>" name="editphone"></td>
				</tr>
				<input type="submit" name="savechanges" value="Save Changes">
				</form>
			</tbody>
			
		</table>
	</fieldset>
</body>
</html>
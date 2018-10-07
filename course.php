<?php 
session_start();
include 'includes/dbh.inc.php';
$firstname=$_SESSION['u_first'];
$lastname=$_SESSION['u_last'];
$admission=$_SESSION['u_adno'];
$email=$_SESSION['u_email'];
$branch=$_SESSION['u_branch'];
$sqlcompulsory="SELECT * from compulsorysubject where branch='$branch'";
$result = mysqli_query($conn, $sqlcompulsory);
$record=mysqli_fetch_assoc($result);
if(isset($_POST['regcomplete'])){
    $eis=$_POST['eis'];
    $sqleis="update students set user_eis='$eis' where user_adno='$admission'";
    mysqli_query($conn,$sqleis);
}
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stylecoursereg.css">

</head>
<body>
	<div class="heading">
            <h1>Sardar Vallabhbhai  National  Institute Of Technology</h1>
             <img src="Logo.jpg" width="120px;">        
    </div>
    <div class="icons">
    	<ul>
    		<li><a href="profile.php">Profile</a></li>
    		<li><a href="course.php">Course Registration</a></li>
    		<li style="float: right;"><a><form action="includes/logout.inc.php" method="post">
                <button name="logout" class="logout">Log out</button>
                </form></a></li>
    	</ul>
    </div>
</body>
    <div style="clear:left"> 
        <h2 style="text-align: center;">B-Tech 3rd Year (5th Semester)</h2>
        <h3 style="text-align: center;"><?php echo $record['branch']?></h3>
        <table>
            <thead>
                <th>Sr No.</th>
                <th>Subject</th>
                <th>Credits</th>
            </thead>
            <tbody>
                <tr><td>1</td><td><?php echo $record['subject1'];?></td><td>4</td></tr>
                <tr><td>2</td><td><?php echo $record['subject2'];?></td><td>3</td></tr>
                <tr><td>3</td><td><?php echo $record['subject3'];?></td><td>4</td></tr>
                <tr><td>4</td><td><?php echo $record['subject4'];?></td><td>5</td></tr>
            </tbody>
        </table>
        <h2 style="text-align: center;">Elective Subject</h2>
        <form method="POST" action="course.php?RegistrationSuccess">
        <input type="radio" name="eis" value="Bioprocess Engineering">Bioprocess Engineering
        <input type="radio" name="eis" value="Energy Technology">Energy Technology
        <input type="radio" name="eis" value="Fuels and Combustion">Fuels and Combustion
        <input type="radio" name="eis" value="Information Security">Information Security
        <input type="radio" name="eis" value="Information Theory and Coding">Information Theory and Coding
        <input type="radio" name="eis" value="Object Oriented System">Object Oriented System
        <input type="radio" name="eis" value="Marketing Management">Marketing Management<br>
        <input type="submit" name="regcomplete" value="Submit">
        </form>
    </div>
</html>
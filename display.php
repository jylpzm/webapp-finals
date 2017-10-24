<?php 
require_once('connect.php');

if(!isset($_SESSION['user'])){
	header("location: login.php");
}

if(isset($_POST['update']))
{
$scrubid = $_POST['scrubid'];
$fname = $_POST['fname'];
$lname =$_POST['lname'];


//SQL Query UPDATE stored in $sql variable
$query="UPDATE users SET firstname = '$fname', lastname = '$lname', updated_at = NOW() WHERE userid = '$scrubid'";
if(mysqli_query($conn,$query)){
echo "<font face = 'arial'>";
echo "Scrub ID: " . $scrubid . "<BR>";
//update message
echo "was successfully updated.";
echo "</font>";
}else{
	echo "NUUB" . mysqli_error($conn);
}
}
$conn->close(); 
?>

<html>
<head>
<title>LETSGO</title>
</head>
<body>
<font face ="arial">
<h1>Update SCRUBS Result</h1>
<hr>
<form name="scrubform" method="post">
<table>
<td>Enter Scrub ID:</td>
<td><input type = "text" name ="scrubid" maxlength ="20" size ="10" required="required"> </td>
<tr>
<td><br><label>Scrub Firstname:</label></td>
<td><br><input type="text" size=40 maxlength=100 name="fname" required="required"></td>
</tr>
<tr>
<td><br><label>Scrub Lastname:</label></td>
<td><br><input type="text" size=40 maxlength=100 name="lname" required="required"></td>
</tr><br>

<td></td>
<td><br><input type = "submit" value="Update" name="update">
<input type = "reset" value="Clear"></td>
</tr>
</table>
</form>

<br><br>
<form action="logout.php" action="get">
<input type="submit" value="LOGOUT" name ="close">
</form>
</font>
</body>
</html>
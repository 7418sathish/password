<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>THIS IS ADMIN HOME PAGE</h1>

</body>
</html>

<?php
session_start();
if(!isset($_SESSION["username"]))
{
	
}

$con=mysqli_connect("localhost","root","","login");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if($_SESSION['usertype'] == 'admin'){
$result = mysqli_query($con,"SELECT * FROM `loginsys`");

echo "<table border='1'>
<tr>
<th>username</th>
<th>password</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
}
echo "</table>";



}
else{
        echo "I am a user";
?>
<ul>
  <li><a href="login.php">Home</a></li>
  <li><a href="myprofile.php">myprofile</a></li>
  <li><a href="password.php">change password</a></li>
  <li><a href="login.php">log out</a></li>
</ul>
<?php        
}
mysqli_close($con);
?>       
 
        

    

    

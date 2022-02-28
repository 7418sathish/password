<?php
session_start();
include "conn.php";
$id = $_SESSION['id'];
$sql = "SELECT * FROM `loginsys` where id = $id ";
$res = mysqli_query($conn, $sql);
$rest = mysqli_fetch_array($res);
?>
<form class="form" method="post" name="login" action="update.php">
 <h1 class="name updated">name updated</h1> 
 <input type="text" class="input" name="username" placeholder="name" required value="<?php echo $rest['username'];?>"/>      
 <button type="submit" name="update">Submit</button>
</form>
<p class="link"><a href="update.php">Click to Login</a></p>
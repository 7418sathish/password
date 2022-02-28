<?php
include "conn.php";
$dbname = "login";
session_start();
    $id = $_SESSION['id'];
    $username = $_POST['username'];

$query = "UPDATE `loginsys` SET `username`='$username' WHERE id = '$id'";
$result   = mysqli_query($conn, $query);      
//echo $sql;
if ($query == TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
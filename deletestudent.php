<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="assign";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
	die("connection failed" . mysqli_connect_error());
	}
	$sid=$_GET['sid'];
	$sql = "DELETE FROM details WHERE id=$sid";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
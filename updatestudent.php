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
	?>
<html>
<head>
<title>updatehostdata</title>
<body>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['stdname'];
	$email=$_POST['emil'];
	$fname=$_POST['fname'];
	$dob=$_POST['startdate'];
	$village=$_POST['village'];
	$dnumber=$_POST['dnumber'];
	$pincode=$_POST['pincode'];
	$subject=$_POST['subject'];
	$id=$_POST['sid'];
	$sql="UPDATE details SET name=('$name'), email=('$email'), fname=('$fname'), 
	dob=('$dob'), village=('$village'), dnumber=('$dnumber'), pincode=('$pincode'), subject=('$subject') WHERE id=('$id')";
	$res=mysqli_query($conn,$sql);
	if(!$res)
	{
	die("query failed!" . mysqli_error($conn));
	}
	else
	{
		echo "success";
	}
}
?>
</body>
</html>
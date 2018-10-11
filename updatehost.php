<?php 
$host="localhost";
$dbuser="root";
$pass="";
$dbname="comfort";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
	die("connection failed" . mysqli_connect_error());
	}
	?>
<html>
<head>
<title>
updatehost</title>
</head>
<body>
<table align="center">
<form action="updatehost.php" method="post">
<tr>
<th>Enter hostid</th>
<td><input type="number" name="hostid" placeholder="enter host id" required="required"></td>
<th>Enter host name</th>
<td><input type="text" name="hostname" placeholder="enter host name" required="required"></td>
<td colspan="2"><input type="submit" name="submit" value="search"></td>
</tr>
</form>
</table>
<table align="center" width="600px" border="1px" style="margin-top:10px">
<tr style="background-color:#000; color:#ffff;">
<th>no</th>
<th>image</th>
<th>Name</th>
<th>Deposit</th>
<th>EDIT</th>
</tr>
<?php
if(isset($_POST['submit']))
{
	$id=$_POST['hostid'];
	$hname=$_POST['hostname'];
 $sql ="SELECT * FROM hdata WHERE id='$id' && name LIKE '%$hname%'";	
	$run=mysqli_query($conn,$sql);
	if(mysqli_num_rows($run)>=1)
	{
		
		$count=1;
		while($data=mysqli_fetch_assoc($run))
		{
			?>
			<tr>
			<td><?php echo $count;?></td>
			<td width="100px"><img src="../sms/images/<?php echo $data['img'];?>" height="100px" width="100px"></td>
			<td><?php echo $data['name'];?></td>
			<td><?php echo $data['damount'];?></td>
			<td><a href="updatehostform.php?sid=<?php echo $data['id']?>">EDIT</a></td>
			</tr>
			<?php
		}
	}
	else
	{
		echo "No Records Found";
		
	}		
}	
?>
</table>

</body>
</html>
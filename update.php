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
<title>
updatehost</title>
</head>
<body>
<table align="center">
<form action="update.php" method="post">
<tr>
<th>Enter student id</th>
<td><input type="number" name="hostid" placeholder="enter student id" required="required"></td>
<th>Enter student name</th>
<td><input type="text" name="hostname" placeholder="enter student name" required="required"></td>
<td colspan="2"><input type="submit" name="submit" value="search"></td>
</tr>
</form>
</table>
<table align="center" width="600px" border="1px" style="margin-top:10px">
<tr style="background-color:#000; color:#ffff;">
<th>no</th>
<th>Name</th>
<th>Father Name</th>
<th>EDIT</th>
<th>DELETE</th>

</tr>
<?php
if(isset($_POST['submit']))
{
	$id=$_POST['hostid'];
	$hname=$_POST['hostname'];
 $sql ="SELECT * FROM details WHERE id='$id' && name LIKE '%$hname%'";	
	$run=mysqli_query($conn,$sql);
	if(mysqli_num_rows($run)>=1)
	{
		
		$count=1;
		while($data=mysqli_fetch_assoc($run))
		{
			?>
			<tr>
			<td><?php echo $count;?></td>
			
			<td><?php echo $data['name'];?></td>
			<td><?php echo $data['fname'];?></td>
			<td><a href="updatestudentform.php?sid=<?php echo $data['id']?>">EDIT</a></td>
			<td><a href="deletestudent.php?sid=<?php echo $data['id']?>">DELETE</a></td>
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
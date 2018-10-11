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
	$sql="SELECT * FROM details WHERE id='$sid'";
	$run=mysqli_query($conn,$sql);
	$data=mysqli_fetch_assoc($run);
	?>
	<html>
<head>
<title>add student details</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

</head>
<script>

  $(document).ready(function() {
    $("#datepicker").datepicker();
  });

  </script>
  <script>
  function validateForm() {
    var x = document.forms["myForm"]["stdname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	var y = document.forms["myForm"]["emil"].value;
    if (y == "") {
        alert("email must be filled out");
        return false;
    }
	var z = document.forms["myForm"]["fname"].value;
    if (z == "") {
        alert("Father Name must be filled out");
        return false;
    }
	var a = document.forms["myForm"]["startdate"].value;
    if (a == "") {
        alert("Date must be filled out");
        return false;
    }
	
	var c = document.forms["myForm"]["village"].value;
    if (c == "") {
        alert("Village must be filled out");
        return false;
    }
		var d = document.forms["myForm"]["dnumber"].value;
    if (d == "") {
        alert("Door number must be filled out");
        return false;
    }
		var e = document.forms["myForm"]["pincode"].value;
    if (e == "") {
        alert("Pincode must be filled out");
        return false;
    }
}
  </script>
<body font size="30px;">
<style>
#submit
{
	margin-left:48%;
}

#table
{
	background-color:lightblue;
	padding:30px;
	margin-left:35%;
	margin-right:35%;
	margin-top
	border:2px solid red;
}
</style>
<form name="myForm" action="updatestudent.php" onsubmit="return validateForm()" method="post">
<div id="table">

<table>
<tr>
<b>STUDENT NAME  :</b> 
<br> 
<input type="text" name="stdname" value="<?php echo $data['name'];?>"   size="35"/>
</tr>
</br>



<b>EMAIL ID  :</b> 
<br> 
<input type="text" name="emil" value="<?php echo $data['email'];?>"  size="35"/>
</tr>
</br>
<tr>
<b>FATHER NAME  :</b> 
<br> 
<input type="text" name="fname" value="<?php echo $data['fname'];?>"  size="35"/>
</tr>
</br>
<tr>
<b>DATE OF BIRTH  :</b> 
<br> 
<input type="text" name="startdate" id="datepicker" value="<?php echo $data['dob'];?>"/>
</tr>
</br>

<tr>
<b>village  :</b> 
<br> 
<input type="text" name="village" value="<?php echo $data['village'];?>"/>
</tr>
</br>
<tr>
<b>Door number  :</b> 
<br> 
<input type="text" name="dnumber" value="<?php echo $data['dnumber'];?>"/>
</tr>
</br>
<tr>
<b>pincode  :</b> 
<br> 
<input type="text" name="pincode" value="<?php echo $data['pincode'];?>"/>
</tr>
</br>
<tr>
<td><b>subject choosing:</b></td>
</tr>
<tr>
<td><select name="subject" value="<?php echo $data['subject'];?>">
<option>hindi</option>
<option>english</option>
<option>marathi</option>

</select>
</td>
</tr>


</table>

</div>
<input type="hidden" name="sid" value="<?php echo $data['id']?>"/>
<input type="submit" name="submit" id="submit"/>
</form>
</body>
</html>
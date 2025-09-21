<html>
<body>
<?php
$connect = mysqli_connect("localhost","root","","nandita");


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['submit']))
{

	$usn=$_POST['usn'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];

	$s="insert into stud values(".$usn.",'$name','$email','$mob')";
	$ins=mysqli_query($connect,$s);
	if($ins)
	{
		echo "<script>alert('Inserted Successfully');window.location.href=http://localhost/11.php;</script>";
	}
	else
	{
		echo "<script>alert('Error in insertion');</script>";
	}

}
?>

<form action="http://localhost/10.php" method="post">
	<h1>Student Entry Form</h1>
	<table>
		<tr>
			<td>USN</td><td><input type="text" name="usn"></td>
		</tr>

		<tr>
			<td>Name</td><td><input type="text" name="name"></td>
		</tr>
		

		

		<tr>
			<td>Email</td><td><input type="email" name="email"></td>
		</tr>


		<tr>
			<td>Mobile Number</td><td><input type="number" name="mob"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Register"></td>
			<td><input type="reset" name="reset" value="Clear"></td>
		</tr>
	</table>
	</form>
</body></html>

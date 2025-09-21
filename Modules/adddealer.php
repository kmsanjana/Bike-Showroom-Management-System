<?php
$conn =new mysqli("127.0.0.1","root","","bikeshowroom");


if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);
  }
    $d_id=$_POST["id"];
	$d_name=$_POST["name"];
	$d_address=$_POST["address"];
	$d_contactno=$_POST["contact"];
	$d_username=$_POST["username"];
    $d_password=$_POST["psw"];
    $count="";
  $sql ="SELECT * FROM adddealer WHERE d_username='$d_username' ";
    $result =$conn->query($sql);
	if($result->num_rows==1)
	{
	echo"<script>alert('DEALER already present'); window.location.href='add_dealer.html';</script>";
     $count++;   
	}
if($count==0){
	$sql ="insert into adddealer (d_id,d_name,d_address,d_contactno,d_username,d_password) values('$d_id','$d_name','$d_address','$d_contactno','$d_username','$d_password')";
	if($conn->query($sql)===TRUE)
	{
		echo "<script>alert('Dealer Added Successfully'); window.location.href='admin_page1.html';</script>";
	}
	else
	{
		echo "Error in insertion". $sql.$conn->error;
	}
}
$conn->close();
?>

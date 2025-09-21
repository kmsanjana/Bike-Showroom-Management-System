<html>
    <head>
        <style>
            .cancelbtn {
    width: auto;
    padding: 10px 50px;
    background-color: red;
    cursor:pointer;

}
            
button {
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor:pointer;
    width: 100%;
    opacity: 1;
}

    </style>
    </head>
</html>
<?php
$conn =new mysqli("127.0.0.1","root","","bikeshowroom");

if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);
  }
	
	$sql ="SELECT * FROM bike ";
    $result =$conn->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_array())
        {
        echo '<center>
        <img width="800px" src="data:image/jpg;base64,'.base64_encode($row['b_image']).'"/>
        </center><br>';
            
            echo" <center> name:" .$row["b_name"]. "<br>". " price:" .$row["b_price"]."<br>". " description:" .$row["b_description"]."<br><br>";
            $price=$row[3];
            $bid=$row[0];
            echo"<a href='../payment.php?val=$price&&bid=$bid'><button class='cancelbtn' type='submit' name='book'>BOOK</button></a><br><br> </center>";
        
            
        }
	}
	else
	{
		echo "0 records";
	}
	
$conn->close();
?>

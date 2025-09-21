<?php
$conn =new mysqli("127.0.0.1","root","","bikeshowroom");

if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);
  }
	
	$sql ="SELECT * FROM payment ";
    $result =$conn->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
        {
        echo '<center>
        </center><br>';
            
            echo" Name:" .$row["p_name"]. "<br>";
             echo" Price:" .$row["p_price"]."<br>";
             echo" Address:" .$row["p_address"]."<br><br>";
        
            
        }
	}
	else
	{
		echo "0 records";
	}
	
$conn->close();
?>

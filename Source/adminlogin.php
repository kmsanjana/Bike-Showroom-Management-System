<?php
$uname=$_POST["username"];
$upsw=$_POST["psw"];
if($uname==="admin" && $upsw==="admin"){
        echo "<script>alert('WELCOME ADMIN'); window.location.href='../modules/admin_page1.html';</script>";
}
else{
         		echo "<script>alert('WRONG LOGIN DETAILS');</script>";
    }

?>
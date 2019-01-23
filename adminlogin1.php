<?php
session_start();

$connect=mysqli_connect("localhost", "root", "", "vmvdb");
$query="select * from admintable where adminid='$_POST[aid]'";
$result=mysqli_query($connect,$query) or die(mysqli_error($connect));

if(mysqli_num_rows($result) > 0){
    $row=mysqli_fetch_array($result);
        if($_POST["pass"]==$row["password"]){
			require("admin.php");
        }
        else{
			 echo "<script>alert('Incorrect Password!')</script>";
             require("adminlogin.html");
        }
}
else{
			echo "<script>alert('Admin not found')</script>";
            require("adminlogin.html");
}
?>
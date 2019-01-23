<?php
session_start();

$connect=mysqli_connect("localhost", "root", "", "vmvdb");
$query="select * from vmvtable where id='$_POST[uid]'";
$result=mysqli_query($connect,$query) or die(mysqli_error($connect));
$username=@$_POST["uid"];

if(mysqli_num_rows($result) > 0){
    $row=mysqli_fetch_array($result);
        if($_POST["pass"]==$row["password"]){
			session_start();
            $_SESSION["uid"]=$username;
            header("Location:member.php");
        }
        else{
			 echo "<script>alert('Incorrect Password!')</script>";
             require(document.getElementById('index/login').style.display);
        }
}
else{
			echo "<script>alert('User not found')</script>";
            require("index.html");
}
?>
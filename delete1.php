<?php

$connect = mysqli_connect("localhost","root", "", "vmvdb");
$query="select password from vmvtable where id='$_POST[duid]'";
$result=mysqli_query($connect,$query) or die(mysqli_error($connect));;

if(mysqli_num_rows($result) > 0){
        $row=mysqli_fetch_array($result);
        if($_POST["dpass"]==$row["password"]){
            $query2="DELETE FROM vmvtable WHERE id='$_POST[duid]'";
            mysqli_query($connect,$query2);
            echo "<script>alert('Account deleted successfully')</script>";
            require("index.html");
  
        }
        else{
            echo "<script>alert('Password Incorrect!')</script>";
            require("delete.html");
        }
}
$connect->close();
?>
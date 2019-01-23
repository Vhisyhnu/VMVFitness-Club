<?php

$connect = mysqli_connect("localhost","root", "", "vmvdb");
$query="select * from vmvtable where id='$_POST[auid]'";
$result=mysqli_query($connect,$query) or die(mysqli_error($connect));;

if(mysqli_num_rows($result) > 0){
        $row=mysqli_fetch_array($result);
            $query2="DELETE FROM vmvtable WHERE id='$_POST[auid]'";
            mysqli_query($connect,$query2);
            echo "<script>alert('Account deleted successfully')</script>";
            require("admin.php");
  
        }
        else{
            echo "<script>alert('User Not Found!')</script>";
            require("admin.php");
        }

$connect->close();
?>
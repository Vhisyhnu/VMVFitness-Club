<?php 
    $connect=mysqli_connect("localhost", "root", "", "vmvdb");
    $query="select password from vmvtable where id='$_POST[ui]'";
    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));;

    if(mysqli_num_rows($result) > 0){
        $row=mysqli_fetch_array($result);
        if($_POST["opass"]==$row["password"]){
            $query2="update VMVtable set password='$_POST[npass]' where id='$_POST[ui]'";
            mysqli_query($connect,$query2);
            echo "<script>alert('Password Changed!')</script>";
            require("index.html");
  
        }
        else{
            echo "<script>alert('Old Password Incorrect!')</script>";
            require("changepassword.html");
        }
    }
?>
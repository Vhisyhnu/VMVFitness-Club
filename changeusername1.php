<?php 
    $connect=mysqli_connect("localhost", "root", "", "vmvdb");
    $query="select username from vmvtable where id='$_POST[ui]'";
    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));;

    if(mysqli_num_rows($result) > 0){
        $row=mysqli_fetch_array($result);     
            $query2="update VMVtable set username='$_POST[nu]' where id='$_POST[ui]'";
            mysqli_query($connect,$query2);
            echo "<script>alert('Username Changed!')</script>";
            require("member.php");
   
    }
?>
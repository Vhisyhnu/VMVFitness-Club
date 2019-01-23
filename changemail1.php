<?php 
    $connect=mysqli_connect("localhost", "root", "", "vmvdb");
    $query="select email from vmvtable where id='$_POST[ui]'";
    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));;

    if(mysqli_num_rows($result) > 0){
        $row=mysqli_fetch_array($result);     
            $query2="update VMVtable set email='$_POST[nm]' where id='$_POST[ui]'";
            mysqli_query($connect,$query2);
            echo "<script>alert('E-mail Changed!')</script>";
            require("member.php");
   
    }
?>
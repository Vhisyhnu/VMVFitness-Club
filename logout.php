<?php 
session_start();
session_destroy();
echo "<script>alert('Logged Out')</script>";
            require("index.html");
?>
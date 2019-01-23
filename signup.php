<?php 
    $connect=mysqli_connect("localhost", "root", "", "vmvdb");
	$query="select * from vmvtable";
    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));
	$idexist = "SELECT id FROM vmvtable WHERE id='$_POST[id]' ";
	$usernameexist = "SELECT username FROM vmvtable WHERE username='$_POST[un]' ";
    $emailexist = "SELECT email FROM vmvtable WHERE email='$_POST[mail]' ";
    $result1 = mysqli_query($connect,$idexist);
    $result2 = mysqli_query($connect,$usernameexist);
    $result3 = mysqli_query($connect,$emailexist);
	
	if(mysqli_num_rows($result1)>0){
		echo "<script>alert('User Id already exist!')</script>";
		require("signup.html");		
	}
	
    else if(mysqli_num_rows($result2)>0){
		echo "<script>alert('Username already exist!')</script>";
		require("signup.html");		
	} 
	
	else if(mysqli_num_rows($result3)>0){
		echo "<script>alert('Email already exist!')</script>";
		require("signup.html");		
	}
  
    else{
        $sql = "INSERT INTO vmvtable (id, username, password, email)
	    VALUES ('$_POST[id]', '$_POST[un]', '$_POST[pass]','$_POST[mail]')";

		if ($connect->query($sql) === TRUE) {
		echo "<script>alert('New record created successfully')</script>";
		require("index.html");
			} 		
		else {
		echo "<script>alert('Error: Try again')</script>";
		require("signup.html");
				}
        }
    
?>
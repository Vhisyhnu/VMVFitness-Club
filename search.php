<!DOCTYPE html>
<html>
<body background="media/wall2.jpg">
<style>
h2 {color:white;}
table {
	table-align : left
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 30%;
}
table, th, td {
    border: 1px solid #dddddd;
    border-collapse: collapse;
}
th, td {
    padding: 20px;
    text-align: centre;
}
tr:nth-child(even) {
    background-color: #dddd;
}
tr:nth-child(odd) {
   background-color:#fff;
}
th {
    background-color: black;
    color: white;
}
</style>
<button type="button"><a href = "admin.php">Back</a></button>
<?php
			$connect = mysqli_connect("localhost","root","","vmvdb") or die("There's an error in connecting to server.");
			$id = @$_POST["id"];
			$sql = "SELECT * FROM vmvtable WHERE id='$id'";
			$result = mysqli_query($connect,$sql) or die("There's an SQL error.");
		  
			if($display=mysqli_fetch_array($result,MYSQLI_NUM))
			{

				$id = $display[0];
				$username = $display[1];
				$email = $display[2];
				

			echo "<h2>Details of Client: $id</h2>";
			echo "<br/>";
			echo "<table border='1'><tr>
				<th>User Id</th>
				<td>$id</td>
				</tr>
				<tr>
				<th>Username</th>
				<td>$username</td>
				</tr>
				<tr>
				<th>E-mail</th>
				<td>$email</td>
				</tr>";
				}
			else{
				header("Location:admin.php");
			}
		?>

</body>
</html>

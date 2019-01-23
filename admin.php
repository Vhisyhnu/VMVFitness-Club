<!DOCTYPE html>
<html>
<title>VMV Fitness</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

<body background="media/wall3.jpg">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="media/gym.jpg" style="width:100%">
  <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-sign-out w3-xxlarge"></i>
    <p>LOGOUT</p>
  </a>
</nav>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center" id="home">
    <h1 class="w3-text-light-grey"><span class="w3-hide-small">VMV</span> Fitness.</h1>
    <p class= "w3-text-light-grey">Online Fitness Club.</p>
  </header>
  <h3 style="color:grey;">WELCOME TO VMV ADMIN WORLD.</h3>
   <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Messages</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Views</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Shares</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>
  <!-- Update Section -->
   
 
	  <div class="w3-col l8 m6"> 
		<button class="w3-button w3-light-grey w3-padding-large" onclick= "document.getElementById('view').style.display='block'">
          <i class="fa fa-eye"></i> VIEW CLIENTS</a>
        </button>
		 <button class="w3-button w3-light-grey w3-padding-large" onclick= "document.getElementById('delete').style.display='block'">
          <i class="fa fa-close"></i> DELETE ACCOUNT
        </button>
		<form method="post" action="search.php">
         <p><input class="w3-input w3-padding-16" type="text" placeholder="Search for user id.." required name="id"></p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit"><i class="fa fa-search"></i> SEARCH CLIENT
        </button>
		</form>
    
	  </div>  
    </form>
  </div>
  <div> 
  <br><br><br>
  <br><br><br>
  <br><br><br>
   <!-- Modal -->
   

<div id="delete" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:38px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('delete').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>   
	 <h2 class="w3-wide"><i class="fa fa-close w3-xxlarge"></i> DELETE ACCOUNT</h2>   
	 <form method="post" action="admindelete.php">
	<p><input class="w3-input w3-border" type="text" placeholder="Enter User Id" required name="auid"></p>
	<button class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" type="submit"><i class="fa fa-close"></i>DELETE</button>
	</form>
	</div>
   </div>
</div>

<div id="view" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:38px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('view').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
	  <h2 class="w3-wide"><i class="fa fa-eye w3-xxlarge"></i> VIEW CLIENTS</h2>  	  
	 <?php

	    echo"<table>
	        <tr>
	          <th scope='col'>User Id</th>
	          <th scope='col'>Username</th>
	          <th scope='col'>Email</th>
            </tr>";

		$connect = mysqli_connect("localhost","root","","vmvdb")
		or die("Can't connect to server".mysqli_error());

		$id=@$_POST["id"];
		$name=@$_POST["username"];
		$email=@$_POST["email"];
		
		$sql = "SELECT * FROM vmvtable";
		$result = mysqli_query($connect,$sql)
		or die("cannot execute");

		while($c=mysqli_fetch_array($result,MYSQL_NUM))
		{
			$id=$c[0];
			$name=$c[1];
			$email=$c[2];
			echo "
		<tr>
			<td>$id</td>
			<td>$name</td>
			<td>$email</td>
		</tr>";
		}
       echo "</table>";
	?>
	</div>
   </div>
</div>


<div id="search" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:38px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('search').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
	  <h2 class="w3-wide"><i class="fa fa-close w3-xxlarge"></i> SEARCH CLIENT</h2>  	
		<?php
			$connect = mysqli_connect("localhost","root","","vmvdb") or die("There's an error in connecting to server.");
			$id = @$_POST["id"];
			$sql = "SELECT * FROM vmvtable WHERE id='$id'";
			$result = mysqli_query($connect,$sql) or die("There's an SQL error.");
		  
			while($display=mysqli_fetch_array($result,MYSQLI_NUM))
			{

				$id = $display[0];
				$username = $display[1];
				$email = $display[2];
				

			echo "<h4>Details of Registered Participant: $id</h4>";
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
		?>
		</div>
   </div>
</div>

    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
  <a href="error.html"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="error.html"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="error.html"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href="error.html"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="error.html"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="error.html"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    <p class="w3-medium">Powered by <a href="index.html" class="w3-hover-text-green">vmvfitness.com</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>

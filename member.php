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
<?php

		session_start();
		$username=$_SESSION["uid"];

		echo "<script>window.alert('Welcome $username')</script>";

		if(isset($username))
		{
?>
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
  <h3 style="color:grey;">WELCOME TO VMV FITNESS WORLD.</h3>
   
  <!-- Member Section -->
   <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="media/workout.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>STRENGTH TRAINING</b></p>
            <p>Shape up and get rid of fat with strength training. Using proper equipment such as free weights or resistance machines, you can boost your overall 
			well-being while building up muscle and bone strength. Our personal trainers and fitness staff will be there to guide you through this safely.</p>
            <a href="error.html" target="_blank"><button class="w3-button w3-black w3-margin-bottom" >Go
			</button></a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="media/cardio.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>CARDIO TRAINING</b></p>
            <p>Whether it’s to increase your stamina or to keep stress levels in check, cardio training can help improve your heart and lungs for more health benefits. 
			Either through bodyweight routines or endurance training circuits, cardio training can also assist in lowering blood pressure and cholesterol levels.</p>
            <a href="error.html" target="_blank"><button class="w3-button w3-black w3-margin-bottom" >Go
			</button></a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="media/food.jpg" alt="San Francisco" width="383" height="330" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>HEALTHY FOOD GUIDE</b></p>
            <p>Discover  VMV Fitness's best healthy recipes, including healthy breakfasts, lunches, dinners and snacks. Find dishes to fit in with special diets, from 
			dairy-free to the 5:2 diet. Eating a well-balanced diet can help you get the calories and nutrients 
			you need to fuel your daily activities.</p>
            <a href="error.html" target="_blank"><button class="w3-button w3-black w3-margin-bottom">Go
			</button></a>
          </div>
        </div>
	</div>
 
	  <div class="w3-col l8 m6"> 
        <button class="w3-button w3-light-grey w3-padding-large" onclick= "document.getElementById('edit').style.display='block'">
          <i class="fa fa-gear"></i> EDIT ACCOUNT
        </button>
	  </div>  
     <div>
	 </div>
    </form>
  </div>
  <div> 
  
   <!-- Modal -->
<div id="edit" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:38px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('edit').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
      <h2 class="w3-wide"><i class="fa fa-edit w3-xxlarge"></i> EDIT ACCOUNT</h2>   
	<button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('edit').style.display='none'"><i class="fa fa-user"></i><a href="changeusername.html"> CHANGE USERNAME</a></button>
	<button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('edit').style.display='none'"><i class="fa fa-eraser"></i><a href="changepassword.html"> CHANGE PASSWORD</a></button>
	<button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('edit').style.display='none'"><i class="fa fa-envelope"></i><a href="changemail.html"> CHANGE E-MAIL</a></button>
	<button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('edit').style.display='none'"><i class="fa fa-close"></i><a href="delete.html"> DELETE ACCOUNT</a></button>
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
<?php
			}
			else {
				echo "No session exist";
			}
			 ?>
</body>
</html>

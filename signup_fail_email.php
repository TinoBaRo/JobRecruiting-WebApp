<?php
	require("header.php");
?>
	<style>
		#pad_left {
			padding-left: 15px;
			padding-right: 15px;
		}
		#center_logo {
		  margin: auto;
		  width: 50%;
		  position: center;
		  text-align: center;
		}
		#center_text {
		  margin: auto;
		  width: 50%;
		  position: center;
		  text-align: center;
		}
		#center_grey {
		  margin: auto;
		  width: 50%;
		  position: center;
		  text-align: center;
		  color: #909090;
		}
	</style>

	<br><br>

	<div id="center_logo">
	 <img src="images/logo.png" height="350" width="350"> <!-- Logo Picture -->
	</div>

	<br><br>

	<div id="center_text">
	 	<h3>Unsuccessful Signup.</h3> <br>
	 	<h3>The email you chose already exists in our Database.</h3> <br>

	</div>



<?php
    require("footer.php");
?>

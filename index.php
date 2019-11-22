<?php
	include("includes/config.php");
	//session_destroy(); for logout

	if (isset($_SESSION['userLoggedIn'])) {
		$userLoggedIn = $_SESSION['userLoggedIn'];
	}
	else{
		header("Location: register.php");
	}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>OMSP || Home </title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div id="playingBarContainer">
		<div id="playingBar">
			<div id="playingBarLeft">
				
			</div>
			<div id="playingBarCenter">
				<div class="content playerControls">
					<div class="buttons">
						<button class="controlButton shuffle" title="Shuffle Button">
							<img src="assets/images/icons/shuffle.png" alt="Shuffle">
						</button>

						<button class="controlButton previous" title="Previous Button">
							<img src="assets/images/icons/previous.png" alt="Previous">
						</button>

						<button class="controlButton play" title="Play Button">
							<img src="assets/images/icons/play.png" alt="Play">
						</button>

						<button class="controlButton pause" title="Pause Button" style="display: none;">
							<img src="assets/images/icons/pause.png" alt="Pause">
						</button>

						<button class="controlButton next" title="Next Button">
							<img src="assets/images/icons/next.png" alt="Next">
						</button>

						<button class="controlButton repeat" title="Repeat Button">
							<img src="assets/images/icons/repeat.png" alt="Repeat">
						</button>
					</div>

					<div class="playBackBar">
						<span class="progressTime current">0:00</span>

						<div class="progressBar">
							<div class="progressBarBg">
								<div class="progress">
									
								</div>
							</div>	
						</div>

						<span class="progressTime remaining">0:00</span>	
					</div>
				</div>	
			</div>
			<div id="playingBarRight">
				
			</div>
			
		</div>
		
	</div>
</body>
</html>

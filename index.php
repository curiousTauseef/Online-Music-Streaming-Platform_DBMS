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
	<link rel="icon" class="rad" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>
	<div id="mainContainer">
		<div id="topContainer">
			<div id="navBarContainer">
				<nav class="navBar">
					<a href="index.php" class="logo">
						<img src="assets/images/icons/logo-white.png">
					</a>
					<div class="group">
						<div class="navItem">
							<a class="navItemLink" href="search.php">Search
								<img class="search-icon" alt="Search" src="assets/images/icons/search.png" title="Search">
							</a>
						</div>	
					</div>
					<div class="group">
						<div class="navItem">
							<a class="navItemLink" href="search.php">Browse</a>
						</div>

						<div class="navItem">
							<a class="navItemLink" href="search.php">My Music</a>
						</div>

						<div class="navItem">
							<a class="navItemLink" href="search.php">Dehan</a>
						</div>
					</div>
				</nav>
			</div>			
		</div>
			<div id="playingBarContainer">
			<div id="playingBar">
				<div id="playingBarLeft">
					<div class="content">
						<span class="albumLink">
							<img class="albumArtwork" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAk1BMVEX4kx8AAAD/mCB2RhW3bRr9lSHdgx/ykCHjhx+zaxqGTxZkPRP/mSBDKQuDThS0bRlLLQ0iFAqmYhadXhVVMw0AAAY3IgzFdRweEwhoPhDQfR8bEgqbXBdLMA5DKQ16SRVYNRJeOREuHAuOVhmrZxg6JhDXfx/0kCEoGQl0SBPghR6UWBYQCQiiYBlJMBBUMhApGwrfu3hvAAAFBElEQVR4nO2ZDW/iOBCGExMnpHWBftAsCYWDUij92N7//3U3YyeE3rGnOcFqfNL7SLtKTHg1T+3YTkgSAAAAAAAAfj/2vK8P8/gpznE0szR+yrMMB9rlC8hgCMPogaHIcHkVI6sLGg5NhLjskoZnZPw2TAlDSQgMNYGhLASGmsBQFgJDTWAoC4GhJjCUhcBQExjKQmCoCQxlITDUBIayEBhqAkNZCAw1gaEsBIaawFAWAkNNYCgLgaEmMJSFwFATGMpCYKgJDGUhMNQEhrIQGGoCQ1kIDDWBoSwEhprAUBYCQ01gKAuBoSYwlIXAUBMYykJgqAkMZSEw1ASGshAYagJDWQgMNYGhLASGmsBQFgJDTWAoC4GhJjCUhcBQExjKQmCoCQxlITDUBIayEBhqAkNZCAw1gaEsBIaawFAWAkNNYCgLgaEmMJSFwFATGMpCYKgJDGUhMNQEhrIQGGoCQ1kIDDWBoSwEhprAUBYCQ01gKAuBoSYwlIXAUBMYykJgqAkMZSEw1ASGshAYagJDWQgMNbmoYeFMfLjsgoar6xiZXNAwamAIw/iB4b8bzrTLF1CeY5gU/wPO8QMAAAAAAADEhDXOOWN/1WCM6ZoPbfbQGI499m/nR9foYqrB40ez+ty1FZric9Wkj8s61JeX49If2Kwc1+EaW4/HZfsW1lbjlqqw7WcdZRxvav/onkUrX77ZdOcPXLH9pCN/nZum6TJYm1tqHLTHj4eH2emGmszy6PG2Ouvx9jK4676enOox8/78lhTtHR34Oh1pjbyV3XqfEGBujowyk5hRXIY2pzrmibMZ9dCK6qvpfF05VzxzL5qThq1EeMPChtdZlpXvbO38h+u7e88813QL8Jh8cHTgeHC6xFG9P/z95O6pobanDJMmTV/SdBZ06RvP/LOBT8gtG05cPDONodvsxXElxabcJMmQqtyEwmzD990JQ1ulaUP/Uv+OhQ2vfDOP3W0SDLV8/glXmy5ozgt/cpN1hYcp49adMOSXlHvHr8n8GRs6a237XW/YvgPb6Yn1mMbfU6+zzZDqtXN/L3n8LOrMiT7kKcTt0/SJr2TD/Vueb8sffn49nmkGMQxT+3bb1XNNHfDO/RY+8T/wnTC03FfWdMP0eC693iXfDJcxGNIWpNq/hoJeDRt+dH3IbidGqVtR59BUQu2f5pvh9M4Ew2b1wHy96y8WhOVd1rAa0WqRjv18GMrK3YhtvaFv6AwLaniuqvon3cCt4QOtDu+Lfj2kudTxxi+KLszrmrdWxhQNz/q1XyLIe5Zu17wg+C2On3t4T0OG/Z4n7BHCakF/J557Z61hFGoBQ0Nu5Yelm1GlhjW+qN7uJ2jjJ1u/Hd3RwT0ZTI4M302/WvDo/TLxrRaffmKk9br2078/HyVh+U7XSRiUX9THPGhZlVfM0R2xoWG6tr0h/w70FAxvhh3afmTIPZM+DvZ8F025q/jgYz/64va5C32bNrM9jdn0Txf2rYmh9c/xXLu1vWFYP77tS58iGK6mnh6mwtwPxuNRyJPl7vDwMH0j4abbrvneXRqz6DYCfmb6bvgQgSE9Dl75FbEZFWESNZsXrzOie/HJN83X/QVvj5NF1T43DW4mP42Z3Szm3jBbTF4ya+aLScdNHAtiYpIiz2m1P5zbYlvndOtVk0NDf4E5evp3vKOl/9vn4vCRdT1xCJ7C+pptvAUCAAAAAAAAwH/iL7vPazV8ikRLAAAAAElFTkSuQmCC">		
						</span>
						<div class="trackInfo">
							<span class="trackName">
								<span>Muskurane</span>
							</span>
							<span class="artistName">
								<span>Arijit Sing</span>
							</span>
						</div>
					</div>
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
					<div class="volumeBar">
						<button class="controlButton volume" style="background-color: transparent; border: none;" title="Volume Button">
							<img src="assets/images/icons/volume.png" alt="Volume">
						</button>
						<div class="progressBar">
							<div class="progressBarBg">
								<div class="progress">
										
								</div>
							</div>	
						</div>
					</div>			
				</div>
				
			</div>
			
		</div>
		
	</div>
</body>
</html>

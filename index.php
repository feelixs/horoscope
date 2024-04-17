<?php
	// Include the session script
	require 'includes/session.php';


	/*
	   TO-DO: Write SQL query to retrieve ALL info on the zodiac signs
	 		  Execute the SQL query using the pdo function and fetch the result
	 */
	 $statement = $pdo->query('SELECT * FROM zodiac');
	 $signs = $statement->fetchAll();

?> 

<!DOCTYPE>
<html>

	<head>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>Cosmic Horoscopes</title>
  		<link rel="stylesheet" href="css/style.css">
  		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Press Start 2P">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  		<script src="js/loader.js"></script>
  		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  		<script src="js/horoscope.js"></script>
	</head>

	<body onload="loaderAnimation()">

		<header>
			<div class="header-left">
				<div class="logo">
					<img src="imgs/logo.png" alt="URI Cosmic Horoscopes Logo">
      			</div>

	      		<nav>
	      			<ul>
	      				<li><a href="index.php">Horoscopes</a></li>
			        </ul>
			    </nav>
		   	</div>

		    <div class="header-right">
		    	<ul>
		    		<li><?= $logged_in ? '<a href="logout.php">Log Out</a>' : '<a href="login.php">Log In</a>'; ?></li>
		    	</ul>
		    </div>
		</header>

		<div class="wrapper">
			<div class="oval"></div>
		</div>

		<div id="content" class="animate-bottom">
			<h1>Choose Your Zodiac Sign</h1>
			<hr />
			<br />

			<!-- 
				TO DO: Fill in the cards for ALL zodiac signs from the database
  			-->
			<div class="horoscopes-row">
				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a target="_blank" href="horoscope.php?sign=<?= $signs[0]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $signs[0]['imgSrc'] ?>" alt="<?= $signs[0]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $signs[0]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $signs[0]['birthday'] ?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a target="_blank" href="horoscope.php?sign=<?= $signs[1]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $signs[1]['imgSrc'] ?>" alt="<?= $signs[1]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $signs[1]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $signs[1]['birthday'] ?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a target="_blank" href="horoscope.php?sign=<?= $signs[2]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $signs[2]['imgSrc'] ?>" alt="<?= $signs[2]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $signs[2]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $signs[2]['birthday'] ?></p>
				</div>

			</div>

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a target="_blank" href="horoscope.php?sign=<?= $signs[3]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $signs[3]['imgSrc'] ?>" alt="<?= $signs[3]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $signs[3]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $signs[3]['birthday'] ?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a target="_blank" href="horoscope.php?sign=<?= $signs[4]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $signs[4]['imgSrc'] ?>" alt="<?= $signs[4]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $signs[4]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $signs[4]['birthday'] ?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a target="_blank" href="horoscope.php?sign=<?= $signs[5]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $signs[5]['imgSrc'] ?>" alt="<?= $signs[5]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $signs[5]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $signs[5]['birthday'] ?></p>
				</div>
				
			</div>

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a target="_blank" href="horoscope.php?sign=<?= $signs[6]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $signs[6]['imgSrc'] ?>" alt="<?= $signs[6]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $signs[6]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $signs[6]['birthday'] ?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a target="_blank" href="horoscope.php?sign=<?= $signs[7]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $signs[7]['imgSrc'] ?>" alt="<?= $signs[7]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $signs[7]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $signs[7]['birthday'] ?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a target="_blank" href="horoscope.php?sign=<?= $signs[8]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $signs[8]['imgSrc'] ?>" alt="<?= $signs[8]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $signs[8]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $signs[8]['birthday'] ?></p>
				</div>
				
			</div>

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a target="_blank" href="horoscope.php?sign=<?= $signs[9]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $signs[9]['imgSrc'] ?>" alt="<?= $signs[9]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $signs[9]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $signs[9]['birthday'] ?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a target="_blank" href="horoscope.php?sign=<?= $signs[10]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $signs[10]['imgSrc'] ?>" alt="<?= $signs[10]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $signs[10]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $signs[10]['birthday'] ?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a target="_blank" href="horoscope.php?sign=<?= $signs[11]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $signs[11]['imgSrc'] ?>" alt="<?= $signs[11]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $signs[11]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $signs[11]['birthday'] ?></p>
				</div>
				
			</div>

		</div>

	</body>
</html>
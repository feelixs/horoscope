<?php 

	// Include the database connection script
	require 'includes/database-connection.php';

	// Include script to generate a star rating
	require 'includes/starRating.php';


	/*
	   TO-DO: Retrieve the value of the 'sign' parameter from the URL query string
			  (i.e., ../horoscope.php?sign=Pisces). Make sure to call this variable $sign!

			  Write SQL query to retrieve ALL info on the zodiac sign based on sign parameter from the URL query string
	 		  Execute the SQL query using the pdo function and fetch the result
	 */
	 $this_sign = $_GET['sign'];
	 $statement = $pdo->query("SELECT * FROM zodiac WHERE name= '$this_sign'");
	 $data = $statement->fetch();
	 $sign = $data['name'];


	
	// Check if the cookie 'details_' . $sign is not set
	if (!isset($_COOKIE['details_' . $sign])) {

		// SQL query to select a random horoscope
		$sql2 = "SELECT * 
			FROM horoscope 
			ORDER BY RAND() LIMIT 1";

		// Execute the query and fetch the result
		$details = pdo($pdo, $sql2)->fetch();
		
		// Serialize the details and set it as a cookie
		$serializedDetails = serialize($details);
		setcookie('details_' . $sign, $serializedDetails, time() + 60 * 60 * 24);
	}

	else 
	{
		// If the cookie 'details_' . $sign is set, unserialize it to retrieve the details
		$details = unserialize($_COOKIE['details_' . $sign]);
	}

?>

<!-- 
	TO DO: Fill in ALL the placeholders for this zodiac sign and horoscope from the database
-->

<div id="content" class="animate-bottom">
	<div id="horoscope-content">

	    <div class="horoscope-info">
	        <div class="horoscope-header">
	        	<!-- Display image of zodiac with its name as alt text -->
	            <img src="<?= $data['imgSrc'] ?>" alt="<?= $sign ?>">

	            <!-- Display name of zodiac sign -->
	            <h2><?= $sign ?></h2>

	            <!-- Display birthday range of zodiac sign -->
	            <p><?= $data['birthday'] ?></p>
	        </div>

	        <div class="horoscope-ratings">
	            <h3>Today's Ratings:</h3>
	            <ul>
	            	<!-- Call the function in the 'starRating.php' file to generate a star rating based on the mood rating  -->
	                <li>Mood: <?= generateStarRating($details['moodRating']) ?></li>

	                <!-- Call the function in the 'starRating.php' file to generate a star rating based on the success rating  -->
	                <li>Success: <?= generateStarRating($details['successRating']) ?></li>

	                <!-- Call the function in the 'starRating.php' file to generate a star rating based on the love rating  -->
	                <li>Love: <?= generateStarRating($details['loveRating']) ?></li>
	            </ul>
	        </div>
	    </div>

	    <hr />

	    <div class="horoscope-description">
	        <h3>Today's Horoscope:</h3>
	        <!-- Display the horoscope description -->
	        <p><?= $details['description'] ?></p>
	    </div>
	</div>			
</div>



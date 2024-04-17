<?php
   // Include the session script
   include 'includes/session.php';


    /*
       TO-DO: Call the logout function in the 'session.php' file to terminate session
              Redirect to index page
  */
   logout();
   header('Location: index.php');
   exit;

?>

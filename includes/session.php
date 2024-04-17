<?php


   // Include the database connection script
   require 'database-connection.php';


   session_start();                                         // Start/renew session


   $logged_in = $_SESSION['logged_in'] ?? false;           // Is user logged in?




   function login($username)                             // Remember user passed login
   {
       session_regenerate_id(true);                     // Update session id
       $_SESSION['logged_in'] = true;                  // Set logged_in key to true
       $_SESSION['username'] = $username;             // Set username key to one from form
   }




   function require_login($logged_in)              // Check if user logged in
   {
       if ($logged_in == false) {                 // If not logged in
           header('Location: login.php');        // Send to login page
           exit;                                // Stop rest of page running
       }
   }


   function logout()                                   // Terminate the session
   {
       $_SESSION = [];                                 // Clear contents of array


       $params = session_get_cookie_params();          // Get session cookie parameters
       setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'],
           $params['secure'], $params['httponly']);    // Delete session cookie


       session_destroy();                              // Delete session file
   }




   /*
      TO-DO: Define a function that authenticates a user based on the provided username and password.


       Parameters:
       - $pdo: PDO object representing the database connection
       - $username: The username of the user to authenticate
       - $password: The password of the user to authenticate


       Returns:
       - An array representing the authenticated user if successful, otherwise returns null.



       - Write SQL query to retrieve the user with the provided username and password
       - Execute the SQL query using the pdo function and fetch the result
       - Return the user info
    */
   function authenticate($pdo, $username, $password)
   {
       $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
       $statement = $pdo->prepare($sql);
       $statement->execute(['username' => $username, 'password' => $password]);
       return $statement->fetch();
   }


?>

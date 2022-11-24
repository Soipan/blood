<?php
session_start();


// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'blooddonation';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['Email'], $_POST['Password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the email and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT Phone, Password FROM signup WHERE Email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the email is a string so we use "s"
	$stmt->bind_param('s', $_POST['Email']);
	$stmt->execute();
	// Store the result so we can check if the user exists in the database.
	$stmt->store_result();


	$stmt->close();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($Phone, $Password);
        $stmt->fetch();
        // User exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['Password'], $Password)) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['Email'];
            $_SESSION['id'] = $id;
            echo 'Welcome ' . $_SESSION['name'] . '!';
        } else {
            // Incorrect password
            echo 'Incorrect username and/or password!';
        }
    } else {
        // Incorrect username
        echo 'Incorrect username and/or password!';
    }
}
?>

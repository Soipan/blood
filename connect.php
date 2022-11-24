<?php
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Phone=$_POST['Phone'];

	// Database connection
	$conn = new mysqli('localhost','root','','blooddonation');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
		// Now we check if the data from the login form was submitted, isset() will check if the data exists.
	if ( !isset($_POST['Email'], $_POST['Password'], $_POST['Phone'])) {
			// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
	}
	else {
		$stmt = $conn->prepare("insert into signup(Email, Password, Phone) values(?, ?, ?)");
		$stmt->bind_param("ssi", $Email, $Password, $Phone);
		$execval = $stmt->execute();
		echo $execval;
		echo '<script>alert("Sign Up Successful. Please log in to be directed")
            window.location="recode.html";
        </script>';
		$stmt->close();
		$conn->close();
	}



?>
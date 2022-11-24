<?php

<?php 
include 'config.php';

if(isset($_POST['submit'])){
    $User_firstname = $_POST['User_firstname'];
    $User_middlename = $_POST['User_middlename'];
    $User_lastname = $_POST['User_lastname'];
    $User_email = $_POST['User_email'];
	$User_phone = $_POST['User_phone'];


	$sql = "SELECT * FROM user WHERE User_phone = '$User_phone'";
	$result = mysqli_query($conn, $sql);
	if ($result -> num_rows > 0){
		echo "<p>Phone number already exists</p>";
	}
	else{
		//login table
		$sql = "INSERT INTO user (User_firstname, User_middlename, User_lastname, User_email, User_phone, Role_id) 
		VALUES ('$User_firstname', '$User_middlename', '$User_lastname', '$User_email', '$User_phone', '2')";
		echo $sql;
		$result = mysqli_query($conn, $sql);

		echo $result;
                
		if(! $result){
			echo "<p>Registration not succesful</p>";
		}
		else {
			header ("Location: signin.php?status=success");
		}
	}
}



?>
?>


<!DOCTYPE html>
    <html lang="en">

        <head>

            <title> Login and Registration</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="recode.css">
           
             
        </head>

        <body>
            <div class="hero">
                <div class="form-box">
                    <div class="button-box">
                        <div id="btn"> </div>
                        <button type="button" class="toggle-btn" onclick="login()">Log In <a href="donor.php"></a> <a href="admin.php"></a> <a href="client.php"></a></button >                  
                        <button type="button" class="toggle-btn" onclick="signup()">Sign Up<a href="recode.php"></a></button>
                    </div>

                    <div class="social-icons">
                        <img src="fb.png">
                        <img src="ig.png">
                        <img src="gg.png">
                        <img src="tw.png">
                    </div>

                <form id="login" class="input-group">
                    <input type="text" class="input-field" placeholder="Email" required>
                    <input type="text" class="input-field" placeholder="Password" required>
                    <input type="checkbox" class="check-box"><span>Remember Password</span> 
                    <button type="submit" class="submit-btn">Log in</button>
                </form>

                <form id="signup" class="input-group">
                    <input type="email" class="input-field" placeholder="Email" required>
                    <input type="text" class="input-field" placeholder="Enter Password" required>
                    <input type="text" class="input-field" placeholder="Confirm Password" required>
                    <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span> 
                    <button type="submit" class="submit-btn">Sign Up</button>
                </form>

                </div>
            </div>

            <script>
                var x = document.getElementById("login");
                var y = document.getElementById("signup");
                var z = document.getElementById("btn");

                function signup(){
                    x.style.left="-400px";
                    y.style.left="50px";
                    z.style.left="110px";

                }

                function login(){
                    x.style.left="50px";
                    y.style.left="450px";
                    z.style.left="0";
                }
            </script>
        </body>

    </html>
<?php






?>


<!DOCTYPE html>
    <html lang="en">

        <head>

            <title> Login and Registration</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
            <link rel="stylesheet" type="text/css" href="recode.css">
           
             
        </head>

        <body>
            <div class="hero">
                <div class="form-box">
                    <div class="button-box">
                        <div id="btn"> </div>
                        <button type="button" class="toggle-btn" onclick="login()">Log In </button >                  
                        <button type="button" class="toggle-btn" onclick="signup()"></a>Sign Up</button>
                    </div>

                    <div class="social-icons">
                        <img src="fb.png">
                        <img src="ig.png">
                        <img src="gg.png">
                        <img src="tw.png">
                    </div>

                <form id="login" method="post" autocomplete="off" class="input-group">
                    <input type="text" class="input-field" placeholder="Email" required>
                    <input type="password" class="input-field" placeholder="Password" required>
                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                    <input type="checkbox" class="check-box"><span>Remember Password</span> 
                    <button type="submit" class="submit-btn">Log in</button>
                </form>

                <form id="signup" method="post" autocomplete="off" class="input-group">
                    <input type="email" class="input-field" placeholder="Email" required>
                    <input type="password" class="input-field" placeholder="Enter Password" required>
                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                    <input type="password" class="input-field" placeholder="Confirm Password" required>
                    <i class="bi bi-eye-slash" id="togglePassword"></i>
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

                const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('signup',  function (e) {
            e.preventDefault();
        });
            </script>
        </body>

    </html>
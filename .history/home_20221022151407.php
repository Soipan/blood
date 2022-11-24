<?php

?>

<!DOCTYPE html>
    <html lang="en">

        <head>

            <title>Donation Homepage</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
                <style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
} 
.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(donation.png);
    background-size: cover;
    background-position: center;
}

.navbar img{
    width: 100px;
    margin: 0 12px;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius: 20%;

}
.navbar{
    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content:
    space-between;
}

.logo{
    width: 120px;
    cursor: pointer;
}

.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}

.navbar ul li a{
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
}

.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #960032;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
    
}

.navbar ul li:hover::after{
    width: 100%;
}

.content{
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: #fff;
}

.content h1{
    font-size: 50px;
    margin-top: 80px;
}

.content p{
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
}

button{
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #960032;
    background: transparent;
    color: #fff;
    cursor: pointer;   
    position: relative;
    overflow: hidden;
}

span{
    background: #960032;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;
}

button:hover span{
    width: 100%;
}

button:hover{
    border: none;
}
                </style>
        </head>

        <body>

            <div class="banner">
                <div class="navbar">
                    <img src="logo.png" class="logo">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="recode.php">Sign Up/Log in</a></li>
                    </ul>                    
                </div>

                <div class="content">
                    <h1>YOUR INTEREST IS HIGHLY APPRECIATED</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, veniam ullam molestiae facere dolorum, sit, dignissimos illo ratione quae repudiandae doloribus voluptate. <br> Maxime blanditiis reprehenderit voluptates aut explicabo fugit repudiandae.</p>
                    <div>
                        <button type="button"><span></span> DONATE?</button>
                        <button type="button"><span></span> SUPPORT?</button>
                    </div>
                </div>


            </div>

        </body>

    </html>
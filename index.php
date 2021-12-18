<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bank Management</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
   
</head>

<body>
    <div class="main-container">
        <!-- Header Navbar  -->
        <nav class="navbar">
            <img src="assets/images/logo5.png">
            <ul class="nav-links">
                <li><a href="#row2">ABOUT</a></li>
                <li><a href="#row3">SERVICES</a></li>
                <li><a href="#row4"><button class="btn">GET STARTED</button></a></li>
            </ul>
        </nav>
        <!--Nav ends-->

        <!--Contents Starts-->
        <div class="content-container">

            <!--Row 1-->
            
                <div class="content-left1" >
                    <h1 class="main-h1">EXPERTISE YOU NEED, SERVICE YOU DESERVE</h1>
                    <div>
                        <a href="#row4"><button class="btn">LOGIN</button></a>
                    </div>
                    
                </div>
                <div class="content-right1">
                    <img src="assets/images/row1.png.png">
                </div>
            
            <!--Row 2-->

            <div class="content-left2" id="row2">
                <img src="assets/images/row4.png">
            </div>
            <div class="content-right2">
                <div>
                    <h1 class="heading">About Us</h1>
                    <h3>Our Corporate Office.</h3>
                    <div class="description">       
                        Fair Trades,<br> TBI,<br> Amal Jyothi COllege of Engineering,<br>Kanjirappally<br>
                        Tel: (91) 9876543210
                    </div>
                </div>
            </div>

            <!--Row 3-->

            <div class="content-left1" id="row3">
                <div>
                    <h1 class="heading">Services Offered</h1>
                

                    <ul class="description">
                        <li>Accounts & Deposits</li>
                        <li>Loans</li>
                        <li>Mutual Funds</li>
                        <li>Insuarance</li>
                        <li>Money Transfer</li>
                    </ul>
                </div>
            </div>
            <div class="content-right1">
                <img src="assets/images/row2.png">
            </div>

            <!--Row 4-->

            <div class="content-left2" id="row4">
                <img src="assets/images/login.png">
            </div>
            <div class="content-right2">


                <div class="flip-container">
                    <div class="flipper" id="flipper">
                        <div class="front">
                            <h1 class="title">Login</h1>
                            <form action="login.php" method="post" >
                                        <input type="email" placeholder="email" name="email" >
                                        <input type="password" placeholder="password" name="psw">
                                        <input type="submit" value="Login">
                            </form>
                            <a class="flipbutton" id="loginButton" >Create my account →</a>
                        </div>
                        
                        <div class="back">
                            <h1 class="title">Register</h1>
                            <form action="signup.php" method="post">
                                    <input type="email" placeholder="Email" name="email" >
                                    <input type="password" placeholder="Password" name="psw" >
                                    <input type="submit" value="Sign up">
                            </form>
                            <a class="flipbutton" id="registerButton" >Login to my account →</a>
                        </div>
                    </div>
                    </div>
        
            </div>
           
        </div>
        <!--End of content-->


        <!--Footer-->
        <footer class="footer">
            <span>COPYRIGHT © FAIR TRADES</span>
            <span>DESIGNED BY ALJO BIJU</span>
            <ul class="social-icons">
                <li><img src="assets/images/Facebook.png" alt="facebook"></li>
                <li><img src="assets/images/LinkedIN.png" alt="linkedin"></li>
                <li><img src="assets/images/Twitter.png" alt="twitter"></li>
            </ul>
        </footer>
        <!--End of footer-->

    </div>
   

    <script>
        var loginButton = document.getElementById("loginButton");
var registerButton = document.getElementById("registerButton");

loginButton.onclick = function(){
	document.querySelector("#flipper").classList.toggle("flip");
}

registerButton.onclick = function(){
	document.querySelector("#flipper").classList.toggle("flip");
}
    </script>
</body>

</html>

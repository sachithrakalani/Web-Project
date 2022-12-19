<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container01" id="container01">
        <div class="navbar01">
            <img src="images/2.png" class="logo01" width="100" height="100">
            <nav id="nav-01">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="about us.html">About us</a></li>
                    <li><a href="login.html">Join us</a></li>

                </ul>
            </nav>
            <img src="images/menu.png" class="menu-icon" id="menu01" width="20" height="20">
        </div>

        <div class="form-box" id="logbox01">
            <div class="button-box">
                <div id="btn02"></div>
                <button type="button" class="togle-btn" id="toglebtn01" onclick="login()">Log In</button>
                <button type="button" class="togle-btn" id="toglebtn01" onclick="register()">Register</button>
            </div>

            <div class="social-icons" id="sicons">
                <img src="images/fb.png">
                <img src="images/gl.png">
                <img src="images/tw.png">
            </div>
            <form action="user_login.php" method="post">
                <form id="login01" class="input-group">
                    <input type="text" class="input-field" placeholder="User ID" id="textcolor1" name="User_ID" />
                    <input type="password" class="input-field" placeholder="Enter Password" id="textcolor1" name="Password" />
                    <input type="checkbox" class="chech-box"><span id="spn01">Remember me</span>
                    <button type="submit" class="submit-btn">Log in</button>
                </form>
            </form>
            <form action="user_register.php" method="post">
                <form id="register01" class="input-group">
                    <input type="text" class="input-field" placeholder="User ID" id="textcolor1" name="User_ID_No" / >
                    <input type="email" class="input-field" placeholder="Email ID" id="textcolor1" name ="Email" />
                    <input type="password" class="input-field" placeholder="Enter Password" id="textcolor1"  name= "Password_No" />
                    <input type="checkbox" class="chech-box"><span id="spn01"> I agree to the terms & conditions</span>
                    <button type="submit" class="submit-btn">Register</button>
                </form>
            </form>
        </div>

    </div>

    <script>
        var x = document.getElementById("login01");
        var y = document.getElementById("register01");
        var z = document.getElementById("btn02");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0 ";
        }
    </script>

</body>

</html>
<?php
// connect to database
//$conn = mysqli_connect('localhost','root','','pizza_store');

//.check .connection
//if(!$conn){
// echo 'Connection.error:' . mysqli_connect_error();
//}

// write query for all pizza categori
//$sql = 'SELECT * FROM Our_Menu';

//make query & get result
//$result = mysqli_query($conn, $sql);
//  echo  $result;

//  // fetch the resulting rows as an arry
//$pizza_store = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
//mysqli_free_result($result);

// close connection
//mysqli_close($conn);
//echo ($pizza_store);
//  echo '<script>console.log("'$var1 . "\n" . $var2'"); </script>';








function goClick()
{
    echo 'abd';
}




if (isset($_POST['btn05'])) {
    echo "This is Button1 that is selected";
}

?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container01" id="container01">
        <div class="navbar01">
            <img src="images/2.png" class="logo01" width="100" height="100">
            <nav id="nav-01">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="login.php">Menu</a></li>
                    <li><a href="">About us</a></li>
                    <!-- <li><a href="">Downloads</a></li> -->
                    <li><a href="login.php">Join us</a></li>

                </ul>

            </nav>
            <img src="images/menu.png" class="menu-icon" id="menu01" width="20" height="20">
        </div>

        <!--example-->

        <div class="row">
            <div class="header" id="head02">

                <h1>Our Menu</h1>
                <ul class="menu" id="menu02">

                    <li class="button active" id="ital">
                        <a href="#">Other</a>
                    </li>


                    <li class="button " id="chicken">
                        <a href="#">Chicken</a>
                    </li>

                    <li class="button" id="veg">
                        <a href="#">Cheese</a>
                    </li>


                </ul>
            </div>

            <div class="card-producr-box" id="crdbox02">


                <!--chicken-->


                <div class="card chicken" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/4.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 1</h3> -->
                        <h4>BBQ Chicken Pizza0</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';" >Go</a>
                </div>


                <div class="card chicken" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/4.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 2</h3> -->
                        <h4>Acapulco Chicken Pizza</h4>
                    </div>
                    <a class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>



                <div class="card chicken" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/4.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 3</h3> -->
                        <h4>Buffolo Chicken Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>



                <div class="card chicken" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/4.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 4</h3> -->
                        <h4>Chicken Bell pepper Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>



                <div class="card chicken" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/4.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 5</h3> -->
                        <h4>Spicy Chicken Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>



                <div class="card chicken" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/4.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 6</h3> -->
                        <h4>Thai Chicken Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>



                <!-- <div class="card chicken" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/4.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <h3>pizza 7</h3>
                        <h4>chicken</h4>
                    </div>
                    <a href="#" class="btn" id="btn05">Go</a>
                </div> -->



                <!-- <div class="card chicken" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/4.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <h3>pizza 8</h3>
                        <h4>chicken</h4>
                    </div>
                    <a href="#" class="btn" id="btn05">Go</a>
                </div> -->



                <!-- <div class="card chicken" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/4.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <h3>pizza 9</h3>
                        <h4>chicken</h4>
                    </div>
                    <a href="#" class="btn" id="btn05">Go</a>
                </div> -->


                <!-- Cheese -->


                <div class="card veg" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/5.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 11</h3> -->
                        <h4>Cheese Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>


                <div class="card veg" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/5.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 12</h3> -->
                        <h4>Cheeseburger Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>


                <div class="card veg" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/5.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 13</h3> -->
                        <h4>Cheese and papperoni Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>


                <div class="card veg" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/5.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 14</h3> -->
                        <h4>Cheese Bread Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>


                <div class="card veg" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/5.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 15</h3> -->
                        <h4>Cheesy Pepper Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>

                <div class="card veg" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/5.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 16</h3> -->
                        <h4>Cherry Cheese Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>

                <!-- <div class="card veg" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/5.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 10</h3> -->
                <!-- <h4>vegetarian</h4>
                    </div>
                    <a href="#" class="btn" id="btn05">Go</a>
                </div> --> -->

                <!-- Other -->


                <div class="card ital" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/6.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 21</h3> -->
                        <h4>Apple Pizza Dessert</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>

                <div class="card ital" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/6.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 22</h3> -->
                        <h4>Apple Pie Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>

                <div class="card ital" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/6.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 23</h3> -->
                        <h4>Seafood Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>

                <div class="card ital" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/6.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 24</h3> -->
                        <h4>Mixed Berry Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>

                <div class="card ital" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/6.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 25</h3> -->
                        <h4>Cannoli Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>


                <div class="card ital" id="cardmenu01">
                    <div class="img" id="crdimg">
                        <img src="images/6.jpg" alt="">
                    </div>
                    <div class="text-desk" id="txdesk">
                        <!-- <h3>pizza 26</h3> -->
                        <h4>Thriple Berry Pizza</h4>
                    </div>
                    <a href="#" class="btn" id="btn05" onclick="window.location.href='login.php';">Go</a>
                </div>

            </div>


            <div class="loadmore" id="loadmore01">
                <a href="#" id="loadmore">Load More...</a>
            </div>



        </div>




    </div>

    <script src="jquery-3.6.2.min.js"></script>
    <script src="main.js"></script>


</body>

</html>
<?php

$user_Name = $_POST['User_ID'];
$password_No = $_POST['Password'];

// connect to database
$conn = mysqli_connect('sql110.epizy.com','epiz_33287063','lJUIps2jfnHLcN','epiz_33287063_pizza_store');

//.check .connection
if (!$conn) {
    echo 'Connection.error:' . mysqli_connect_error();
}

// write query for all pizza categori
$sql = "SELECT * FROM User where User_ID = $user_Name";

// make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an arry
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);


if (count($users) == 0) {
            echo '<script type="text/javascript">';
            echo 'if(confirm("Places Register our web page. Do you want to continue?")) {
                window.location.href = "login.php"
            }'; 
            echo '</script>';
}
if (count($users) > 0) {
    $user = $users[0];
    if ($user['Password'] == $password_No) {
        // echo "Loing our web page";
        header('Location: menu.php');
            
    } else {
            echo '<script type="text/javascript">';
            echo 'if(confirm("Your Password is incorrect. Do you want to continue?")) {
                window.location.href = "login.php"
            }'; 
            echo '</script>';
    }
}

// close connection
mysqli_close($conn);

?>
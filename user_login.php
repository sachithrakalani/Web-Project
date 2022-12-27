<?php

$user_Name = $_POST['User_ID'];
$password_No = $_POST['Password'];

// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'pizza_store');

//.check .connection
if (!$conn) {
    echo 'Connection.error:' . mysqli_connect_error();
}

// write query for all pizza categori
$sql = "SELECT * FROM User where User_ID=$user_Name";

// make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an arry
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);


if (count($users) == 0) {
    echo "Places Register our web page";
}
if (count($users) > 0) {
    $user = $users[0];
    if ($user['Password'] == $password_No) {
        echo "Loing our web page";
    } else {
        echo "Your Password is incorrect";
    }
}

// close connection
mysqli_close($conn);

?>
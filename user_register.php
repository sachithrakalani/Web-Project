<?php  
    // echo "This is text";
$User_Name = $_POST['User_ID_No'];
$User_Email = $_POST['Email'];
$Password_No = $_POST['Password_No'];

//  echo $User_Name;
//  echo $Password_No;

//database connection
$conn = new mysqli('localhost','root','','pizza_store');
if($conn->connect_error){
    die('connection Faild : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into User(User_ID, Email, Password)
    values(?,?,?)");
    $stmt->bind_param("isi", $User_Name, $User_Email, $Password_No);
    $stmt->execute();
    echo "Welcome our Web Page ";
    $stmt->close();
    $conn->close();
}


?>

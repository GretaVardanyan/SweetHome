<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$login_fail = false;
if(isset($_SESSION['user']) && isset($_SESSION['user']['id']) && $_SESSION['user']['id'] > 0){
    header("Location: ../php/main.php");
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

if (isset($_POST['submit'])){
    $sql = "SELECT `id`,`username`,`password` FROM `users` WHERE `username` = '".($_POST['uname'])."' and `password`='".($_POST['psw'])."'  LIMIT 1";
    //$sql = "select count(*) from `user`";
    $result = $conn->query($sql);
    //var_dump($result);

    if ($result->num_rows > 0) {
        // output data of each row

        $_SESSION['user'] = $result->fetch_assoc();
        //echo "id: " . $row["user_id"]. " - Name: " . $row["user_login"]. " " . $row["password"]. "<br>";
        $result->free();

        $conn->close();

        header("Location: ../php/main.php");
    }else{
        $login_fail = true;
    }
}
?>
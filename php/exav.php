<?php
session_start();
if(isset($_GET['quit'])){
    session_destroy();
    header("Location: login.php");
}
if(!isset($_SESSION['user']) || !isset($_SESSION['user']['id'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="login.css" type="text/css"> 
<body>

<h2 style="text-align: center;">Hi <?php echo $_SESSION['user']['username'];?></h2>
<a href="?quit=true">logout</a>
</body>
</html>
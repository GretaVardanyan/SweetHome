<?php 
session_start();
require_once("db.php");
?>
<html lang="en">
<head>
  <title>Sweet Home Login</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css"> 
      <link rel="icon" type="image/png" href="../img/login_home_icon.png" />
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:  #A9A9A9">

<div class="window" style="width: 70%" >
   
  <h1 style="color: whitesmoke"><samp><b><i >Home Sweet Home</i></b></samp></h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner">

      <div class="item active">
        <img src="../img/SweetHome1.png" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Smart Home</h3>
          <p>Lighting control system</p>
        </div>
      </div>

      <div class="item">
        <img src="../img/SweetHome2.png" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Smart Home</h3>
          <p>Temperature Controllers & Securitye Control system</p>
        </div>
      </div>
    
      <div class="item">
        <img src="../img/SweetHome3.png" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Smart Home</h3>
          <p>Controlled Leaks</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--   login forma -->
    <div class="login">
<div class="text-center">
	 <input type="image" src="../img/logindoor.png" alt="Submit" a href="#myModal" class="door-btn" data-toggle="modal" >
</div>


<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="../img/loginopen.png" alt="Avatar">
				</div>	
               <!--       <div style="color:red;"><?php
      if(isset($login_fail) && $login_fail){
          echo "Password is incorected";
      }
      ?>
          </div>-->
				<h4 class="modal-title">User Login</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="login.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="uname" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="psw" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                        
					</div>
               
				</form>
			</div>
			
		</div>
	</div>
    
</div>   
      
    </div>
    
   
    
    
</body>
</html>

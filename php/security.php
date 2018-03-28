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

<html>
    <html ng-app="myApp">
        <head>
<TITLE> Security page </TITLE>
        <link rel="icon" type="image/png" href="../img/camericon.png" />
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/lightingstyle.css"> 
<link rel="stylesheet" type="text/css" href="../css/securitystyle.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>     
    <script src="https://cdn.rawgit.com/SlexAxton/messageformat.js/v0.3.0/messageformat.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-animate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-cookies.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-sanitize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-translate/2.10.0/angular-translate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-translate-interpolation-messageformat/2.10.0/angular-translate-interpolation messageformat.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-translate-storage-cookie/2.10.0/angular-translate-storage-cookie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-translate-storage-local/2.10.0/angular-translate-storage-local.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-translate-loader-url/2.10.0/angular-translate-loader-url.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-translate-loader-static-files/2.10.0/angular-translate-loader-static-files.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-translate-handler-log/2.10.0/angular-translate-handler-log.js"></script>
        </head>
    
       <body>
           <script src="../js/lighting.js"></script>
           <div ng-controller="Ctrl"> 
              <div id="navbar">
   <a href="../php/main.php"><img src="../img/p1.png" width="56" height="46" /></a>
   <a href="../php/lighting.php"><img src="../img/p3.png" width="56" height="46" /></a>
   <a href="../php/security.php"><img src="../img/p2.png" width="56" height="46"  /></a>
   <a href="../php/temper.php"><img src="../img/p4.png" width="56" height="46" /></a>	
   <a href=""><img src="../img/p5.png" width="56" height="46"  ></a>
                  
        <div class="ok">  
        <input type="image" src="../img/arm.png" alt="Submit" width="38" height="38" ng-click="changeLanguage('de')" translate="">
        <input type="image" src="../img/eng.png" alt="Submit" width="38" height="38" ng-click="changeLanguage('en')" translate="">
            <br> <br> <div style=" position: absolute; top: -15px; right: -62px;">
         <a href="?quit=true" >   <input  type="image" src="../img/logout.png" alt="Submit" width="48" height="38" > </a> </div>
        </div> 
             </div> 
  <body style="background-color: gainsboro">
     <img src="../img/sechome.png" class="sechome">
    <a class="btn trigger" href="javascript:;">   
          <img id="myImage1" class="myImage1" onclick="changeImage1()"  align="top" src="../img/cameraoff.png" >
     </a>
      <button class="btnsec">Do you know him?</button>
<div class="modal-wrapper">
  <div class="modal">
    <div class="head">
      <a class="btn-close trigger" href="javascript:;"></a>
    </div>
   
  </div>
</div>
      
      <style>
.blur{
  -webkit-filter: blur(10px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(5px);
}

.modal-wrapper{
  width:100%;
  height:100%;
  position:fixed;
  top:0; left:0;
  background:rgba(211,211,211,0.75);
  visibility:hidden;
  opacity:0;
  -webkit-transition: all 0.25s ease-in-out;
  -moz-transition: all 0.25s ease-in-out;
  -o-transition: all 0.25s ease-in-out;
  transition: all 0.25s ease-in-out;
}

.modal-wrapper.open{
  opacity:1;
  visibility:visible;
}

.modal{
  width:800px;
  height:600px;
  display:block;
  margin:50% 0 0 -300px;
  position:relative;
  top:40%; left:40%;
  background:#fff;
  opacity:0;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

.modal-wrapper.open .modal{
  margin-top:-200px;
  opacity:1;
}

.head{
  width:100%;
  height:38px;
  padding:1.5em 10%;
  overflow:hidden;
  background:#D2AEAE;
}

.btn-close{
  width:32px;
  height:32px;
  display:block;
  float:right;
}

.btn-close::before, .btn-close::after{
  content:'';
  width:32px;
  height:6px;
  display:block;
  background:#F5F5DC;
}

.btn-close::before{
  margin-top:12px;
  -webkit-transform:rotate(45deg);
  -moz-transform:rotate(45deg);
  -o-transform:rotate(45deg);
  transform:rotate(45deg);
}

.btn-close::after{
  margin-top:-6px;
  -webkit-transform:rotate(-45deg);
  -moz-transform:rotate(-45deg);
  -o-transform:rotate(-45deg);
  transform:rotate(-45deg);
}

.content{
  padding:5%;
}
      </style>
      
      
      
      
      <script>
      
      $( document ).ready(function() {
  $('.trigger').click(function() {
     $('.modal-wrapper').toggleClass('open');
    $('.page-wrapper').toggleClass('blur');
     return false;
  });
});
//  cameran baci      
            function changeImage1() {
    var image = document.getElementById('myImage1');
    if (image.src.match("cameraon")) {
        image.src = "../img/cameraoff.png";
    } else {
        image.src = "../img/cameraon.png";
    }
}
          
      </script>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
</body>
</html>

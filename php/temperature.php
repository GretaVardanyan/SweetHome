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
<TITLE> Temperature page </TITLE>
        <link rel="icon" type="image/png" href="../img/TEMPERicon.png" />
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/lightingstyle.css">          
<meta name="viewport" content="width=device-width, initial-scale=1">
            
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
   <a href="../php/temperature.php"><img src="../img/p4.png" width="56" height="46" /></a>	
   <a href=""><img src="../img/p5.png" width="56" height="46"  ></a>
                 
        <div class="ok">  
        <input type="image" src="../img/arm.png" alt="Submit" width="38" height="38" ng-click="changeLanguage('de')" translate="">
        <input type="image" src="../img/eng.png" alt="Submit" width="38" height="38" ng-click="changeLanguage('en')" translate="">
            <br> <br> <div style=" position: absolute; top: -15px; right: -62px;">
         <a href="?quit=true" >   <input  type="image" src="../img/logout.png" alt="Submit" width="48" height="38" > </a> </div>
        </div> 
             </div> 
               
               
<div class="img" >
    <br>
     <img src="../img/3d.png" width="1200" height="1086" > 
    <img id="myImage4" class="myImage4" onclick="changeImage4()"  align="top" src="../img/samsungoff.png" width="245" height="100">
    <img id="myImage5" class="myImage5" onclick="changeImage5()"  align="top" src="../img/buxarioff.png" width="200" height="120">
    <style>
         .myImage4{
                position: absolute;
                top: 650px;
                right: 870px;      
            }
         .myImage5{
                position: absolute;
                top: 280px;
                right: 1120px;      
            }
    </style>
    <script> 
     function changeImage4() {
    var image = document.getElementById('myImage4');
    if (image.src.match("samsungon")) {
        image.src = "../img/samsungoff.png";
    } else {
        image.src = "../img/samsungon.png";
    }
}
        function changeImage5() {
    var image = document.getElementById('myImage5');
    if (image.src.match("buxarion")) {
        image.src = "../img/buxarioff.png";
    } else {
        image.src = "../img/buxarion.png";
    }
}
    </script>
    
               </div>
    
   <!-- <img src="../img/buxarioff.png" width="200px" height="200px"> 
             <input type="image" src="../img/samsungon.png" alt="Submit" width="200" height="138" >
    <button type="button" class="button" style="background-color: " onclick="document.getElementById('bool1').src='../img/samsungon'">Red</button>
               </div>-->
               
    <div class="thermometer">
  <div class="pointer"></div>
</div>

<div class="input">
  <form onsubmit="run(event)" method="post">
    <input id='temperature' class="temperature" type="text" placeholder="°C" onfocus="this.placeholder=''" onblur="this.placeholder=''" style=" border-style: ridge;
    border-width: 7px;
    border-color: #D2AEAE">
     
 <button type="submit" class="run" value="Run" translate='Run' type="button" style="border-radius: 60px;  background-color: #D2AEAE; width:50px; height:50px; border:none;"> </button>
  </form>
</div>


<script>
        const temperatureChange = (celsius) => {
  return celsius * (9/5);
};

const getFahrenheit = (celsius) => {
  return temperatureChange(celsius) + 32;
};



var run = (e) => {
  e.preventDefault();
   var inputcelcius = document.getElementById('temperature').value;
   var pointer = document.getElementsByClassName('pointer')[0];
   var fahrenheit = getFahrenheit(inputcelcius)
   pointer.innerHTML = fahrenheit+'°F';
   pointer.style.marginTop = inputcelcius * -1+5+ 'px';
   pointer.style.height = inputcelcius*1+100+ 'px';
   console.log(pointer.style);
};


console.log( + getFahrenheit(15) + '°F');

               
               </script>
               <style>
                   .temperature{
                       position: absolute;
                       top: 150px;
                       right: 170px;
                   }            
                   .run{
                       position: absolute;
                       top: 150px;
                       right: 100px;
                   }
.thermometer {
  width: 15px;
  height: 120px;
  position: absolute;
  top: 320px;
  RIGHT: 400px;
  margin-top: -107px;
  margin-left: -22px;
  background: #fff;
  border: 10px solid gray;
  border-bottom: 0;
  -webkit-border-top-left-radius: 60px;
  -webkit-border-top-right-radius: 60px;
  -moz-border-radius-topleft: 60px;
  -moz-border-radius-topright: 60px;
  border-top-left-radius: 60px;
  border-top-right-radius: 60px;
}

.thermometer::before {
  content: " ";
  position: absolute;
  z-index: 0;
  bottom: -56px;
  left: -18px;
  width: 40px;
  border: 10px solid #fff;
  height: 40px;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;
}

.thermometer::after {
  content: "";
  display: block;
  width: 60px;
  height: 60px;
  position: absolute;
  bottom: -66px;
  left: -28px;
  background: red;
  border: 10px solid gray;
  -webkit-border-radius: 60px;
  -moz-border-radius: 60px;
  border-radius: 60px;
  z-index: -1;
}

.thermometer-value {
  font-family: Arial, sans-serif;
  position: absolute;
  display: block;
  margin: 0;
  border: 0;
  width: 7px;
  height: 180px;
  top: 21px;
  left: 8px;
  overflow: hidden;
  text-indent: -30px;
  background: red;
}
.thermometer-cover {
  position: absolute;
  display: block;
  width: 2px;
  height: 200px;
  border: 0;
  left: 0;
  bottom: 0%;
  background: #ccc;
}

.pointer {
  position: absolute;
  top: 50%;
  left: 80%;
  margin-top: -40px;
  margin-left: -13px;
  width: 20px;
  height: 0px;
  background: red;
  border: none;
 
}

               
               </style>
  </div>
</body>
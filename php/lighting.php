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
<TITLE> Lighting page </TITLE>
        <link rel="icon" type="image/png" href="../img/lighticon.png" />
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
   <a href="../php/temper.php"><img src="../img/p4.png" width="56" height="46" /></a>	
   <a href=""><img src="../img/p5.png" width="56" height="46"  ></a>
                  
        <div class="ok">  
        <input type="image" src="../img/arm.png" alt="Submit" width="38" height="38" ng-click="changeLanguage('de')" translate="">
        <input type="image" src="../img/eng.png" alt="Submit" width="38" height="38" ng-click="changeLanguage('en')" translate="">
            <br> <br> <div style=" position: absolute; top: -15px; right: -62px;">
         <a href="?quit=true" >   <input  type="image" src="../img/logout.png" alt="Submit" width="48" height="38" > </a> </div>
        </div> 
             </div>  

        
           
      <div class="control control--switch">
    <label for=""></label>
    <input type="checkbox" class="switch" id="light-switch" name="light-switch"/>
    <label for="light-switch"></label>
  </div>
  
  <div class="control control--range">
    <label translate='brig' for=""></label>
    <input type="range" name="brightness" min="50" max="150" value="100" step="1">
  </div>
  
  <div class="control control--range">
    <label translate='temper' for="">Temperature</label>
      <input type="range" name="temp" min="-50" max="50" value="0" step="1"> </div>
           <div class="center"> </div>
           
           
  <div class="target">
    <div class="img__cover">
        
    <div class="stage">
        <button type="button" id="curtain"
       onclick="href=''">
       </button>
  <div class="stage-content"></div>
  <label class="curtain-container">
    <div class="curtain-panel">
      <input type="checkbox" class="curtain-trigger"  />
      <div  class="left-curtain curtain" style=" font-size: 0.8em;" data-title="Open"></div>
      <div class="right-curtain curtain" style="font-size: 0.8em;" data-title="..Blinds"></div>
    </div>
  </label>
</div>
        <style> 
            .stage {
  background: #D3D3D3;            /*  baceluc heto fone*/
  width: 320px;
  margin: 2em auto;
  border: 11px solid #D2AEAE;
  box-shadow: 1px 4px 4px #aaa, inset 1px 3px 6px black;
  padding: 1em 0 3em;
  position: absolute;
                top: 0;
                right: -20px;
}

.stage-content {
  background-repeat: no-repeat;
  background-size: 400px 200px;
  background-position: center;
  padding-top: 40%;
  background-image: url('../img/paris.jpg' );
    
}

.stage-content:after {
  content: '';
  text-align: center;
  display: block;
  text-transform: uppercase;
  transform: translateY(0.8em);
  font-size: 0.4em;
}

.curtain-container {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 2px;
  right: 0;
}

.curtain-panel {
  display: flex;
  height: 100%;
  width: 100%;
  cursor: pointer;
  overflow: hidden;
}

.curtain-panel .curtain {
  width: 50%;
  background-color: #A9A9A9 ;
    opacity: 0.8;                          /*tapancika guynn sarqum*/
  position: relative;
  transition: transform 0.5s ease-out;
  display: flex;
  align-items: center;
  overflow: hidden;
}

.curtain-panel .curtain:before {
  content: attr(data-title);
  text-align: center;
  width: 150%;
  position: absolute;
  top: 50%;
  line-height: 0;
  font-size: 1.1em;
  text-shadow: 1px 1px 3px #483D8B;
}

.curtain-panel .left-curtain:before {
  left: 0;
}

.curtain-panel .right-curtain:before {
  right: 0;
}

.curtain-panel .curtain:after {
  content: '';
  background-size: 20px 20px;
  background-image: radial-gradient(circle at 10px -5px, rgba(0, 0, 0, 0) 12px, #fff 13px);
  display: block;
  height: 20px;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
}

.curtain-trigger {
  visibility: hidden;
  position: absolute;
}

.curtain-trigger:checked ~ .left-curtain {
  transform: translateX(calc(-100% + 2em));
}

.curtain-trigger:checked ~ .right-curtain {
  transform: translateX(calc(100% - 2em));
}
    </style>
 
        
	<img id="myImage1" class="myImage1" onclick="changeImage1()"  align="top" src="../img/pic_bulboff.gif" width="45" height="65">
      <!-- <img id="myImage2" class="myImage2" onclick="changeImage2()"  align="top" src="../img/pic_bulboff.gif" width="45" height="65">-->
       <img id="myImage3" class="myImage3" onclick="changeImage3()"  align="top" src="../img/pic_bulboff.gif" width="45" height="65">      
 <!--  <a href="#text">  <img id="bool1" class="bool"  src="../img/bool.png" onclick="changebool()"  align="top" width="55" height="85">  </a>-->
      <a href="#text">  <img id="myImage4" class="bool"   align="top" src="../img/led.png" > </a>
        <script> 
           function changeImage4() {
    var image = document.getElementById('myImage4');
    if (image.src.match("ledred")) {
        image.src = "../img/led.png";
    } else {
        image.src = "../img/ledred.png";
    }
}
        
        
        </script>
        
<!--       tualeti lamp-->
        <div id="lampadario">
            <input class="sw" type="radio" name="switchs" value="on" />
            <input  class="sw" type="radio" name="switchs" value="off" checked="checked"/>
            <label  class="el" for="switchs"></label>
            <div id="filo"></div>
        </div>
        <style>
       
           
            #lampadario {
                position: absolute;
                top: 350px;
                left: 250px;
                top: 0;
              
            }
            #filo {
                position: absolute;
              
                background-color: #000000;
                width: 2px;
                height: 150px;
                left: 50%;
                margin-left: -1px;
                z-index: 1;
                -webkit-transform-origin: 0% 0%;
                   -moz-transform-origin: 0% 0%;
                    -ms-transform-origin: 0% 0%;
                     -o-transform-origin: 0% 0%;
                        transform-origin: 0% 0%;
                -webkit-animation: oscillaFilo .9s ease-in-out 0s infinite alternate;
                   -moz-animation: oscillaFilo .9s ease-in-out 0s infinite alternate;
                    -ms-animation: oscillaFilo .9s ease-in-out 0s infinite alternate;
                     -o-animation: oscillaFilo .9s ease-in-out 0s infinite alternate;
                        animation: oscillaFilo .9s ease-in-out 0s infinite alternate;
            }
            #filo:after {
                content: " ";
                left: -5px;
                top: 100%;
                position: absolute;
                border-bottom: 15px solid #000000;
                border-left: 4px solid transparent;
                border-right: 4px solid transparent;
                height: 0;
                width: 4px;
            }
            #lampadina {
                position:absolute;
            }
            .sw[value="off"]:checked ~
            
            .sw[value="off"]:checked ~
            #filo:after {
                -webkit-box-shadow: -80px -10px 10px -2px rgba(0,0,0,0.1);
                   -moz-box-shadow: -80px -10px 10px -2px rgba(0,0,0,0.1);
                    -ms-box-shadow: -80px -10px 10px -2px rgba(0,0,0,0.1);
                     -o-box-shadow: -80px -10px 10px -2px rgba(0,0,0,0.1);
                        box-shadow: -80px -10px 10px -2px rgba(0,0,0,0.1);
            }
            
            .sw {
                position: absolute;
                width: 90px;
                height: 70px;
                top: 150px;
                margin-left:-45px;
                opacity: 0;
                z-index: 1;
                cursor: pointer;
            }
            
            .sw[value="on"] {
                top: 150px;
            }
            .sw[value="off"] {
                top: -100px;
            }
            .sw[value="on"]:checked {
                top: -100px;
            }
            .sw[value="on"]:checked + input[value="off"] {
                top: 150px;
            }
            
            .el {
                width: 51px;
                height: 51px;
                top: 164px;
                position: absolute;
                left: 0;
                margin-left: -24px;
                -webkit-border-radius: 100%;
                   -moz-border-radius: 100%;
                    -ms-border-radius: 100%;
                     -o-border-radius: 100%;
                        border-radius: 100%;
                -webkit-animation: oscillaLampadina .9s ease-in-out 0s infinite alternate;
                   -moz-animation: oscillaLampadina .9s ease-in-out 0s infinite alternate;
                    -ms-animation: oscillaLampadina .9s ease-in-out 0s infinite alternate;
                     -o-animation: oscillaLampadina .9s ease-in-out 0s infinite alternate;
                        animation: oscillaLampadina .9s ease-in-out 0s infinite alternate;
            }           
            .sw[value="off"]:checked ~
            .el {
                background: rgba(255,255,255,0.03);
                -webkit-box-shadow: inset 0px 1px 5px rgba(255,255,255,0.1), inset 0px 2px 20px rgba(255,255,255,0.07), -80px -15px 15px -5px rgba(0,0,0,0.1);
                   -moz-box-shadow: inset 0px 1px 5px rgba(255,255,255,0.1), inset 0px 2px 20px rgba(255,255,255,0.07), -80px -15px 15px -5px rgba(0,0,0,0.1);
                    -ms-box-shadow: inset 0px 1px 5px rgba(255,255,255,0.1), inset 0px 2px 20px rgba(255,255,255,0.07), -80px -15px 15px -5px rgba(0,0,0,0.1);
                     -o-box-shadow: inset 0px 1px 5px rgba(255,255,255,0.1), inset 0px 2px 20px rgba(255,255,255,0.07), -80px -15px 15px -5px rgba(0,0,0,0.1);
                        box-shadow: inset 0px 1px 5px rgba(255,255,255,0.1), inset 0px 2px 20px rgba(255,255,255,0.07), -80px -15px 15px -5px rgba(0,0,0,0.1);
            }
            .sw[value="on"]:checked ~
            .el {
                background: rgba(255,255,255,1);
                -webkit-box-shadow: 0px 0px 10px rgba(255,255,255,0.8), 0px 0px 30px rgba(255,255,255,0.8), 0px 0px 50px rgba(255,255,255,0.6), 0px 0px 70px rgba(255,255,255,0.6), -80px -15px 120px 0px rgba(255,255,255,0.4);
                   -moz-box-shadow: 0px 0px 10px rgba(255,255,255,0.8), 0px 0px 30px rgba(255,255,255,0.8), 0px 0px 50px rgba(255,255,255,0.6), 0px 0px 70px rgba(255,255,255,0.6), -80px -15px 120px 0px rgba(255,255,255,0.4);
                    -ms-box-shadow: 0px 0px 10px rgba(255,255,255,0.8), 0px 0px 30px rgba(255,255,255,0.8), 0px 0px 50px rgba(255,255,255,0.6), 0px 0px 70px rgba(255,255,255,0.6), -80px -15px 120px 0px rgba(255,255,255,0.4);
                     -o-box-shadow: 0px 0px 10px rgba(255,255,255,0.8), 0px 0px 30px rgba(255,255,255,0.8), 0px 0px 50px rgba(255,255,255,0.6), 0px 0px 70px rgba(255,255,255,0.6), -80px -15px 120px 0px rgba(255,255,255,0.4);
                        box-shadow: 0px 0px 10px rgba(255,255,255,0.8), 0px 0px 30px rgba(255,255,255,0.8), 0px 0px 50px rgba(255,255,255,0.6), 0px 0px 70px rgba(255,255,255,0.6), -80px -15px 120px 0px rgba(255,255,255,0.4);
            }

            .sw[value="off"]:checked ~
            #lampadina #sorpresa {
                opacity: 0;
            }
            .sw[value="on"]:checked ~
            #lampadina #sorpresa {
                opacity: 1;
            }
            #footer {
                position: fixed;
                width: 94%;
                text-align: center;
                bottom: 30%;
                padding: 0 3%;
                z-index:1;
            }
        
          
            @-o-keyframes oscillaLampadina {
                from {
                    -o-transform: rotate(3deg) translate(-16.4px,-1px);
                } to {
                    -o-transform: rotate(-3deg) translate(16.4px,-1px);
                }
            }
           
            @-ms-keyframes ombraTesto {
                from {
                    -ms-transform: translate(1px,0px) scale(1.01,1.06) skew(0.9deg, 0deg);
                } to {
                    -ms-transform: translate(-1px,0px) scale(1.01,1.06) skew(-0.9deg, 0deg);
                }
            }
            @-o-keyframes ombraTesto {
                from {
                    -o-transform: translate(1px,0px) scale(1.01,1.06) skew(0.9deg, 0deg);
                } to {
                    -o-transform: translate(-1px,0px) scale(1.01,1.06) skew(-0.9deg, 0deg);
                }
            }
            @keyframes ombraTesto {
                from {
                    transform: translate(1px,0px) scale(1.01,1.06) skew(0.9deg, 0deg);
                } to {
                    transform: translate(-1px,0px) scale(1.01,1.06) skew(-0.9deg, 0deg);
                }
            }
        </style>
        

	 </div>
      <!--        modal-->
      <div class="img"></div> 
  </div> 
         
<div class="modalbox" id="text"> 
  <div class="box">
    <a class="close" href="#">X</a>
    <p class="title" translate='change'></p>
    <div class="content">
      <div class="modal">
        <div class="modal-content">
           
           <div class="led-box">
               <a id="myImage4"  onclick="changeImage4()"> <samp style="color: green" translate='Green'></samp>   <div class="led-green"></div> </a>
    
               
  </div>  
            
	<div class="led-box" class="btn-default" type="button">   
 <a id="myImage4"  onclick="changeImage4()"> <samp style="color: yellow" translate='Yellow'></samp>  <div class="led-yellow" type="button"  > </div> </a>
      
<!--
    
        <button type="button" class="button" style="background-color: #D2691E">Yellow</button>
-->
  </div>
         
  
  <div class="led-box">
      <a id="myImage4"  onclick="changeImage4()">  <samp style="color: blue" translate='Blue'></samp> <div class="led-blue"></div> </a>
   
<!--      <button type="button" class="button"style="background-color: blue">Blue</button>-->
  </div>
               <div class="led-box">
                <a id="myImage4"  onclick="changeImage4()">  <samp style="color: maroon" translate='Maroon'></samp> <div class="led-green1"></div> </a>
    
<!--        <button type="button" class="button" style="background-color: maroon">Maroon</button>-->
  </div>
     
             <div class="led-box">
                <a id="myImage4"  onclick="changeImage4()"> <samp style="color: aqua" translate='Aqua'></samp> <div class="led-blue1"></div> </a> </div>
            
                  <div class="led-box">
  <a id="myImage4"  onclick="changeImage4()"> <samp style="color: red" translate='Red'></samp> <div class="led-red" ></div> </a>  
    
<!--        <button type="button" id="myImage4"  onclick="changeImage4()" class="button" style="background-color: red">Red</button>-->
  </div>
         
           <br>
          <div class="led-box">
              <a id="myImage4"  onclick="changeImage4()"> <samp style="color: blueviolet" translate='Violet'></samp> <div class="led-red1"></div> </a>
    
<!--        <button type="button" class="button" style="background-color: darkviolet">Violet</button>-->
  </div>
         
          <div class="led-box">
              <a id="myImage4"  onclick="changeImage4()"> <samp style="color: deeppink" translate='Pink'></samp> <div class="led-yellow1"></div> </a> </div>
    
<!--        <button type="button" class="button" style="background-color: deeppink">Pink</button>-->
              
           
  </div>    
    
          
<!--
   <div class="led-box">
      <button type="button" class="button" style="background-color: red" onclick="document.getElementById('bool1').src='../img/ledred.png'">Red</button>
          </div>
-->
       
</div>      
        <div class="container">
         
            </div>   
         </div>
      </div>
   </div>
               </div> </div>

     
       <style>
/* STYLE for input range */
input[type=range] {
  -webkit-appearance: none;
  appearance: none;
  width: 1200px;
  background: transparent;
}

input[type=range]:focus {
  outline: none;
}

input[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  height: 20px;
  width: 30px;
  border-radius: 100%;
  background-color: #fff;
  cursor: pointer;
  margin-top: -10px;
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.4);
  outline: none;
  border: none;
}

input[type=range]::-webkit-slider-runnable-track {
  width: 50px;
  height: 2px;
  cursor: pointer;
  background-color: #D2AEAE;
  border-radius: 50px;
}

/* STYLE for switch */
.switch {                 /*knopka*/
  display: none;
}
.switch + label,
.switch + label::after {
  display: inline-block;
  position: relative;
  width: 54px;
  height: 34px;
  box-sizing: border-box;
  background: #ffffff;
  border: 2px solid #dddddd;
  border-radius: 9999px;
  transition: all 300ms;
}
.switch + label::after {
  content: "";
  position: absolute;
  left: 0;
  background: #ffffff;
  width: 30px;
  height: 30px;
  border: none;
  box-shadow: 0 5px 5px -1px rgba(0, 0, 0, 0.2), 0 0 0 2px #dddddd;
}
.switch:checked + label {
  border: 2px solid #D2AEAE;
  box-shadow: inset 0 0 0 calc(19px) #D2AEAE;
}
.switch:checked + label::after {
  left: calc(20px);
  box-shadow: 0 5px 5px -1px rgba(0, 0, 0, 0.2), 0 0 0 2px #D2AEAE;
}
.switch:not(:checked) + label:hover:active {
  box-shadow: inset 0 0 0 calc(19px) #dddddd;
}
.switch + label:hover:active::after {
  width: calc(5px);
}
.switch:checked + label:hover:active::after {
  left: calc(15px);
}

.center {
    position: absolute;
     top: ;
      width: 100%;
     height: 100%;

}

.control { 
    position: ;
    top: 5px;
  display: flex;
  flex-flow: row nowrap;
  align-items:baseline;
  color: #D2AEAE;     /*texti color*/
  width: 540px;
  margin: 1rem auto;
}

.control.control--range > label {
  
  white-space: pre-wrap;
  min-width: 170px;          /*style for text*/
  font-size: 1rem;
}

.control.control--range > input[type="range"] {
  flex: 20;
}

.control.control--switch > label:first-child {
  flex: 1;
}

.target {
  width: 100%;
  height: 100%; 
}
    
.img__cover {
  width: 1300px;
  height: 600px;
  position: absolute;
  z-index: 20;
}

.img {
  background: transparent url(../img/nor.jpg) ;      /*   bigpic*/
  width: 960px;
  height: 956px;
  transition: background .5s ease-in-out;              /*effektn sirun poxi*/
  -moz-transition: background .5s ease-in-out;
}

.img.img--on {
  background-image: url(../img/onlight3d.png);                       /*sexmes nkarn poxi */
}
    </style>
           
         <script>
           
  (function(win, doc) {
  const $ = s => doc.querySelector(s)
  const addEvent = (n, e, h) => {
    n.addEventListener(e, h, false)
  }

  const changeFilters = () => {
    target.style['webkit' + 'Filter'] = 'brightness(' + filtersMap['brightness'] + ')'
  }

  const setFilters = (key, value) => {
    if (!filtersMap) {return}
    filtersMap[key] = value
    changeFilters()
  }

  let filtersMap = {
    hue: '0deg',
    brightness: 1
  }
  let tempCover = document.querySelector('.img__cover')

  let s = $('[name="light-switch"]')
  let b = $('[name="brightness"]')
  let t = $('[name="temp"]')

  let target = $('.img')

  // turn light on and off
  addEvent(s, "change", (e) => {
    target.classList.toggle('img--on')
  })

  // 
  addEvent(t, 'input', (e) => {
    let $val = parseInt(e.target.value)
    if ($val > 0) {
      tempCover.style.background = 'rgba(255,255,0,' + Math.abs($val) / 400 + ')'
    } else {
      tempCover.style.background = 'rgba(0, 0, 255,' + Math.abs($val) / 400 + ')'
    }
  })

  addEvent(b, 'input', (e) => {
    let $val = parseInt(e.target.value)
    let $brightness = $val / 100
    setFilters('brightness', $brightness)
  })

})(window, document)
          
           </script> 
</body>
          
</html>
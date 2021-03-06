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
<html lang="en">
<head>
  <title>HomeSweetHome</title>
           <link rel="icon" type="image/png" href="../img/icon.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/mainhome.css" type="text/css"> 
    
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
        <html ng-app="myApp">
   
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       
      <a translate="home" class="navbar-brand" href="#myPage"> Home </a>
    </div>
         <div ng-controller="Ctrl">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a translate="our" href="#our">OUR</a></li>
          <li><a translate="about" href="#about">ABOUT</a></li>  
        <li><a translate="services" href="#services">SERVICES</a></li> 
        <li><a translate="inter" href="#portfolio">PORTFOLIO</a></li>
          <li><a translate="contact" href="#contact">CONTACT US</a></li>
         <div class="ok">  
        <input type="image" src="../img/arm.png" alt="Submit" width="38" height="38" ng-click="changeLanguage('de')" translate="">
        <input type="image" src="../img/eng.png" alt="Submit" width="38" height="38" ng-click="changeLanguage('en')" translate="">
             <a href="?quit=true">   <input type="image" src="../img/logout.png" alt="Submit" width="48" height="38" > </a>
        </div>
      </ul>
    </div>
  </div>
      </nav> 

<div class="jumbotron text-center">
     <img src="../img/log.png" class="img" alt=""align="left" height="190" width="170"> 
    <style>
        .img{
            position: absolute;
            top: 60px;
            left: 180px;
        }
    </style>
  <h1 translate="sweet" >Home Sweet Home</h1> 
  <p translate="welcome">Welcome our Smart Home</p> 
    <br>
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50"  placeholder=" Smart Home" required>
      <div class="input-group-btn">
          <button type="button" class="btn btn-danger" size="10px" translate="search" >Search</button>
      </div>
    </div>
  </form>
</div>

    <div class="container-fluid bg-grey">
   
        <div id="our" class="container-fluid">
        <img src="../img/light.png" alt="" height="280" width="280">  
        <img src="../img/camera.png" alt="" height="280" width="280">
        <img src="../img/temper.jpg" alt="" height="280" width="280">
        <img src="../img/oven.jpg" alt="" height="280" width="280">
  <div class="w-bar">
  <a href="../php/lighting.php" > <button translate="lighting" class="w3-bar-item w3-button w3-grey"  style="width:280px"> </button> </a>
      <a href="../php/security.php"> <button translate="security" class="w3-bar-item w3-button w3-yellow" style="width:280px"></button> </a>
      <a href="../php/temperature.php"> <button translate="temper" class="w3-bar-item w3-button w3-grey" style="width:280px"></button> </a>
      <a href="../php/leaks.php">   <button translate="leaks" class="w3-bar-item w3-button w3-yellow" style="width:280px"></button></a>
      
</div>
        
    </div>
  </div>
<!--  (About) -->
    
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
   
      <h2 translate="aboutsmarthome"></h2><br>
      <h4 translate="p">Residential automation is all about adding comfort, convenience, security, and energy savings to your lifestyle.  It is the remote 
          and automatic control of your home's systems such as lighting, appliances, heating and air conditioning, entertainment components, security system, communications, irrigation system, pool and spa, and all of the other systems in your home.  These systems become easier to use, and any level of automation can be installed</h4><br>
      <p>Automation is about making your home work for you, saving you time, and simplifying your life.  It can be as simple as automatic control of outside security lights that come on at dusk and shut off at dawn.  Or your home's exterior and interior lights, and your stereo, can all come on for you when you signal your garage door to open, so you don't ever have to enter a dark house again.  Or it can be as sophisticated as having all of the systems in your entire home automatically controlled according to time of day, day of week, or personal presence in a room, and with voice control, too.  Remote and automatic lighting control, heating and air conditioning control, and drapery control are very popular tools for realizing significant energy savings as well as convenience.  And of course security is also an important part of automating your home.</p>
  
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-home logo"></span>
    </div>
  </div>
</div>

    

    
    
    
    
    
    
<!-- Services Section -->
<div id="services" class="container-fluid text-center">
  <h2 translate='services' ></h2>
  <h4 translate='offer'></h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4 translate='observe'></h4>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-phone logo-small"></span>
      <h4 translate='control'></h4>
     
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-cog logo-small"></span>
      <h4 translate='automate'></h4>
     
    </div>
  </div>
  
    </div>


<!-- (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2 translate='inter'></h2><br>
  <h4 translate='interior'></h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../img/3d2.png" alt="" width="500" height="500">
        <p><strong translate='smart'></strong></p>
        <p></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../img/3d1.png" alt="" width="400" height="300">
        <p><strong translate='smart'></strong></p>
        <p></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../img/3d3.png" alt="" width="400" height="500">
        <p><strong translate='smart'></strong></p>
        <p></p>
      </div>
    </div>
  </div><br>
  
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4><span>Lighting</span><br>"Lighting is one of the most important elements of your home`s design. It serves many functions, such as providing safety, assisting in performing household tasks, creating an atmosphere for entertaining, and pulling together the overall design a homeowner is trying to achieve. Above all else, lighting is beautiful, and great lighting will bring your house to life."</h4>
      </div>
      <div class="item">
        <h4>"Security!"<br><span>Home security is both the security hardware in place on a property as well as personal security practices. Security hardware includes doors, locks, alarm systems, lighting, motion detectors, security camera systems, etc. that are installed on a property; personal security involves practices such as ensuring doors are locked, alarms activated, windows closed, extra keys not hidden outside, etc.</span></h4>
      </div>
      <div class="item">
        <h4>"Temperature"<br><span> temperature is the range of air temperatures that people prefer for indoor settings, which feel comfortable when wearing typical indoor clothing. As a medical definition, the range generally considered to be suitable for human occupancy is between 15 degrees Celsius (59 degrees Fahrenheit) and 25 °C (77 °F),[1] though human comfort can extend somewhat beyond this range depending on factors such as humidity and air circulation. In certain fields, like science and engineering, and within a particular context, "room temperature" can have varying agreed upon values for temperature.</span></h4>
      </div>
        <div class="item">
        <h4>"Leaks"<br><span> </span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div> 
    <div id="contact" class="container-fluid text-center bg-grey">
 

<h2 translate='contact' >Contact Us</h2>
    
<!-- Add font awesome icons -->
<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
<a href="#" class="fa fa-snapchat-ghost"></a>
<a href="#" class="fa fa-android"></a>

      </div>

    

<script>
$(document).ready(function(){
  // avelacnenq bolor  links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
   
    if (this.hash !== "") {
     
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})


/*translate flag*/
var translationsEN = {
  smart: 'SMART HOME',
  home: 'HOME',
  our: 'OUR',
  about: 'ABOUT',
  services: 'SERVICES',
  inter: 'INTERIOR',
  contact: 'CONTACT US',
  welcome: 'Welcome our Smart Home',
  sweet: 'Home Sweet Home',
  search: 'Search',
  lighting:'Lighting',
  security: 'Security',
  temper: 'Temperature',
  leaks: 'Leaks',
  aboutsmarthome: 'About Smart Home',
  p: '',
  offer: 'What We Offer',  
  interior: 'Three-dimensional Images of Our Home Interior', 
  observe: 'Observe',
  control: 'Control',
  automate: 'Automate',
    
  BUTTON_LANG_DE: 'Armenian',
  BUTTON_LANG_EN: 'English'
};
 
var translationsDE= {
  smart: 'ԽԵԼԱՑԻ ՏՈՒՆ',
  home: 'ՏՈՒՆ',
  our: 'ՄԵՆՔ ',
  about: 'ՄԵՐ ՄԱՍԻՆ',
  services: 'ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ',
  inter: 'ԻՆՏԵՐԻԵՐ',
  contact: 'ԿԱՊ ՄԵԶ ՀԵՏ',
  welcome: 'Բարի գալուստ մեր խելացի տուն',
  sweet: 'Տուն սիրելի տուն',
  search: 'Փնտրում',
  lighting:'Լուսավորություն',
  security: 'Անվտանգություն',
  temper: 'Ջերմաստիճան',
  leaks: 'Արտահոսքեր',
  aboutsmarthome: 'Խելացի Տան Մասին',  
  p: '', 
  offer: 'ԻՆչ ենք աոաջարկում',
  interior: 'Մեր տան ներքին տեսքի եռաչափ պատկերները',
  observe: 'Դիտել',
  control: 'Վերահսկողություն',
  automate: 'Ավտոմատացում',
    
    
  BUTTON_LANG_DE: 'Armenian',
  BUTTON_LANG_EN: 'Englisch'
};
 
var app = angular.module('myApp', ['pascalprecht.translate']);
 
app.config(['$translateProvider', function ($translateProvider) {
  // add translation tables
  $translateProvider.translations('en', translationsEN);
  $translateProvider.translations('de', translationsDE);
  $translateProvider.preferredLanguage('en');
  $translateProvider.fallbackLanguage('en');
}]);
 
app.controller('Ctrl', ['$translate', '$scope', function ($translate, $scope) {
 
  $scope.changeLanguage = function (langKey) {
    $translate.use(langKey);
  };
}]);

</script>
</body>
</html>

function Input(){
login_ok = false;
user_name = "";
password = "";
user_name = prompt("LOGIN","");
user_name = user_name.toLowerCase();
password = prompt("PASSWORD","");
password = password.toLowerCase();
if (user_name=="login" && password=="pass") {
 login_ok=true;
 window.location="index.php";
}
if (user_name=="login2" && password=="pass2") {
 login_ok=true;
 window.location="forum/index.php";
}

if (login_ok==false) alert("SXALA AXPERS :D!");
}

/*flag/translate*/
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


</script>
       <script>
var translationsEN = {
  HEADLINE: 'What an awesome module!',
  PARAGRAPH: 'Srsly!',
  PASSED_AS_TEXT: 'Hey there! I\'m passed as text value!',
  PASSED_AS_ATTRIBUTE: 'I\'m passed as attribute value, cool ha?',
  PASSED_AS_INTERPOLATION: 'OUR',
  VARIABLE_REPLACEMENT: 'Hi {{name}}',
  MISSING_TRANSLATION: 'Oops! I have not been translated into German...',
  BUTTON_LANG_DE: 'German',
  BUTTON_LANG_EN: 'English'
};
 
var translationsDE= {
  HEADLINE: 'ինչի համար է այս ամենն!',
  PARAGRAPH: 'Ernsthaft!',
  PASSED_AS_TEXT: 'Hey! Ich wurde als text übergeben!',
  PASSED_AS_ATTRIBUTE: 'Ich wurde als Attribut übergeben, cool oder?',
  PASSED_AS_INTERPOLATION: 'ՄԵՆՔ ',
  VARIABLE_REPLACEMENT: 'Hi {{name}}',
  // MISSING_TRANSLATION is ... missing :)
  BUTTON_LANG_DE: 'Deutsch',
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
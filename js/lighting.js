   /*lampchkaneri nkarner  */
function changeImage1() {
    var image = document.getElementById('myImage1');
    if (image.src.match("bulbon")) {
        image.src = "../img/pic_bulboff.gif";
    } else {
        image.src = "../img/pic_bulbon.gif";
    }
}
        function changeImage2() {
        var image = document.getElementById('myImage2');
        if (image.src.match("bulbon")) {
            image.src = "../img/pic_bulboff.gif";
        } else {
            image.src = "../img/pic_bulbon.gif";
        }
    }
         function changeImage3() {
    var image = document.getElementById('myImage3');
    if (image.src.match("bulbon")) {
        image.src = "../img/pic_bulboff.gif";
    } else {
        image.src = "../img/pic_bulbon.gif";
    }
         }


    /*translate flag*/
var translationsEN = {
  smart: 'SMART HOME',
  home: 'HOME',
  brig: 'Brightness',
  lighting:'Lighting',
  security: 'Security',
  temper: 'Temperature',
  leaks: 'Leaks',
  aboutsmarthome: 'About Smart Home',
  open: 'Open',
  change: 'CHANGE COLORS',
  Green: 'Green',
  Yellow: 'Yellow',
  Maroon: 'Maroon',
  Blue: 'Blue',
  Red: 'Red',
  Violet: 'Violet',
  Pink: 'Pink',
  Aqua: 'Aqua',
    
  BUTTON_LANG_DE: 'Armenian',
  BUTTON_LANG_EN: 'English'
};
 
var translationsDE= {
  smart: 'ԽԵԼԱՑԻ ՏՈՒՆ',
  home: 'ՏՈՒՆ',
  brig: 'Պայծառություն',
  lighting:'Լուսավորություն',
  security: 'Անվտանգություն',
  temper: 'Ջերմաստիճան',
  leaks: 'Արտահոսքեր',
  aboutsmarthome: 'Խելացի Տան Մասին',  
  open: 'Բացել',
  change: 'Փոխել գույները',
  Green: 'Կանաչ',
  Yellow: 'Դեղին',
  Maroon: 'Մուգ կարմիր',
  Blue: 'Կապույտ',
  Red: 'Կարմիր',
  Violet: 'Ֆուքսիա',
  Pink: 'Վարդագույն',
  Aqua: 'Երկնագույն',
    
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


/*shertavaraguyri js*/

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

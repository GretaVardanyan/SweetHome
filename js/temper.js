/*buxari u candicaner*/
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
/*temper*/

var channel1 = "app_to_arduino";
var channel2 = "arduino_to_app";
var pubnub = PUBNUB.init({
  publish_key: 'pub-c-0e5deae6-83e1-47d0-90ac-bd3372a6d47e',
  subscribe_key: 'sub-c-9de6f118-c1db-11e6-b07a-0619f8945a4f'
});
console.log("subscribe");
pubnub.subscribe({
  channel: channel2,
  message: (m) => {
    updateData(m)
  },
  error: function(error) {
    // Handle error here
    console.log(JSON.stringify(error));
  }
});
//setTimeout(()=>{updateRequest();},1000);
//updateRequest
setInterval(()=>{updateRequest();},10000);





function startRequest(){
  console.log("startRequest");

            pubnub.publish({
                channel: channel1,
                message: {
                    name: "start",
                    value: ""
                }
            });
};

var updateRequest = function() {
  console.log("updateRequest");
            pubnub.publish({
                channel: channel1,
                message: {
                    name: "update",
                    value: ""
                }
            });
        
        };


var updateData = function(data) {
  console.log(data);
  if (data.name == 'heaterState') {
    console.log("heaterState");
    if (data.value == '1') {
      $('#heaterPhoto').css('background-image', 'url("https://maxcdn.icons8.com/Color/PNG/24/Astrology/fire_element-24.png")');
    } else {
      $('#heaterPhoto').css('background-image', 'url("https://maxcdn.icons8.com/Color/PNG/24/Holidays/snowman-24.png")');
    }
  } else if(data.name == "targetTempSlider"){
    $('#' + data.name).val(parseInt(data.value));
  }
  else if(data.name == "minTempSlider"){
    $('#' + data.name).val(parseInt(data.value));
  }
    else if(data.name == "thermostatOnOff"){
      if(data.name == 1){
         $('#' + data.name).val('on');
      }
      else{
          $('#' + data.name).val('off');       
      }
  }
  else{
    $('#' + data.name).text(data.value);
  }
};

 $(function() {
  
$('#refresh').click(updateRequest);
   
$('#targetTempSlider').on("slidestop", function() {
  var value = $(this).val();
  var module = $(this).parent().parent().parent().attr('id');
  console.log("test" + module + " " + value);

  pubnub.publish({
    channel: channel1,
    message: {
      name: module,
      value: value
    }
  });
});
   
 $('#minTempSlider').on("slidestop", function() {
  var value = $(this).val();
  var module = $(this).parent().parent().parent().attr('id');
  console.log("test" + module + " " + value);

  pubnub.publish({
    channel: channel1,
    message: {
      name: module,
      value: value
    }
  });
});

   
$('#thermostatOnOff').change(function() {
  var value = $(this).val();
  var module = $(this).parent().parent().parent().attr('id');
  console.log("test" + module + " " + value);

  pubnub.publish({
    channel: channel1,
    message: {
      name: module,
      value: value
    }
  });
});
  });
/*
jermachapi style*/

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

               





















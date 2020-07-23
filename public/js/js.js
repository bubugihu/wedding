// function play() {
//   //   var audio = document.getElementById("audio");
//   //   audio.play();
//   //   document.getElementById("front").style.display = "none";
//   // }
//   /////
$(document).ready(function(){
    $('#rand_pos').hover(function() {
var bodyWidth = document.body.clientWidth;
var bodyHeight = document.body.clientHeight;
var randPosX = Math.floor((Math.random()*bodyWidth));
var randPosY = Math.floor((Math.random()*bodyHeight));
var posLog = document.getElementById('pos_log');
var posXY = 'x: ' + randPosX + '<br />' + 'y: ' + randPosY;

$('#rand_pos').css('left', randPosX);
$('#rand_pos').css('top', randPosY);

posLog.innerHTML = posXY
    });
});

/////
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();
    
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // function play() {
    //     var audio = document.getElementById("audio");
    //     // audio.play();
    //     document.getElementById("front").style.display = "none";
    //   }
      /////
//////////////////////////
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
</script>

<link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body >
    <div class="container">
       @yield('content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

@extends('layouts.layout')
@section('title','Wedding')
@section('content')

    <div id="after">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12" >
                <img class="img-fluid image-after" src="{{asset('img/after.jpg')}}"alt="">
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-xs-12 align-content-center px-5 ml-5" style="margin-top: 100px;" >
                <p id="timer"></p>
            </div>
        </div> --}}
    </div>  
    <footer>
        <div class="fixed-bottom">
            <p id="timer"></p>
        </div>
    </footer>
    <script>
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
        </script>
@endsection
@extends('layouts.layout')
@section('title','Wedding')
@section('content')

<section id="front">
    <div class="row front-img">
        <audio style='display: none;' id='audio' controls src='./music/music1.mp3'></audio>
        <div class="col-md-4 flower" style="bottom: 20px">
            <img  class="img-fluid" src="{{asset('images/flow1.jpg')}}" alt="" style="margin-bottom: 10px">
        </div>
        
        <div class="col-md-4  col-sm-12">
            <img  class="img-fluid image-front" width="95%" src="{{asset('images/front.jpg')}}" alt="">
            <a href="{{url('page3')}}" id="click" width="auto" class="btn"  onclick="play();">Click here</a>
        </div>
        <div class="col-md-4 flower" style="bottom: 20px">
            <img  class="img-fluid" src="{{asset('images/flow2.jpg')}}" alt="" style="margin-bottom: 10px">
        </div>
    </div>
</section>
  
<script>
    function play() {
        var audio = document.getElementById("audio");
        audio.play();
        // document.getElementById("front").style.display = "none";
      }
</script>
@endsection

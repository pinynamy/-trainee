<!-- home_.blade.php -->
@extends('users.navbar_')
@section('title','Trainee')
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/badblakesmith/pen/Mwazbg?depth=everything&order=popularity&page=54&q=pack&show_forks=false" />

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.3/css/swiper.min.css'><link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>

<style class="cp-pen-styles">html,
body {
  height: 100%;
}

.swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      height: 100%;
      width: 100%;
      color: #fff;
        position: relative;
    overflow: hidden;
    text-align: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    -webkit-flex-direction: column;
    flex-direction: column;
    }

.bg-image {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    -webkit-background-size: cover;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    z-index: -1;
 -webkit-animation-name: kenburns;
          animation-name: kenburns;
  -webkit-animation-timing-function: linear;
          animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-duration: 17.5s;
          animation-duration: 17.5s;
  opacity: 1;
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
   animation-name: ken-burns;
}


.swiper-slide-active .bg-image {

      
    }
      



@keyframes ken-burns {
  0% {
   
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
 
  100% {
  -webkit-transform: scale(1);
            transform: scale(1);
  }
}</style></head>
@section('content')
<div class="swiper-container">
    <div class="swiper-wrapper">
      
      <div class="swiper-slide"><div class="bg-image overlay-dark preload animated infinite fadeIn" style="background-image: url(image/sea1.jpg);"></div></div>
        <div class="swiper-slide"><div class="bg-image overlay-dark preload" style="background-image: url(image/sea2.jpg);"></div></div>
          <div class="swiper-slide"><div class="bg-image overlay-dark preload" style="background-image: url(image/sea3.jpg);"></div></div>
      
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>

  </div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.3/js/swiper.min.js'></script>
<script > var swiper = new Swiper('.swiper-container', {
      spaceBetween: 0,
      slidesPerView: 2,
      loop: true,
      speed: 2500,
      autoplay: {
      delay: 3000,
    },
     effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      
      },
    
    });
//# sourceURL=pen.js
</script>
<center>
	<header>
  <h1>Hot Regions in Thailand</h1>
</header>
@include('users.picture_1')
<header>
  <h1>Condos & Villas</h1>
</header>
</center>

@include('users.picture_2')


@include('users.footer')
@endsection
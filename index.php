<html>
<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
     <link rel="stylesheet" href="css/style.css" type="text/css">    

<style>
.shake{0%,to{-webkit-transform:translateZ(0);transform:translateZ(0)}10%,30%,50%,70%,90%{-webkit-transform:translate3d(-10px,0,0);transform:translate3d(-10px,0,0)}20%,40%,60%,80%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}}@keyframes shake{0%,to{-webkit-transform:translateZ(0);transform:translateZ(0)}10%,30%,50%,70%,90%{-webkit-transform:translate3d(-10px,0,0);transform:translate3d(-10px,0,0)}20%,40%,60%,80%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}}.shake{-webkit-animation-name:shake;animation-name:shake}
.swing{20%{-webkit-transform:rotate(15deg);transform:rotate(15deg)}40%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}60%{-webkit-transform:rotate(5deg);transform:rotate(5deg)}80%{-webkit-transform:rotate(-5deg);transform:rotate(-5deg)}to{-webkit-transform:rotate(0deg);transform:rotate(0deg)}}@keyframes swing{20%{-webkit-transform:rotate(15deg);transform:rotate(15deg)}40%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}60%{-webkit-transform:rotate(5deg);transform:rotate(5deg)}80%{-webkit-transform:rotate(-5deg);transform:rotate(-5deg)}to{-webkit-transform:rotate(0deg);transform:rotate(0deg)}}.swing{-webkit-transform-origin:top center;transform-origin:top center;-webkit-animation-name:swing;animation-name:swing}
.enter-name input[type=name] {
	background-color:#a460f4;
	color: #fff;
   	border-radius: 10px;
    	box-sizing: border-box;
    	border: none;
    	padding: 5px;
    	position: fixed;
    	left: 10px;
    	bottom: 30px;
    	height: 50px;
    	width: 70%;
    	text-align: center;
    	font-size: 22px;
    	display: inline-block;
}

.enter-name .btnn {
	border-radius: 10px;
    	font-size: 21px;
    	padding: 4px;
    	position: fixed;
    	right: 2px;
    	bottom: 30px;
    	height: 50px;
    	width: 23%;
    	display: inline-block;
    	color: #fff;
    	background-color:a460f4;
    	border: none;
    	letter-spacing: .5px;
    	transition: .2s ease-out;
    	cursor: pointer;
    	line-height: 36px;
    	outline: 0;
    	text-transform: uppercase;
    	vertical-align: middle;
    	text-decoration: none;
    	animation-duration: 4s !important;
}

.enter-name input[type=name]::-webkit-input-placeholder { 
	color: #fff;
  	font-size: 18px;	
}

.enter-name input[type=name]::-moz-placeholder { 
	color: #fff;
  	font-size: 18px;
}

.enter-name input[type=name]:focus::-webkit-input-placeholder {
    color: #fff;
}

.enter-name input[type=name]:focus::-moz-placeholder { 
	color: #fff;
  	font-size: 18px;
}

.img-holder img {
    	width: 75%;
}

.wapp-msg a {
	background-color: #398a27;
    	text-decoration: none;
    	color: #fff;
	border-radius: 10px;
    	box-sizing: border-box;
    	border: none;
    	padding: 15px 0;
	position: fixed;
    	left: 10px;
    	bottom: 30px;
    	width: 97%;
    	text-align: center;
    	font-size: 22px;
    	display: inline-block;
    	text-shadow: 1px 1px 0 #444;
}

	
@media only screen and (max-width: 500px) {
    	.wrapper{
		width:96vw;
	}
}
      @import url(//fonts.googleapis.com/css?family=Concert+One);

h1 {
  animation:glow 10s ease-in-out infinite;
  
  

/* For less laggy effect, uncomment this:
  
  animation:none;
  -webkit-text-stroke:1px #fff; 
  
=========== */
  
}



* { box-sizing:border-box; }

body{
    width: 100%;
    height: 100%;
    padding-right: 1px; /


}


figure {
  animation:wobble 5s ease-in-out infinite;
  transform-origin:center center;
  transform-style:preserve-3d;
        font-size: 4px;
            margin: -5em 0;
        margin-bottom: 59px;
}

@keyframes wobble {
  0%,100%{ transform:rotate3d(1,1,0,40deg); }
  25%{ transform:rotate3d(-1,1,0,40deg); }
  50%{ transform:rotate3d(-1,-1,0,40deg); }
  75%{ transform:rotate3d(1,-1,0,40deg); }
}

h1 {
  display:block;
  width:100%;
  line-height:1.5;
  font:900 10em 'Concert One', sans-serif;
  position:absolute;
  color:#fff;
}

@keyframes glow {
  0%,100%{ text-shadow:0 0 30px red; }
  25%{ text-shadow:0 0 30px orange; }
  50%{ text-shadow:0 0 30px forestgreen; }
  75%{ text-shadow:0 0 30px cyan; }
}

h1:nth-child(2){ transform:translateZ(5px); }
h1:nth-child(3){ transform:translateZ(10px);}
h1:nth-child(4){ transform:translateZ(15px); }
h1:nth-child(5){ transform:translateZ(20px); }
h1:nth-child(6){ transform:translateZ(25px); }
h1:nth-child(7){ transform:translateZ(30px); }
h1:nth-child(8){ transform:translateZ(35px); }
h1:nth-child(9){ transform:translateZ(40px); }
h1:nth-child(10){ transform:translateZ(45px); }
.card-content.white-text {
background: #FC466B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3F5EFB, #667db6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3F5EFB, #667db6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background-image: url("ch.jpg")!important;
//background-position: center;
}
          p.card-title.center-align.comic.wishesed {
  //  font-family: serif;
//    font-size: 37px !important;
}
                     @media screen and (min-width: 482px){
.mymsgr {
    display: none;
}
    }
@media screen and (max-width: 480px){
.float-share a {
    width: 32% !important;
}
    }
@media screen and (max-width: 366px){
img#whatsappicon {
    margin-left: -20px !important;
}
    }
@media screen and (max-width: 334px){
img#whatsappicon {
    margin-left: -21px !important;
}
    .myshareicc{
        font-size: 15px !important;
    }
    }
           .tada {
  -webkit-animation-name: tada;
  animation-name: tada;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes tada {
  0% {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  10%, 20% {
  -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  }
  30%, 50%, 70%, 90% {
  -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }
  40%, 60%, 80% {
  -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }
  100% {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  }
  @keyframes tada {
  0% {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  10%, 20% {
  -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  }
  30%, 50%, 70%, 90% {
  -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }
  40%, 60%, 80% {
  -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }
  100% {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  }   
      </style>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 25, 2017 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demoo").innerHTML = days + "Days " + hours + "hr "
    + minutes + "min " + seconds + "sec ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demoo").innerHTML = "";
    }
}, 1000);
</script>
<center>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8536273912281952",
    enable_page_level_ads: true
  });
</script>
</center>
  </head>
  <body >
    <main>


              <div class="col s12 l6 offset-l3">
                <div class="card blue-grey darken-1 hoverable">
                  <div class="card-content white-text">
                 
              
<?php
if (!isset($_POST['submit']))
 {
if(isset($_GET['n']))
{
    $name = $_GET['n'];
        echo 
       "<figure>" .
	"<h1>$name</h1>" .
	"<h1>$name</h1>" .
	"<h1>$name</h1>" .
	"<h1>$name</h1>" .
        "</figure>"; 
}
else
{
 echo  "<figure>" .
	"<h1>[your name]</h1>" .
	"<h1>[your name]</h1>" .
	"<h1>[your name]</h1>" .
	"<h1>[your name]</h1>" .
        "</figure>"; 
}
}
?>
                                                                              
                  
                           
                    <p class="center">
                     <div class="">
</br>
</br>
      <p class="center animated pulse" style="font-size:70px ;margin-top: 200px;">wishes you and your family</p>                                                   
<img src="img/greeting.png" alt="christmas greeting" style="height:100%; width:100%;"><br>

<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet"> <p id="customsg" style="font-size: 16px; font-family: unset; margin-top: -10px;"> 
                    Wishing you peace,joy and all the best the holiday has to offer.May this season of giving and spending time with your family bring you joy that lasts throughout the year</br>Merry Christmas !!
                    </p></p>
                    <p class="name bdaywish right">- [Your Name]</p>
                    </br>
<center>
</center>
                  </div>
                </div>
              </div>
           </div>
          </div>
        </div>
      </div>
      </div>
    </main>
<form method="post" action="ready.php">
	<div class="enter-name">
		<input class="animated pulse infinite" type="name" required="" maxlength="50" name="n" placeholder="👉 Enter Your Name Here">
		<button class="btnn animated shake infinite" type="submit"><span>👉</span> Go</button>
	</div>
</form>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111544595-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111544595-1');
</script>


   <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3976171,4,511,95,18,00000000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3976171&101" alt="counter statistics" border="0"></a></noscript>
<!-- Histats.com  END  -->

<section class="snow">
    </section>
                         <p id="demoo" class="center animated pulse" style="font-size:70px; margin-top: 800px; margin-bottom: 100px; font-weight: bold;"></p>

</body>

</html>


<!DOCTYPE html>
<html>
<head>
<style>
    @import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

footer {
  width:100vw;
  position:fixed;
  bottom:0px
}
footer div {
  background-color:#4478e3;
  margin: -5px 0px 0px 0px;
  padding:0px;
  color: #fff;
  text-align:center;
}
svg {
  width:100%;
}
.arrow {
  stroke-width: .3px;
  stroke:yellow;
}
.topball {
  animation: ball 1.5s ease-in-out;
  animation-iteration-count:infinite;
  animation-direction: alternate;
  animation-delay: 0.3s;
  cursor:pointer;
}

.wave {
  animation: wave 3s linear;
  animation-iteration-count:infinite;
  fill: #4478e3;
}
.drop {
  fill: transparent;
  animation: drop 5s ease infinite normal;
  stroke: #4478e3;
  stroke-width:0.5;
  opacity:.6; 
  transform: translateY(80%);
}
.drop1 {
  transform-origin: 20px 3px;
}
.drop2 {
  animation-delay: 3s;
  animation-duration:3s;
  transform-origin: 25px 3px;
}
.drop3 {
  animation-delay: -2s;
  animation-duration:3.4s;
  transform-origin: 16px 3px;
}
.gooeff {
  	filter: url(#goo);
}
#wave2 {
  animation-duration:5s;
  animation-direction: reverse;
  opacity: .6
}
#wave3 {
  animation-duration: 7s;
  opacity:.3;
}
@keyframes drop {
  0% {
    transform: translateY(80%); 
    opacity:.6; 
  }
  80% {
    transform: translateY(80%); 
    opacity:.6; 
  }
  90% { 
    transform: translateY(10%) ; 
    opacity:.6; 
  }
  100% { 
    transform: translateY(0%) scale(1.5);  
    stroke-width:0.2;
    opacity:0; 
  }
}
@keyframes wave {
  to {transform: translateX(-100%);}
}
@keyframes ball {
  to {transform: translateY(20%);}
}
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	min-height: 100vh;
	background: rgb(128, 174, 233);
	background: radial-gradient(
		circle,
		rgb(235, 232, 228) 0%,
		rgb(111, 108, 107) 100%,
		rgb(206, 182, 182) 100%
	);
	display: flex;
	justify-content: center;
	align-items: center;
}
.content {
	position: relative;
}

.content h2 {
	color: #fff;
	font-size: 8em;
	position: absolute;
	transform: translate(-50%, -50%);
}

.content h2:nth-child(1) {
	color: transparent;
	-webkit-text-stroke: 2px #03a9f4;
}

.content h2:nth-child(2) {
	color: #03a9f4;
	animation: animate 4s ease-in-out infinite;
}

@keyframes animate {
	0%,
	100% {
		clip-path: polygon(
			0% 45%,
			16% 44%,
			33% 50%,
			54% 60%,
			70% 61%,
			84% 59%,
			100% 52%,
			100% 100%,
			0% 100%
		);
	}

	50% {
		clip-path: polygon(
			0% 60%,
			15% 65%,
			34% 66%,
			51% 62%,
			67% 50%,
			84% 45%,
			100% 46%,
			100% 100%,
			0% 100%
		);
	}
}

.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button {
  min-width: 300px;
  min-height: 60px;
  font-family: 'Nunito', sans-serif;
  font-size: 22px;
  text-transform: uppercase;
  letter-spacing: 1.3px;
  font-weight: 700;
  color: #313133;
  background: #e73109;
background: linear-gradient(90deg, rgb(225, 80, 23) 0%, rgb(243, 226, 37) 100%);
  border: none;
  border-radius: 1000px;
  box-shadow: 12px 12px 24px rgba(209, 103, 79, 0.64);
  transition: all 0.3s ease-in-out 0s;
  cursor: pointer;
  outline: none;
  position: relative;
  padding: 10px;
  }

button::before {
content: '';
  border-radius: 1000px;
  min-width: calc(400px + 12px);
  min-height: calc(78px + 12px);
  border: 6px solid #d92f2f;
  box-shadow: 0 0 60px rgba(232, 20, 20, 0.64);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}

.button:hover, .button:focus {
  color: #313133;
  transform: translateY(-6px);
}

button:hover::before, button:focus::before {
  opacity: 1;
}

button::after {
  content: '';
  width: 30px; height: 30px;
  border-radius: 100%;
  border: 6px solid #df0e0e;
  position: absolute;
  z-index: -1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation: ring 1.5s infinite;
}

button:hover::after, button:focus::after {
  animation: none;
  display: none;
}

@keyframes ring {
  0% {
    width: 30px;
    height: 30px;
    opacity: 1;
  }
  100% {
    width: 300px;
    height: 300px;
    opacity: 0;
  }
}
</style>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
</head>


<body>
<section style="margin-top:-500px; margin-left: 260px;">
	<div class="content">
		<h2>FileZipper</h2>
		<h2>FileZipper</h2>
	</div>
</section>

<div class="wrap" style="margin-left: -200px;">
    <button class="button">Continue to Application</button>
</div>

<footer>
<svg viewBox="0 0 120 28">
 <defs> 
   <mask id="xxx">
     <circle cx="7" cy="12" r="40" fill="#fff" />
   </mask>
   
   <filter id="goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="
           1 0 0 0 0  
           0 1 0 0 0  
           0 0 1 0 0  
           0 0 0 13 -9" result="goo" />
      <feBlend in="SourceGraphic" in2="goo" />
  	</filter>
     <path id="wave" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
  </defs> 

   <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2" ></use> 
   <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0" ></use>

  <g class="gooeff">
  <circle class="drop drop1" cx="20" cy="2" r="1.8"  />
  <circle class="drop drop2" cx="25" cy="2.5" r="1.5"  />
  <circle class="drop drop3" cx="16" cy="2.8" r="1.2"  />
    <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />    
</svg>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
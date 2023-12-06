<?php include("header.php") ?>

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
	.mySlides2 {display: none;}
	.mySlides3 {display: none;}
	.mySlides4 {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<div class="pageHeader fullwidth">
    <div class="min-width">
        <h1>Membership Benefits</h1>
        <ul class="breadcrumb">
            <li><a href="index">Home</a></li>
            <li>/</li>
            <li>Membership Benefits</li>
        </ul>
    </div>
</div>
<div class="fullwidth padding">
     <div class="min-width">
        <div class="fullwidth whiteBg">
           
			  <h2></h2><br>
   <div class="slideshow-container">
<div class="mySlides fade"><img src="uploaded/gallery/benefits.jpg" style="width:100%"></div>

   </div>	
        </div>
    </div>
</div>



<script>
let slideIndex = 0;
	let slideIndex2 = 0;
	let slideIndex3 = 0;
	let slideIndex4 = 0;
showSlides();
	showSlides2();
	showSlides3();
	showSlides4();
function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
 
  slides[slideIndex-1].style.display = "block";  

  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
	function showSlides2() {
  let i;
  let slides = document.getElementsByClassName("mySlides2");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex2++;
  if (slideIndex2 > slides.length) {slideIndex2 = 1}    
 
  slides[slideIndex2-1].style.display = "block";  

  setTimeout(showSlides2, 2000); // Change image every 2 seconds
}
	
	function showSlides3() {
  let i;
  let slides = document.getElementsByClassName("mySlides3");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex3++;
  if (slideIndex3 > slides.length) {slideIndex3 = 1}    
 
  slides[slideIndex3-1].style.display = "block";  

  setTimeout(showSlides3, 2000); // Change image every 2 seconds
}
	
	
		function showSlides4() {
  let i;
  let slides = document.getElementsByClassName("mySlides4");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex4++;
  if (slideIndex4 > slides.length) {slideIndex4 = 1}    
 
  slides[slideIndex4-1].style.display = "block";  

  setTimeout(showSlides4, 2000); // Change image every 2 seconds
}
	
</script>
<?php include("footer.php") ?>
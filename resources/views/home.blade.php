@extends('master')
@section("body")

<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;

}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}



/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
button {
  width: 12rem;
  height: 3rem;
  font-size:1.2rem;
  background-color: red;
  border-radius: 50px;
  box-shadow: 1px 1px 10px black;
  border:none;
  cursor: pointer;
  color: white;
  transition: 1s;

}
button:hover {
  transition: 1s;
  transform: scale(1.1);
}
</style>


<div class="empty"></div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="{{Vite::asset("resources/views/images/poster.jpg")}} " style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="{{Vite::asset("resources/views/images/poster3.jpg")}}" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="{{Vite::asset("resources/views/images/poster2.jpg")}}" style="width:100%">

</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<div class="tar-c">
<div class="target">
  <div class="target2">
    <h1>هدف سایت</h1>
    <p class="par">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
  </div>
 <div class="target3">
   <div class="cir"><img style="width: inherit;" src="{{Vite::asset('resources/views/images/a.svg.png')}}" alt=""></div>
</div>
</div>
</div>

<div class="tar-c" style="height: 60vh;">
<div class="target" style="height: inherit;flex-direction: column;justify-content: center;
align-items: end;">
    <h1 style="margin-right:2vh">شهدای شاخص</h1>
    
    <div class="shahid">
      <div class="shahid-1"><img class="img-sh" src="{{Vite::asset('resources/views/images/poster.jpg')}}" alt=""><h2 class="h2-sh">شهید سید ابراهیم رئیسی</h2><p class="par">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p></div>
      <div class="shahid-1"><img class="img-sh" src="{{Vite::asset('resources/views/images/poster2.jpg')}}" alt=""><h2 class="h2-sh">شهید حاج قاسم سلیمانی</h2><p class="par">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p></div>
      <div class="shahid-1"><img class="img-sh" src="{{Vite::asset('resources/views/images/poster3.jpg')}}" alt=""><h2 class="h2-sh">شهید محسن فخری زاده</h2><p class="par">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p></div>
    </div>
</div></div>
<div class="tar-c" style="height: 70vh;margin-top:50px;">
<div class="target" style="height: inherit;flex-direction: column;justify-content: center;
align-items: end;">
    <h1 style="margin:2vh;">معرفی کتاب</h1>
    
    <div class="shahid">
      <div class="shahid-1"><img class="img-sh" src="{{Vite::asset('resources/views/images/poster.jpg')}}" alt=""><h2 class="h2-sh"></h2><p class="par">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p></div>
      <div class="shahid-1"><img class="img-sh" src="{{Vite::asset('resources/views/images/poster.jpg')}}" alt=""><h2 class="h2-sh"></h2><p class="par">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p></div>
      <div class="shahid-1"><img class="img-sh" src="{{Vite::asset('resources/views/images/poster.jpg')}}" alt=""><h2 class="h2-sh"></h2><p class="par">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p></div>
    </div>
    <div style="width: 100%;justify-content: center;
    align-items: center; display:flex;"><button onclick="menu('book')">دیگر کتاب ها</button></div>
  </div></div>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>




@endsection
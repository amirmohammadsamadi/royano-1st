
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کانون ولایت</title>
</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    <header>
    <div class="container">
    <div class="search" onmouseover="search()">
        <img src="{{Vite::asset('resources/views/images/search.svg')}}" alt="" width="40px">
        <input type="text" class="input-s">
    </div>
    <div class="menu">
        <p class="menu-it" onclick="menu('home')">خانه</p>
        <p class="menu-it" onclick="menu('shohada')">شهدا</p>
        <p class="menu-it" onclick="menu('book')">معرفی کتاب</p>
        <p class="menu-it" onclick="menu('down')">دانلود</p>
        <p class="menu-it" onclick="menu('git')">گیت هاب</p>
        <p class="menu-it" onclick="menu('ab')">درباره ما</p>
    </div>
    <div class="logo"><img src="{{Vite::asset('resources/views/images/a.svg.png')}}" alt="" width="50px"></div>
    </div>

</header>

@yield('body')
<footer>
 
    
<div style="width: 100%;height: 4vh;display:flex;justify-content: right;padding-right:2vh;align-items:center;background-color:gray;color:white;"><p>تمامی حقوق محفوظ است</p></div>
</footer>
</body>
<script src="{{Vite::asset('resources/js/app.js')}}"></script>

</html>



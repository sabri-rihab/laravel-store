
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/css/welcome.blade.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/products.blade.css') }}">
    <script src="{{ asset('asset/js/home/welcome.blade.js') }}"></script>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/shopping-cart.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/user.css' rel='stylesheet'>
    <!-- <script src="jquery-3.7.1.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<header class="menu">
        <img src="{{ asset('asset/image/logo/logo_1-removebg.png') }}" alt="#"class='logo'>
        <nav>
            <ul class='nav_links'>
                <li><a id='test' class='option' href="{{route('Home')}}">Home</a></li>
                <li><a class='option' href="#">Story</a></li>
                <li><a class='option' href="{{route('products')}}">Products</a></li>
                <li><a class='option' href="#">FAQs</a></li>
                <li><a class='option' href="#">Contact</a></li>
            </ul>
        </nav>
        <div  class='login'>
        <a href="#"><i class="gg-user"></i> </a>
        <a href="#"><i class="gg-shopping-cart"></i></a>
        </div>
        <i class="fa fa-bars" id='icon' style="font-size:30px"></i>

    </header>
    <script>
    // document.addEventListener("DOMContentLoaded", function() {
        var icon = document.getElementById('icon');
        var navLinks = document.querySelector('.nav_links');

        if (window.innerWidth >= 900) {
            navLinks.style.display = 'block';
        } else {
            navLinks.style.display = 'none';
        }

        icon.addEventListener('click', function() {
            if (navLinks.style.display === 'none' || navLinks.style.display === '') {
                navLinks.style.display = 'block'; 
                document.body.classList.add('no-scroll'); 
            } else {
                navLinks.style.display = 'none';
                document.body.classList.remove('no-scroll');
            }
        });
    // });
</script>



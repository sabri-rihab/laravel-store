@include('layouts.app')
<body>
<script src="{{ asset('asset/js/home/welcome.blade.js') }}"></script>
    <!-- <header class="menu">
        <img src="{{ asset('asset/image/logo/logo_1-removebg.png') }}" alt="#"class='logo'>
        <nav>
            <ul class='nav_links'>
                <li><a href="#">Home</a></li>
                <li><a href="#">Story</a></li>
                <li><a href="{{route('products')}}">Products</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div  class='login'>
        <a href="{{  route('login')  }}"><i class="gg-user"></i> </a>
        <a href="#"><i class="gg-shopping-cart"></i></a>
        </div>
    </header> -->

    <div class="slider">
    <div class="list">
        <div class="item active">
            <img src="{{ asset('asset/image/slide/image1.jpg') }}" alt="#">
            <div class="content">
                <h2>Unlock Exclusive Deals Today</h2>
                <p>Shop now and enjoy special discounts on select items. Limited-time offers you don't want to miss!</p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('asset/image/slide/image2.jpg') }}" alt="#">
            <div class="content">
                <h2>Embrace the Season's Trends</h2>
                <p>From cozy knits to vibrant prints, dive into the latest fashion trends that will keep you stylish all season long.</p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('asset/image/slide/image3.jpg') }}" alt="#">
            <div class="content">
                <h2>Discover Our Latest Collection</h2>
                <p>Explore the trends and styles of the season. Find the perfect pieces to elevate your wardrobe.</p>
            </div>
        </div>
        <div class="arrows">
            <button id='prev'><</button></br>
            <button id='next'>></button>
        </div>
    </div>
    </div>

        <p class='titre'>Featured Products</p>
    <div class='products' >
        @foreach($listeproduits as $products)
        <div class="product">
        <!-- <img src="data:image/png;base64,{{base64_encode($products->image)}}" alt="photo" alt=""> -->
        <img src='{{$products->src_image}}' alt="photo" class='product_image'>
            <!-- <img src="https://picsum.photos/200/300" alt="" class='product_image'> -->
            <p class='product_name'>{{$products->name}}</p>
            <span class='price'>{{$products->price}} MAD</span>
            <p class='description'>{{$products->description}}</p>
        </div>
        @endforeach
    <a href="{{ route('products') }}"><p class='button'>VIEW ALL PRODUCTS</p></a>
    </div>

</body>
</html>
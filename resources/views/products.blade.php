@include('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/css.gg@2.0.0/icons/css/shopping-cart.css' rel='stylesheet'>

    <title>Document</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script>
    $(document).ready(function() {
        $('.product-thumbnail').click(function() {
            var productId = $(this).data('product-id');
            $.ajax({
                url: '/products/' + productId,
                type: 'GET',
                success: function(data) {
                    $('#products-details-container').html(data);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script> -->

<div id="product-details-container">
    <!-- the product detail will display here -->
</div>
<div class='products' >
        @foreach($list as $products)
        <div class="product">
        <img src='{{$products->src_image}}' alt="photo" class='product_image'>
            <p class='product_name'>{{$products->name}}</p>
            <span class='price'>{{$products->price}} MAD</span>
            <p class='description'>{{$products->description}}</p>
            <button class='Add_To_Cart'><i class="gg-shopping-cart"></i></button>
        </div>
        @endforeach
        
    </div>
</body>
</html>
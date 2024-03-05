<img src='{{ $product->src_image }}' alt="photo" class='product_image'>
<p class='product_name'>{{ $product->name }}</p>
<span class='price'>{{ $product->price }} MAD</span>
<p class='description'>{{ $product->description }}</p>
<h3>Description</h3>
<p>{{ $product->description_2 }}</p>
<div class="countHandler">
    <button> - </button>
    <input type="number" value='0'>
    <button> + </button>
</div>
<input type="button" value="ADD TO CART">
<a href="#">Details</a>
<a href="#">Delivery and Payment</a>

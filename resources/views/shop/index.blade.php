<!DOCTYPE html>
<html>

<head>
    <title>ENEST-5</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/shoppingCart/resources/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main-div">
        @include('shop/header') 
        <div class="home-page">
            @include('shop/menu')
        </div>
        <div class="null">

        </div>
        <div class="main-categorious">
            <div class="footer">
                <div class="main-img">
                    <img src="images/16.png">
                </div>
                <div class="categorious">
                    <div class="cate-heading">
                        <p>CATEGORIES</p>
                    </div>
                    <div class="items">
                        <ul>
                            @foreach ($categories as $category)
                                <a href="/shoppingCart/public/products/{{ $category->id }}"
                                    style="text-decoration: none;">
                                    <li>{{ $category->category }}</li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="contact">
                    <div class="contact-us">
                        <p>ALL PRODUCTS</p>
                    </div>
                    <div class="Camera-info">
                        @foreach ($products as $product)
                            <div class="samsung-cam">
                                <div class="cam-info">
                                    <img src="{{ $product->productimage }}">
                                    <div class="sam-prc">
                                        <span>{{ $product->productname }}</span>
                                        <p>{{ $product->productprice }}</p>
                                    </div>
                                    <hr class="hr2">
                                    <div class="cart-btn">
                                        <i class="fa fa-plus-circle iconn" aria-hidden="true"></i>
                                        <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        <a href="/shoppingCart/public/buycart/{{$product->id}}">
											<input type="submit" name="" value="BUY NOW">
										</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <?php
                include 'footer.php';
                ?>
            </div>
        </div>
    </div>
</body>

</html>
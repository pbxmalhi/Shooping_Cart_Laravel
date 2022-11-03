<!DOCTYPE html>
<html>

<head>
    <title>ENEST-3</title>
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
                    @isset($products)
                    @foreach ($products as $product)
                        
                    <div class="contact-us">
                        <p>{{$product->productname}}</p>
                    </div>
                    <div class="dish-info">
                        <div class="machine-pic">
                            <div class="img">
                                <img src="/shoppingCart/public/{{$product->productimage}}">
                            </div>
                            <div class="stock">
                                <p>In Stock:  {{$product->productquantity}}</p>
                            </div>
                            <div class="detail">
                                <span>Details:</span>
                                <p> {{$product->productname}}</p>
                            </div>
                        </div>
                        <div class="machine-info">
                            <div class="washer">
                                <p> {{$product->productname}}</p>
                            </div>
                            <div class="model-info">
                                <span>Model: {{$product->productname}}</span>
                                <p>Manufacturer: {{$product->productname}}</p>
                            </div>
                                    <?php
                                    $userid = session()->get('username'); 
                                    ?>
                            <form method="POST" action="{{'/shoppingCart/public/addToCart'}}">
                                {{ csrf_field() }}
                                <div class="quantity">
                                    <input type="hidden" name="productid" value="{{$product->id}}">
                                    <input type="hidden" name="userid" value="{{$userid}}">
                                    <table>
                                        <tr>
                                            <td class="qty">Enter quantity</td>
                                            <td><input type="text" name="qty"></td>
                                        </tr>
                                    </table>
                                    <div class="price">
                                        <span>Rs. {{$product->productprice}}</span>
                                    </div>
                                </div>
                                <div class="cart">
                                    @if (session()->has('username'))
                                    <input type="submit" name="addToCart" value="Add to Cart">
                                    @else
                                    <a href="/shoppingCart/public/signup"><input type="button" value="Login to Buy"></a>
                                    @endif
                                </div>
                            </form>
                            @if (session()->has('username'))
                            <div class="checkout">
                                <a href="/shoppingCart/public/checkout"><input type="button" value="checkout"></a>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                        
                    @endisset
                    </div>
                <?php
                include 'footer.php';
                ?>
            </div>
        </div>
    </div>
</body>

</html>

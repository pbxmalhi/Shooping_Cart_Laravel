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

                    <div class="contact-us">
                    </div>
                    <div class="dish-info">
                        <table width="80%" style="text-align: center; border-collapse:collapse;" border="1">
                            <tr>
                                <th style="padding: 5px">ID</th>
                                <th>USER ID</th>
                                <th>PRODUCT ID</th>
                                <th>QUANTITY</th>
                            </tr>
                            <?php
                            $userid = session()->get('username');
                            ?>
                            @foreach ($cartItems as $data)
                            @if ($data->userid == $userid)
                            <tr>
                                <td style="padding: 5px">{{$data->id}}</td>
                                <td>{{$data->fullname}}</td>
                                <td>{{$data->productname}}</td>
                                <td>{{$data->quantity}}</td>
                            </tr>
                            @endif
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
            <?php
            include("footer.php");
            ?>
        </div>
    </div>
    </div>
</body>

</html>
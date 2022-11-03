@if (session()->has('username'))
    <?php
    session()->flush();
    ?>
@endif
<!DOCTYPE html>
<html>

<head>
    <title>ENEST-2</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/shoppingCart/resources/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main-div">
        @include('shop/header') 
        <div class="home-page">
            @include('shop.menu')
        </div>
        <div class="null">
        </div>
        <div class="main-categorious">
            <div class="footer">
                <div class="login-here">
                    <div class="login">
                        <p>Login Here</p>
                        <div class="user-info">
                            <form method="POST" action="{{ 'login_submit' }}">
                                {{ csrf_field() }}
                                <table class="login-1">
                                    <tr class="inpt">
                                        <td><span>Username</span></td>
                                        <td><input type="text" name="username"></td>
                                    </tr><br>
                                    <tr class="inpt">
                                        <td><span>Password</span></td>
                                        <td><input type="password" name="loginpass"></td>
                                    </tr>
                                    <tr class="logn-btn">
                                        <td></td>
                                        <td><input class="log" type="submit" name="login" value="Login">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sign-up">
                <div class="sign">
                    <p>New to Enest? <a href=""> Sign up</a></p>
                    <div class="user-info">
                        <form method="POST" action="{{'newUser'}}">
                            {{ csrf_field() }}
                            <table class="login-1">
                                <tr class="inpt-1">
                                    <td><span>Full Name</span></td>
                                    <td><input type="text" name="fullname"></td>
                                </tr><br>
                                <tr class="inpt-1">
                                    <td><span>Email</span></td>
                                    <td><input type="email" name="email"></td>
                                </tr>
                                <tr class="inpt-1">
                                    <td><span>Password</span></td>
                                    <td><input type="password" name="password"></td>
                                </tr>
                                <tr class="logn-btn">
                                    <td></td>
                                    <td><input class="log" type="submit" name="signup" value="Sign up">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            include 'footer.php';
            ?>
        </div>
    </div>
</body>

</html>

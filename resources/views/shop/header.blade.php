<div class="head-div">
    <div class="main">
        <div class="head">
            <span>EVEST</span>
            <p>THE BIGGEST CHOICE OF THE WEB</p>
        </div>
        <div class="btn">
            @if (session()->has('username'))
            <a href="http://localhost/shoppingCart/public/signup"><input type="button" name="" value="Logout"></a>
            @else
            <a href="http://localhost/shoppingCart/public/signup"><input type="button" name="" value="Log in"></a>
            @endif
        </div>
    </div>
</div>
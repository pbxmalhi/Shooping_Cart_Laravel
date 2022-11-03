<div class="pagnation">
    <div class="list">
        <ul>
            <a href="/shoppingCart/public/index">
                <li>HOME</li>
            </a>
            <li>NEW PROJECT</li>
            <li>SPECIAL</li>
            <li>REVIEWS</li>
            <a href="/shoppingCart/public/contactus">
                <li>CONTACT</li>
            </a>
            @if (session()->has('username'))
            <a href="/shoppingCart/public/checkout">
                <li>CART</li>
            </a>
            @endif
        </ul>
    </div>
    <div class="search">
        <div class="search-1">
            <div class="input">
                <input type="text" name="">
            </div>
            <div class="btnn">
                <input type="button" name="" value="Search">
            </div>
        </div>
    </div>
</div>
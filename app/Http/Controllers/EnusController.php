<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\categories;
use App\Models\product;
use App\Models\cart;
use App\Models\signup;
use Illuminate\Http\Request;

class EnusController extends Controller
{
    // Displaying Index page (Home Page) and Also passing categories  and all products
    public function index()
    {
        $categories = categories::all();
        $products = product::all();
        return view('shop/index', compact('categories', 'products'));
    }

    // Adding new user data in the database
    public function newUser(Request $request)
    {
        $add = new signup;
        $add->fullname = $request['fullname'];
        $add->email = $request['email'];
        $add->password = $request['password'];
        $add->save();
        return redirect('signup');
    }

    // Displaying products according to the category in the product view
    public function productsCat($id)
    {
        $categories = categories::all();
        $products = product::select('*')
            ->where('categoryid', $id)
            ->get();
        return view('shop/products', compact('categories', 'products'));
    }

    // Displaying Buy Cart Page
    public function buycart()
    {
        $categories = categories::all();
        return view('shop/buyCart', compact('categories'));
    }

    // Displaying selected product on the buyCart page
    public function buycartAdded($id)
    {
        $categories = categories::all();
        $products = product::select('*')
            ->where('id', $id)
            ->get();
        return view('shop/buyCart', compact('categories', 'products'));
    }

    // Adding cart item in the cart database
    public function addToCart(Request $request)
    {
        $add = new cart;
        $add->productid = $request['productid'];
        $add->userid = $request['userid'];
        $add->quantity = $request['qty'];
        $add->save();
        $categories = categories::all();
        $cartItems = cart::all();
        return view('shop/checkout', compact('categories', 'cartItems'));
    }

    // Displaying all the items in the cart on the checkout page
    public function checkout()
    {
        $cartItems = DB::table('cart')
            ->select('cart.id', 'cart.userid', 'signup.fullname', 'product.productname', 'cart.quantity')
            ->join('signup', 'signup.id', '=', 'cart.userid')
            ->join('product', 'product.id', '=', 'cart.productid')
            ->get();
        $categories = categories::all();
        // $cartItems = cart::all();
        return view('shop/checkout', compact('categories', 'cartItems'));
    }

    // Displaying all the categories in the product page
    public function products()
    {
        $categories = categories::all();
        return view('shop/products', compact('categories'));
    }

    // Displaying the signup page
    public function signup()
    {
        return view('shop/signup');
    }

    // Displaying the Contact us page
    public function contactus()
    {
        $categories = categories::all();
        return view('shop/contactUs', compact('categories'));
    }

    // Logging in the user and creating a session to be used throughout
    public function login_submit(Request $request)
    {
        $name = $request->get('username');
        $password = $request->get('loginpass');
        $data = signup::where([
            ['email', '=', $name],
            ['password', '=', $password]
        ])->count();
        $userdata = signup::where([
            ['email', '=', $name],
            ['password', '=', $password]
        ])->first();
        if ($data > 0) {
            session()->put('username', $userdata->id);
            return redirect('index');
        } else {
            print_r("Invalid Credentials!");
        }
    }
}

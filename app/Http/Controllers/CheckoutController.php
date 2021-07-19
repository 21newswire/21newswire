<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Request;
use Session;
use Redirect;
use Cartalyst\Stripe\Stripe;
use View;
use PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    public function productDetail($id)
    {
        $cart = session()->get('product-cart');

        return view('Front-end.Pages.product.product-detail',compact('cart'));
    }
    public function checkout()
    {
        $cart = session()->get('product-cart');
        if(empty($cart)){
            return redirect()->route('front-end.home');
        }
        $total_price = 0;
        foreach($cart as $key => $value)
        {
            $total_price = $total_price + $value['price'];
        }

        return view('Front-end.Pages.checkout',compact('cart', 'total_price'));
    }
    public function stripePost()
    {
        $stripe = Stripe::make(env('STRIPE_SECRET'));
        $price = Request::get('totalPrice');
        try {
            $token = $stripe->tokens()->create([
            'card' => [
            'number' => Request::get('cardnumber'),
            'exp_month' => Request::get('expmonth'),
            'exp_year' => Request::get('expyear'),
            'cvc' => Request::get('cvv'),
            ],
            ]);
            $charge = $stripe->charges()->create([
            'card' => $token['id'],
            'currency' => 'USD',
            'amount' => $price,
            'description' => 'payment for Packages'
            ]);
        } catch (Exception $e) {
            \Session::put('error',$e->getMessage());
            throw ValidationException::withMessages([$e->getMessage()]);
        } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
            \Session::put('error',$e->getMessage());
            throw ValidationException::withMessages([$e->getMessage()]);
        } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
            \Session::put('error',$e->getMessage());
            throw ValidationException::withMessages([$e->getMessage()]);
        }
        if($charge['status'] == 'succeeded'){
            $package = array(
                'user_id' => auth()->id(),
                'product_id' => '1',
                'price' => Request::get('totalPrice'),
                'productPrice' => '123',
                'productCost' => '222',
                'full_name' => Request::get('fullname'),
                'email' => Request::get('email'),
                'address' => Request::get('address'),
                'city' => Request::get('city'),
                'zip' => Request::get('zip'),
                'same_as_billing' => (Request::get('sameadr') !== '') ? '1':'0' ,
                'State' => Request::get('state'),
                'payment_status' => 'succeeded',
                'transaction_id' => '',
                'order_status' => 'New',
            );
            $packageAdd = Checkout::create($package);
        }
        //faizan
        return redirect()->route('front-end.home');

    }
    public function addToCart()
    {
        $package = Request::get('package');
        $price = Request::get('price');
        $addToCartArray = array();
        $uniqueId = generateRandomString();
        if(!empty($cart)) {
            $cartKeyValues = array_keys($cart);
            while(in_array($uniqueId, $cartKeyValues)){
                $uniqueId = generateRandomString();
            }
        }
        $cart[$uniqueId] = array(
            "package" => $package,
            "price" => $price
        );
        $sessionCart = session()->get('product-cart');
        if(!$sessionCart) {
    
        $sessionCart[$uniqueId] = $cart[$uniqueId];
        session()->put('product-cart', $sessionCart);
        }
        else
        {
            $sessionCart[$uniqueId] = $cart[$uniqueId];
            session()->put('product-cart', $sessionCart);
        }
        $finalSession = session()->get('product-cart');
        $sessionCount = count($finalSession);
        $addToCartArray[0]=$uniqueId;
        $addToCartArray[1]=$sessionCount;
        return $addToCartArray;
    }
    public function removeFromCart()
    {
        // session()->forget('product-cart');
        $product_id = Request::get('product_id');
        $addToCartArray = array();

        foreach (Session::get('product-cart') as $key => $value) 
        {
            if ($key === $product_id)
            {
                Session::pull('product-cart.'.$key); // retrieving the value and remove it from the array
                break;
            }
        }
        
        $sessionCart = session()->get('product-cart');
        $sessionCount = count($sessionCart);
        $addToCartArray[0]=$sessionCart;
        $addToCartArray[1]=$sessionCount;
        return $addToCartArray;
    }
}

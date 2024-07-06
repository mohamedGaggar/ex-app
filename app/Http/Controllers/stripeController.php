<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Post;
use App\Models\User;
use Stripe\Stripe;
class stripeController extends Controller
{
    public function checkout(request $request){

     $cartId=$request->input('id');
     $cart=Cart::find($cartId);

     Stripe::setApiKey(env('STRIPE_SK'));

     $session = Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => $cart->title,
                ],
                'unit_amount' => $cart->price * 100,
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => route('success', ['cart_id' => $cartId]),
        'cancel_url' => route('checkout.cancel'),
    ]);




    return redirect()->away($session->url);





}


public function success(Request $request)
{
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login')->with('error', 'You must be logged in to complete the purchase.');
    }

    $cartItems = Cart::where('user_id', Auth::id())->get();

    foreach ($cartItems as $item) {

        $post = Post::find($item->id);
        if (!$post) {

            continue;
        }


        $user->purchasedPosts()->attach($item->id, ['status' => 'purchased']);


        $item->delete();
    }

    return redirect()->route('profile')->with('success', 'Payment successful. Posts have been added to your profile.');
}



 function cancel()
{
    return redirect()->route('cart')->with('error', 'Payment was cancelled.');
}



}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Subscription;
use Stripe\Checkout\Session;

use function PHPSTORM_META\map;

class StripeController extends Controller
{
    public function subscribe(Request $request){
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $customer = Customer::create([
            'email' => Auth::User()->email,
            'source' => $request->stripeToken,
        ]);
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;

class StripeController extends Controller
{
    public function createSubscription(Request $request){
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $customer = Customer::create([
                'email' => $request->email,
                'source' => $request->stripeToken,
            ]);

            $subscription = Subscription::create([
                'customer' => $customer->id,
                'items' => [
                    ['price' => 'price_5'],
                ]
                ]);

            return response()->json(['success' => 'Processed!']);
        } catch (\Exception $error) {
            return response()->json(['error' => $error->getMessage()]);
        }

    }

    public
}

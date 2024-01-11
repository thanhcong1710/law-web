<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Providers\UtilityServiceProvider as u;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function add(Request $request)
    {
        $total_amount = 0;
        $cartItems = $request->cartItems;
        foreach ($cartItems as $item) {
            $total_amount += data_get($item, 'quantity') * data_get($item, 'price');
        }
        $payment_id = u::insertSimpleRow(array(
            'user_id' => Auth::user()->id,
            'amount' => $total_amount,
            'status' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => Auth::user()->id,
        ), 'payments');
        foreach ($cartItems as $item) {
            u::insertSimpleRow(array(
                'payment_id' => $payment_id,
                'user_id' => Auth::user()->id,
                'law_user_id' => data_get($item, 'user_id'),
                'law_schedule_id' => data_get($item, 'schedule_id'),
                'quantity' => data_get($item, 'quantity'),
                'amount' => data_get($item, 'price'),
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'creator_id' => Auth::user()->id,
            ), 'payment_items');
        }

        return response()->json("ok");
    }
}
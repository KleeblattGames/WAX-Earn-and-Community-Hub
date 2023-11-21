<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class NotikPostbackController extends Controller
{
    public function handlePostback(Request $request)
    {
        $user_id = $request->input('user_id');
        $offer_name = $request->input('offer_name');
        $offer_id = $request->input('offer_id');
        $tx_id = $request->input('txn_id');
        $ip = $request->input('conversion_ip');
        $payout = $request->input('payout');
        $currency_reward = $request->input('currency_name');

        $offer = new Offer([
            'user_id' => $user_id,
            'partner' => 'Notik',
            'offer_name' => $offer_name,
            'offer_id' => $offer_id,
            'tx_id' => $tx_id,
            'ip' => $ip,
            'status' => 100,
            'multi_status' => 100,
            'payout' => $payout,
            'currency_reward' => $currency_reward,
        ]);

        $offer->save();

        return response()->json(['status' => true]);
    }
}

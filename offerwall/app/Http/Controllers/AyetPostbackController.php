<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Client;
use App\Http\Controllers\Controller;

class AyetPostbackController extends Controller
{
    public function handlePostback(Request $request)
    {
        $user_id = $request->input('external_identifier');
        $offer_name = $request->input('offer_name');
        $offer_id = $request->input('offer_id');
        $tx_id = $request->input('txn_id');
        $ip = $request->input('conversion_ip');
        $payout = $request->input('payout_usd');
        $currency_reward = $request->input('currency_name');
        $wax_reward = $request->input('amount');
        

        $offer = new Offer([
            'user_id' => $user_id,
            'partner' => 'AyeT',
            'offer_name' => $offer_name,
            'offer_id' => $offer_id,
            'tx_id' => $tx_id,
            'ip' => $ip,
            'status' => 100,
            'multi_status' => 100,
            'payout' => $payout,
            'currency_reward' => $currency_reward,
            'wax_reward' => $wax_reward,
            'klee_reward' => '5',
        ]);

        $offer->save();

        $user = User::where('id', $user_id);
        $user->increment('wax_balance', $wax_reward);
        $user->increment('klee_balance', '5'); 

        return response()->json(['status' => 200]);
    }
}

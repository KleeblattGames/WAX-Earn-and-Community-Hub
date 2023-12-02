<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Client;
use App\Http\Controllers\Controller;

class LootablyPostbackController extends Controller
{
    public function handlePostback(Request $request)
    {

        $user_id = $request->input('user_id');
        $offer_name = $request->input('offer_name');
        $offer_id = $request->input('offer_id');
        $tx_id = $request->input('txn_id');
        $ip = $request->input('conversion_ip');
        $status = $request->input('status');
        $payout = $request->input('payout');
        $wax_reward = $request->input('amount');

        $offer = new Offer([
            'user_id' => $user_id,
            'partner' => 'Lootably',
            'offer_name' => $offer_name,
            'offer_id' => $offer_id,
            'tx_id' => $tx_id,
            'ip' => $ip,
            'status' => $status,
            'payout' => $payout,
            'wax_reward' => $wax_reward,
            'klee_reward' => '5',
         

        ]);
        $offer->save();
        
        $user = User::where('id', $user_id);
        $user->increment('wax_balance', $wax_reward);
        $user->increment('klee_balance', '5');   
  




        return response()->json(['status' => $user]);
    }
}

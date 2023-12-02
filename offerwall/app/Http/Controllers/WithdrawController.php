<?php

namespace App\Http\Controllers;

use App\Models\withdraw;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Client;
use App\Http\Controllers\Controller;

class WithdrawController extends Controller
{
    public function withdraw(Request $request)
    {
        $user_id = $request->user()->id;
        $withdraw_wax_address = $request->query('wax_address');
        $amount = DB::table('users')->where('id', $user_id)->value('wax_balance');
        $withdraw = new withdraw([
            'user_id' => $user_id,
            'wax_amount' => $amount,
            'approval_admin'=> 0,
            'wax_address' => $withdraw_wax_address,

        ]);

        $withdraw->save();

        $user = User::where('id',$user_id);
        $user->decrement('wax_balance', $amount);

        return view('profile')->with('successMsg','Withdrawal was initiated to wax wallet: ' . $withdraw_wax_address . ' Please wait for Admin approval!');
    }
}

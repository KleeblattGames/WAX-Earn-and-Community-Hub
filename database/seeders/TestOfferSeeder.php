<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Hash;


class TestOfferSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('offers')->insert([
		'id' =>'1',
            'user_id' => '100000',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

        DB::table('offers')->insert([
		'id' =>'2',
            'user_id' => '100000',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

        DB::table('offers')->insert([
		'id' =>'3',
            'user_id' => '100001',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

        DB::table('offers')->insert([
		'id' =>'4',
            'user_id' => '100001',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

        DB::table('offers')->insert([
		'id' =>'5',
            'user_id' => '100002',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

        DB::table('offers')->insert([
		'id' =>'6',
            'user_id' => '100003',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '14',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

        DB::table('offers')->insert([
		'id' =>'14',
            'user_id' => '100003',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

        DB::table('offers')->insert([
		'id' =>'7',
            'user_id' => '100003',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

        DB::table('offers')->insert([
		'id' =>'8',
            'user_id' => '100004',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

        DB::table('offers')->insert([
		'id' =>'9',
            'user_id' => '100004',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

        DB::table('offers')->insert([
		'id' =>'10',
            'user_id' => '100004',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

        DB::table('offers')->insert([
		'id' =>'11',
            'user_id' => '100005',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

        DB::table('offers')->insert([
		'id' =>'12',
            'user_id' => '100003',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

        DB::table('offers')->insert([
		'id' =>'13',
            'user_id' => '100001',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);

DB::table('offers')->insert([
		'id' =>'15',
            'user_id' => '100006',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);
DB::table('offers')->insert([
		'id' =>'17',
            'user_id' => '100006',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);
DB::table('offers')->insert([
		'id' =>'18',
            'user_id' => '100006',
            'partner' => "OfferToro",
            'offer_name' => "Survey",
            'offer_id' => '483746_34739',
		'tx_id' => '483746_34739',
		'ip' => now(),
		'status' => '1',
	'multi_status' => '1',
	'payout' => '33',
	'currency_reward' => '33',
	'created_at' => now(),
	'updated_at' => now(),
	'wax_reward'=> '12.5',
	'klee_reward'=> '12.5',
        'reward_locked'=>1,
        ]);




    }
}

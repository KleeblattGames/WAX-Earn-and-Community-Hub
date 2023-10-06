<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Auth;


class EarnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        return view('earn', ['user_id' => $user_id]);
    }

    public function lootably_offers(Request $request)
    {
        $url = "https://api.lootably.com/api/v1/offers/get?apiKey=zwnhiw8degm4vsso16p4qnguwpgzxzbdnck37oht1&placementID=clhedla0e0oh101uy7xwj55vz";
        $response = Http::get($url);
        if ($response->successful()) {
            return $response->json(); // Convert the response to JSON
            
            // Process the data as needed
        } else {
            // Handle the unsuccessful response
            return $response->status();
            // Handle the error accordingly
        }        

    }

    public function notik_offers(Request $request)
    {
        $url = "https://notik.me/api/v2/get-offers/all?api_key=tM9z2VjFRUGQ2iBdVZy43suBlzVl4a3t&pub_id=pO8AAu&app_id=ENRGtwfmUd";
        $response = Http::get($url);
        if ($response->successful()) {
            return $response->json(); // Convert the response to JSON
            
            // Process the data as needed
        } else {
            // Handle the unsuccessful response
            return $response->status();
            // Handle the error accordingly
        }         

    }
    public function get_iframe(Request $request)
    {
        $user_id = Auth::user()->id;
        $lootably_url = "https://wall.lootably.com/?placementID=clhedla0e0oh101uy7xwj55vz&sid=".$user_id;
        $notik_url = "https://notik.me/coins?api_key=tM9z2VjFRUGQ2iBdVZy43suBlzVl4a3t&pub_id=pO8AAu&app_id=ENRGtwfmUd&user_id=".$user_id;   
        $url = "";
        if($request->partner == "lootably") $url = $lootably_url;
        else $url = $notik_url;
        $response = Http::get($url);
        if ($response->successful()) {
            return $response->body(); // Convert the response to JSON
            
            // Process the data as needed
        } else {
            // Handle the unsuccessful response
            return $response->status();
            // Handle the error accordingly
        }      
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

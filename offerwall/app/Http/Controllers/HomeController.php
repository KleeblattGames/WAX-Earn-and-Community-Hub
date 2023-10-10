<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $session = $request->session();
        // ($session->has('first_visit')) ? $session->put('first_visit', false) : $session->put('first_visit', true);
        // return view('first_time', ['first_visit' => $session->get('first_visit')]);
        return view('home');
    }
}

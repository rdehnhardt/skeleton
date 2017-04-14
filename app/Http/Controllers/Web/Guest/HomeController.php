<?php

namespace App\Http\Controllers\Web\Guest;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guest.home');
    }
}

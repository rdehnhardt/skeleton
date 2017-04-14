<?php

namespace App\Http\Controllers\Web\Restricted;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('restricted.dashboard');
    }
}

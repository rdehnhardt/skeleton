<?php

namespace App\Front\Http\Controllers;

class HomeController extends Controller
{

    /**
     * Display home.
     *
     * @return Response
     */
    public function index()
    {
        return view('front.scope.home');
    }

}

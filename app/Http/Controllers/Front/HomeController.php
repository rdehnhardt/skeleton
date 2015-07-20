<?php

namespace App\Http\Controllers\Front;

class HomeController extends FrontController
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

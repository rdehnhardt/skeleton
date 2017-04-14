<?php

namespace App\Http\Controllers\Web\Restricted;

use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('restricted.users');
    }
}

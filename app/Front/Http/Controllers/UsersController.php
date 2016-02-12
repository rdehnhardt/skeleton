<?php

namespace App\Front\Http\Controllers;

use App\Core\Models\User;

class UsersController extends FrontController
{
    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
        header('Access-Control-Allow-Credentials: true');

        return User::all();
    }
}

<?php

namespace App\Auth\Http\Controllers;

use App\Core\Http\Controllers\CoreController;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends CoreController
{
    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
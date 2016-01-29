<?php

namespace App\Auth\Http\Controllers;

use App\Core\Http\Controllers\CoreController;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends CoreController
{
    use ResetsPasswords;

    /**
     * @var string
     */
    protected $linkRequestView = 'auth::email';

    /**
     * @var string
     */
    protected $resetView = 'auth::reset';

    /**
     * Create a new password controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
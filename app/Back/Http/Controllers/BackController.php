<?php

namespace App\Back\Http\Controllers;

use App\Core\Http\Controllers\CoreController;
use Session;

class BackController extends CoreController
{
    public function addFlash($message, $status = 'info')
    {
        Session::flash('flash-message', $message);
        Session::flash('flash-alert', $status);
    }
}

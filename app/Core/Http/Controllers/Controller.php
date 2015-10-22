<?php

namespace App\Core\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Core\Traits\UseFlash as UseFlashTrait;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests, UseFlashTrait;
}

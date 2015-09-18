<?php

namespace App\Core\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Artesaos\SEOTools\Traits\SEOTools as UseSEOToolsTrait;
use App\Core\Traits\UseFlash as UseFlashTrait;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, UseSEOToolsTrait, UseFlashTrait;
}

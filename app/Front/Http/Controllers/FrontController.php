<?php

namespace App\Front\Http\Controllers;

use App\Core\Http\Controllers\CoreController;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class FrontController extends CoreController
{
    use SEOToolsTrait;

    public function index()
    {
        $this->seo()->setTitle(config('app.name'));
        $this->seo()->setDescription('This is my page description');
        $this->seo()->opengraph()->setUrl('http://skeleton.rdehnhardt.com.br/');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->twitter()->setSite('@renatoden');

        return view('front::welcome');
    }
}

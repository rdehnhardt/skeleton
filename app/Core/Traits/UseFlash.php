<?php

namespace App\Core\Traits;

trait UseFlash
{
    /**
     * @return \Laracasts\Flash\FlashNotifier
     */
    protected function flash()
    {
        return app('flash');
    }
}

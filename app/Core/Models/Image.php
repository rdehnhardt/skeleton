<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed tags
 */
class Image extends Model
{
    /**
     * @return mixed
     */
    public function tags()
    {
        return explode(',', $this->tags);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bars';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['foo', 'bar'];

}

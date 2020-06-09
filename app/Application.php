<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'facebook_pix', 'gooogle_analytics'
    ];

}

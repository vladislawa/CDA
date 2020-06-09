<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageMeta extends Model
{
    protected $fillable = ['meta_title', 'meta_description', 'index'];
}

<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Requests;

class Controller extends BackendController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiscController extends Controller
{

    public function features()
    {
        return view('Misc.features');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tableController extends Controller
{
    function index() {
        return view('pages.rtable');
    }
}

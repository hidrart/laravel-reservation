<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeController extends Controller
{
    function index() {
        return view('pages.cafe');
    }
}

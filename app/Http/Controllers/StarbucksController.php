<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarbucksController extends Controller
{
    function index() {
        return view('pages.starbucks');
    }
}

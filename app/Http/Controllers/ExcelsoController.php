<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelsoController extends Controller
{
    function index() {
        return view('pages.excelso');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrecioController extends Controller
{
    public function index()
    {
        return view('precios');
    }
}

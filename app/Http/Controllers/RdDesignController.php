<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RdDesignController extends Controller
{
    public function index()
    {
    	return view('rddesign.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
    	return view('news.index');
    }

    public function article()
    {
    	return view('news.article');
    }
}

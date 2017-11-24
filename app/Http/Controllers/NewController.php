<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewController extends Controller
{
    public function index()
    {
    	/**
    	 * 此sql「select id,title,content from news order by id asc」
    	 * 與laravel query builder相同
    	 */
    	$results = News::select('id','title','content')
    		->orderBy('id','asc')
    		->get();

    	return view('news.index',compact('results'));
    }

    public function article()
    {
    	return view('news.article');
    }
}

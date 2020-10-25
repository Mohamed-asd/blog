<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function about()
    {
    	$data = "This is my data";
    	return view('pages.about', ['data' => $data]);
    }

    public function contact()
    {
    	return view('pages.contact');
    }
}

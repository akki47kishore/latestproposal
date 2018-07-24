<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loggin()
	{
		return view('loggin');
	}
	public function check()
	{
		return 'hai';
	}
}

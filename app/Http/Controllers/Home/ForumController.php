<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    public function index()
    {
    	return view('home.forum');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class myTabunganController extends Controller
{
    public function index()
    {
    	return view('Sub_menu.myTabungan');
    }

}

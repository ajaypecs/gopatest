<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmailController extends Controller
{
    public function index()
    {
    	$emails = DB::table('emails')->get(); 
    	return view('email', ['emails'=>$emails]);
    }
}

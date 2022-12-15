<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function index(){
        $all_post = DB::table('posts')->get();
        return view('pages.user.index',compact("all_post"));
    }
}
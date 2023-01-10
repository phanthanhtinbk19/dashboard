<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function index(){
        $all_post = DB::table('posts')->get();
        $all_project = DB::table('projects')->get();
        $all_new = DB::table('news')->limit(5)->get();
        return view('pages.user.index',compact("all_post","all_new","all_project"));
    }
}
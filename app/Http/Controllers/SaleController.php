<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SaleController extends Controller
{
   public function index(){

      $all_post = DB::table('posts')->get();
      return view('pages.user.sale',compact("all_post"));
   }
}
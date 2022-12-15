<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function new(){

        return view('pages.user.new');
       }
    public function project(){

        return view('pages.user.project');
       }
}
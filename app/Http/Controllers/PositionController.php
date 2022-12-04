<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function saveCategory(Request $request)
    {
      $data = array();
      foreach ($request->all() as $key => $value) {
     if($key!="_token"){
        $data[$key] =$value;
     }
    }
    DB::table('categories')->insert($data);
    return redirect("/categories");
  
    //    return view('pages/add-category');
    }
    public function addCategory()
    {
        return view('pages/add-category');
    }
    public function categories()
    {
        $all_categories = DB::table('categories')->get();
      
        return view('pages/categories',compact('all_categories'));
    }
}
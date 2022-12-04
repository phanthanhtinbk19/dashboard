<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class KindController extends Controller
{
    public function saveKind(Request $request)
    {
      $data = array();
      foreach ($request->all() as $key => $value) {
     if($key!="_token"){
        $data[$key] =$value;
     }
    }
   
    DB::table('kinds')->insert($data);
    return redirect("/kinds");
  
    //    return view('pages.kind/add-kind');
    }
    public function addKind()
    {
        $all_cate = DB::table('categories')->get();
      
        return view('pages.kind/add-kind',compact("all_cate"));
    }
    public function Kinds()
    {
        $all_kind = DB::table('kinds')->get();
      
        return view('pages.kind/all-kind',compact('all_kind'));
    }
  
}
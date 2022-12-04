<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
    return redirect("/all-cate");
  
    //    return view('pages/add-category');
    }
    public function addCategory()
    {
        return view('pages.cate/add-category');
    }
    public function allCate()
    {
        $all_category = DB::table('categories')->get();
      
        return view('pages.cate/all-cate',compact('all_category'));
    }
    public function editCate($cate_id)
    {
        $edit_cate= DB::table("categories")->where("id",$cate_id)->get();
   
        return view('pages.cate/edit-cate',compact('edit_cate'));
    }
    public function updateCate(Request $request,$cate_id)
    {
        $data = array();
        $data["name"] = $request->name;
        $data["updated_by"] = $request->updated_by;
       DB::table("categories")->where("id",$cate_id)->update($data);
      
       return redirect("/all-cate");
    }
    public function deleteCate($cate_id)
    {
        $edit_cate= DB::table("categories")->where("id",$cate_id)->delete();
        return redirect("/all-cate");
    }

}
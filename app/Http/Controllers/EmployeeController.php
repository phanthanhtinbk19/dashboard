<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EmployeeController extends Controller
{
    public function saveEmployee(Request $request)
    {
        $data =array();
        $data['name'] = $request->name;
        $data['position'] = $request->position;
        $get_image = $request->file('photo');
        if($get_image){
          $get_name_image = $get_image->getClientOriginalName();
          $name_image = current(explode('.',$get_name_image));
          $new_image = $name_image.rand(0,99).".".$get_image->getClientOriginalExtension();
          $get_image->move(base_path("public/uploads/employees"),$new_image);
          $data["photo"] = $new_image;
          DB::table("employees")->insert($data);
          return redirect("/all-employee");
        }
        $data["photo"] = "";
        DB::table("employees")->insert($data);
        return redirect("/all-employee");
  
    //    return view('pages/add-employee');
    }
    public function addEmployee()
    {
        return view('pages/add-employee');
    }
    public function allEmployee()
    {
        $all_employee = DB::table('employees')->get();
      
        return view('pages/all-employee',compact('all_employee'));
    }
}
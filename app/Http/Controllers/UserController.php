<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function addUser(){
        return view('pages.add-user');
    }
    function allUser(){
        $all_user = DB::table('users')->get();
        return view('pages.all-user',compact('all_user'));
    }
    function saveUser(Request $request){
        $data =array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['rule'] = $request->rule;
        $get_image = $request->file('photo');
        if($get_image){
          $get_name_image = $get_image->getClientOriginalName();
          $name_image = current(explode('.',$get_name_image));
          $new_image = $name_image.rand(0,99).".".$get_image->getClientOriginalExtension();
          $get_image->move(base_path("public/uploads/users"),$new_image);
          $data["photo"] = $new_image;
          DB::table("users")->insert($data);
          return redirect("/all-user");
        }
        $data["photo"] = "";
        DB::table("users")->insert($data);
        return redirect("/all-user");
    }
    function updateProfile(){
        return view('pages.update-profile');
    }
}
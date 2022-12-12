<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\File;
use App\Models\Image;
use Illuminate\Support\Facades\File as File2; 
class PostController extends Controller
{
    public function savePost(Request $request)
    {
     
      $data = array();
      $data['title'] = $request->title;
      $data['desc'] = $request->desc;
      $data['category_id'] = $request->category_id;
      $data['kind_id'] = $request->kind_id;
      $data['price'] = $request->price;
      $data['area'] = $request->area;
      $data['address'] = $request->address;
      $request->validate([
        'imageFile' => 'required',
        'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
      ]);
      if($request->hasfile('imageFile')) {
     
          foreach($request->file('imageFile') as $file)
          {
              $name = $file->getClientOriginalName();
              $file->move(public_path().'/uploads/posts', $name); 
             $imgData[] =$name;
          }
          $data['images'] = json_encode($imgData);
      }
     
      DB::table('posts')->insert($data);

      return redirect("/all-post");
    }
    public function addPost()
    {
      $files = File::all();
      $all_kind = DB::table('kinds')->get();
      $all_cate = DB::table('categories')->get();
      // return view('pages.post.add-post', ['files' => $files]);
      return view('pages.post.add-post', compact("all_kind","all_cate"));
      
    }
    public function allPost()
    {
        $all_post = DB::table('posts')->get();
        $cates = DB::table('categories')->get();
        $kinds = DB::table('kinds')->get();
     
        return view('pages.post.all-post',compact('all_post',"cates","kinds"));
    }
}
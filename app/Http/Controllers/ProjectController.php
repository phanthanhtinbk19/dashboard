<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProjectController extends Controller
{   public function addProject()
    {
      return view('pages.project.add-project');
      
    }
    
    public function saveProject(Request $request)
    {
     
      $data = array();
      $data['title'] = $request->title;
      $data['desc'] = $request->desc;
      $data['address'] = $request->desc;
  
      DB::table('project')->insert($data);

      return redirect("/all-project");
    }
 
    public function allProject()
    {
        $all_project = DB::table('project')->get(); 
        return view('pages.project.all-project',compact('all_project'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\File as File2; 

class FileController extends Controller
{
    public function create()
    {   
        $files = File::all();
     
        return view('create', ['files' => $files]);
    }
    public function store(Request $request)
    
    {
       
        $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'required'
        ]);

        $files = [];
        if($request->hasfile('filenames'))
		{
			foreach($request->file('filenames') as $file)
			{
			    $name = time().rand(1,100).'.'.$file->extension();
			    $file->move(public_path('uploads/files'), $name);  
			    $files[] = $name;  
			}
		}
       
		$file= new File();
		$file->filenames = $files;
		$file->save();
  
        return back()->with('success', 'Data Your files has been successfully added');
    }
    
   
}
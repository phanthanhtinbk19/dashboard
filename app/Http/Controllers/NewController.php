<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class NewController extends Controller
{
    public function addnew()
    {
        return view('pages.admin.new.add-new');
    }

    public function saveNew(Request $request)
    {
     
        try {
           
            $new = new News();
            $new->title = $request->title;
            $new->desc = $request->desc;
            $new->save();
            $new_id = $new->id;
            toastr()->success('Data has been saved successfully!', 'Congrats');
            return response()->json(['status' => 'success', 'new_id' => $new_id]);
        } catch (\Exception $e) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
            return response()->json(['status' => 'exception', 'msg' => $e->getMessage()]);
        }
     
    }
    public function storeMultipleImage(Request $request)
    {
        try {
            $imageArr = [];
            foreach ($request->file('file') as $file) {
                $newid = $request->newid;
                $new_image = new News();
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('/uploads/images'), $name);
                $imageArr[] = $name;
            }
            $imageArrToStr = implode(',', $imageArr);
            $new_image->where('id', $newid)->update(['images' => $imageArrToStr]);
            return redirect('/admin/all-new');
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }

    public function allNew()
    {
        $news = News::all();
        return view('pages.admin.new.all-new', compact('news'));
    }

    public function deleteNew($new_id)
    {
        try {
            $new = News::where('id', $new_id)->delete();
            return redirect()->back();
            toastr()->success('Data has been deleted successfully!', 'Congrats');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }
    public function editNew($new_id)
    {
        $new = News::find($new_id);
        $cates = Category::all();
        return view('pages.admin.new/edit-new', compact('new', 'cates'));
    }
    public function updateNew(Request $request, $new_id)
    {
        try {
            $new = News::find($new_id);
            $new->title = $request->title;
            $new->desc = $request->desc;
            $new->address = $request->address;
            $new->save();
            return redirect('/admin/all-new');
            toastr()->success('Data has been updated successfully!', 'Congrats');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }
}
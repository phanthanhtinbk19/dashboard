<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function saveCategory(Request $request)
    {
        try {
            $data = $request->all();
            $cate = new Category();
            $cate->name = $data['name'];
            $cate->created_by = $data['created_by'];
            $cate->save();
            toastr()->success('Data has been saved successfully!', 'Congrats');
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }

    }
    public function addCategory()
    {
        return view('pages.admin.cate/add-category');
    }
    public function allCate()
    {
        $cates = Category::all();
        return view('pages.admin.cate/all-cate',compact('cates'));
    }
    public function editCate($cate_id)
    {
        $cate = Category::find($cate_id);
        return view('pages.admin.cate/edit-cate',compact('cate'));
    }
    public function updateCate(Request $request,$cate_id)
    {
        try {
            $cate = Category::find($cate_id);
            $cate->name = $request->name;
            $cate->created_by = $request->created_by;
            $cate->save();
            return redirect('/admin/all-cate');
            toastr()->success('Data has been updated successfully!', 'Congrats');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }
    public function deleteCate($cate_id)
    {
        try {
            $cate= Category::where('id', $cate_id)->delete();
            return redirect()->back();
            toastr()->success('Data has been deleted successfully!', 'Congrats');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }

}
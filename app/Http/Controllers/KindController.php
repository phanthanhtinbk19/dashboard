<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Kind;
use App\Models\Category;
class KindController extends Controller
{
    public function saveKind(Request $request)
    {
        try {
            $data = $request->all();
            $kind = new Kind();
            $kind->name = $data['name'];
            $kind->category_id = $data['category_id'];
            $kind->created_by = $data['created_by'];
            $kind->save();
            toastr()->success('Data has been saved successfully!', 'Congrats');
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }
    public function addKind()
    {
        $cates = Category::all();
        return view('pages.admin.kind/add-kind', compact('cates'));
    }

    public function allKind()
    {
        $kinds = Kind::all();
        $cates = Category::all();
        return view('pages.admin.kind/all-kind', compact('kinds', 'cates'));
    }

    public function deleteKind($kind_id)
    {
        try {
            $kind = Kind::where('id', $kind_id)->delete();
            return redirect('/admin/all-kind');
            toastr()->success('Data has been updated successfully!', 'Congrats');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }
    public function editKind($kind_id)
    {
        $kind = Kind::find($kind_id);
        $cates = Category::all();

        return view('pages.admin.kind/edit-kind', compact('kind', 'cates'));
    }
    public function updateKind(Request $request, $kind_id)
    {
        try {
            $kind = Kind::find($kind_id);
            $kind->name = $request->name;
            $kind->category_id = $request->category_id;
            $kind->created_by = $request->created_by;
            $kind->save();
            return redirect('/admin/all-kind');
            toastr()->success('Data has been updated successfully!', 'Congrats');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }
}
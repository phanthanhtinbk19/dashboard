<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Project;
use App\Models\Category;
class ProjectController extends Controller
{
    public function addProject()
    {
        return view('pages.admin.project.add-project');
    }

    public function saveProject(Request $request)
    {
        try {
            $project = new Project();
            $project->title = $request->title;
            $project->desc = $request->desc;
            $project->address = $request->address;
            $project->save();
            $project_id = $project->id;
            toastr()->success('Data has been saved successfully!', 'Congrats');
            return response()->json(['status' => 'success', 'project_id' => $project_id]);
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
                $projectid = $request->projectid;
                $project_image = new Project();
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('/uploads/images'), $name);
                $imageArr[] = $name;
            }
            $imageArrToStr = implode(',', $imageArr);
            $project_image->where('id', $projectid)->update(['images' => $imageArrToStr]);
            return response()->json(['status' => 'success', 'imgdata' => $original_name, 'projectid' => $projectid]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function allProjectAdmin()
    {
        $projects = Project::all();
        return view('pages.admin.project.all-project', compact('projects'));
    }

    public function allProject()
    {
        $projects = Project::all();
        return view('pages.user.project', compact('all_project'));
    }
    public function detailProject(Request $request)
    {
        $project_id = $request->project_id;
        $project = DB::table('project')
            ->where('id', $project_id)
            ->get();
        return view('pages.user.detail-project', compact('project'));
    }
    public function deleteProject($project_id)
    {
        try {
            $project = Project::where('id', $project_id)->delete();
            return redirect()->back();
            toastr()->success('Data has been deleted successfully!', 'Congrats');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }
    public function editProject($project_id)
    {
        $project = Project::find($project_id);
        $cates = Category::all();
        return view('pages.admin.project/edit-project', compact('project', 'cates'));
    }
    public function updateProject(Request $request, $project_id)
    {
        try {
            $project = project::find($project_id);
            $project->title = $request->title;
            $project->desc = $request->desc;
            $project->address = $request->address;
            $project->save();
            return redirect('/admin/all-project');
            toastr()->success('Data has been updated successfully!', 'Congrats');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }
}
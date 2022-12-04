<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\People;
use DataTables;
use Validator;
class PeopleController extends Controller
{
    public function index(Request $request)
    {
    
        if ($request->ajax()) {
            $data = People::select('id','name','email')->get();
          
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($data){
                    $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm"> <i class="bi bi-pencil-square"></i>Edit</button>';
                    $button .= '   <button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm"> <i class="bi bi-backspace-reverse-fill"></i> Delete</button>';
                    return $button;
                })
                ->make(true);
        }
 
        return view('pages.cate.all-cate');
    }
 
    public function store(Request $request)
    {
        $rules = array(
            'name'    =>  'required',
            'email'     =>  'required',
            'password'     =>  'required'
        );
 
        $error = Validator::make($request->all(), $rules);
 
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
 
        $pass = $request->password;
        $postpass = Hash::make($pass);
 
        $form_data = array(
            'name'        =>  $request->name,
            'email'         =>  $request->email,
            'password'         =>  $postpass
        );
 
        People::create($form_data);
 
        return response()->json(['success' => 'Data Added successfully.']);
    }
 
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = People::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }
 
    public function update(Request $request)
    {
        $rules = array(
            'name'        =>  'required',
            'email'         =>  'required'
        );
 
        $error = Validator::make($request->all(), $rules);
 
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
 
        $form_data = array(
            'name'    =>  $request->name,
            'email'     =>  $request->email
        );
 
        People::whereId($request->hidden_id)->update($form_data);
 
        return response()->json(['success' => 'Data is successfully updated']);
    }
 
    public function destroy($id)
    {
        $data = People::findOrFail($id);
        $data->delete();
    }
}
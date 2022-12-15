<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function saveEmployee(Request $request)
    {
        try {
            $data = $request->all();
            $employee = new Employee();
            $employee->name = $data['name'];
            $employee->email = $data['email'];
            $employee->phone = $data['phone'];
            $employee->address = $data['address'];
            $employee->password = $data['password'];
            $employee->role = $data['role'];
            $employee->position = $data['position'];
            $get_image = $request->file('avatar');
          
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move(base_path('public/uploads/employees'), $new_image);
                $employee->avatar = $new_image;
            } else {
                $employee->avatar = '';
            }
         
            $employee->save();
            toastr()->success('Data has been saved successfully!', 'Congrats');
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
            return redirect()->back();
        }
    }
    public function addEmployee()
    {
        return view('pages.admin.employee/add-employee');
    }
    public function allEmployee()
    {
        $employees = DB::table('employees')->get();

        return view('pages.admin.employee/all-employee', compact('employees'));
    }

    public function editEmployee($employee_id)
    {
        $employee = Employee::find($employee_id);
        return view('pages.admin.employee/edit-employee',compact('employee'));
    }
    public function updateEmployee(Request $request,$employee_id)
    {
        try {
            $employee = Employee::find($employee_id);
            $employee->name = $request->name;
            $employee->created_by = $request->created_by;
            $employee->save();
            return redirect('/admin/all-employee');
            toastr()->success('Data has been updated successfully!', 'Congrats');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }
    public function deleteEmployee($employee_id)
    {
        try {
            $employee= Employee::where('id', $employee_id)->delete();
            return redirect()->back();
            toastr()->success('Data has been deleted successfully!', 'Congrats');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }

}
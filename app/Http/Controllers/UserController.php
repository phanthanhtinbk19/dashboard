<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
class UserController extends Controller
{
    //

    function adminAddAccount(){
        return view('pages.admin.account.add-account');
    }
    function adminProfile(){
        $account_id = Session::get('user_id');
        $account = User::find($account_id);
        return view('pages.admin.account.profile',compact("account"));
    }
    function adminAllAccount(){
        $accounts = User::all();
        return view('pages.admin.account.all-account',compact("accounts"));
    }

  
  

    public function adminSaveAccount(Request $request)
    {
        try {
            $data = $request->all();
            $account = new User();
            $account->name = $data['name'];
            $account->email = $data['email'];
            $account->phone = $data['phone'];
            $account->address = $data['address'];
            $account->password = $data['password'];
            $account->role = $data['role'];
            $get_image = $request->file('avatar');
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move(base_path('public/uploads/accounts'), $new_image);
                $account->avatar = $new_image;
            } else {
                $account->avatar = '';
            }
         
            $account->save();
            toastr()->success('Data has been saved successfully!', 'Congrats');
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
            return redirect()->back();
        }
    }
    // function adminUpdateProfile(){
    //     return view('pages.update-profile');
    // }
    public function editAccount($account_id)
    {
        $account = User::find($account_id);
        return view('pages.admin.account/edit-account',compact('account'));
    }
    public function updateAccount(Request $request,$account_id)
    {
        try {
            $account = User::find($account_id);
            $account->name = $request->name;
            $account->email = $request->email;
            $account->password = $request->password;
            $account->phone = $request->phone;
            $account->address = $request->address;
            $account->role = $request->role;
            $get_image = $request->file('avatar');
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move(base_path('public/uploads/accounts'), $new_image);
                $account->avatar = $new_image;
            } else {
                $account->avatar = $account->avatar;
            }
            $account->save();
            toastr()->success('Data has been updated successfully!', 'Congrats');
            return redirect('/admin/all-account');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }
    public function updateProfile(Request $request,$account_id)
    {
        try {
            $account = User::find($account_id);
            $account->name = $request->name;
            $account->email = $request->email;
            $account->password = $request->password;
            $account->address = $request->address;
            $account->phone = $request->phone;
            $account->role = $request->role;
            $get_image = $request->file('avatar');
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move(base_path('public/uploads/accounts'), $new_image);
                $account->avatar = $new_image;
            } else {
                $account->avatar = $account->avatar;
            }

            $account->save();
            toastr()->success('Data has been updated successfully!', 'Congrats');
            return redirect('/admin/profile');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }
    public function deleteAccount($account_id)
    {
        try {
            $account= User::where('id', $account_id)->delete();
            return redirect()->back();
            toastr()->success('Data has been deleted successfully!', 'Congrats');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }
}
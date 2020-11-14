<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
       //$users = User::all();
        $companies = Company::with('user')->get();

        // return view('user.companies', compact('companies'));
    }

    
    public function create()
    {

        $company = new Company();

        return view('user.adduser')->with('UserGroups',$UserGroups)->with('user',$user); 
    }

    
    public function store(Request $request)
    {
        $userId = \Auth::user()->id;
        //dd($request);
        $this->validate($request,[
            'user_group_id' => 'required|integer',
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6'

        ]);

        $User = User::create([
            'user_group_id' => $request->user_group_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'addedby' => $userId

        ]);

        //Session::flash('success','user group created successfully');
        Session::flash('notify', ['type'=>'success','message' => 'Data created successfully']);

        return redirect()->route('users.index');
    }

    public function edit($id){

       $user = User::findorFail($id);

       $UserGroups = UserGroup::all();

        return view('user.adduser')->with('UserGroups',$UserGroups)->with('user',$user); 
    }


    public function update(Request $request, $id){

       $data = request()->validate([
            'user_group_id' => 'required|integer',
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|unique:users,email,'.$id,

        ]);
       //dd($request);

        User::find($id)->update($data);

       // $user->save();
        Session::flash('notify', ['type'=>'success','message' => 'Data Updated successfully']);
        return redirect()->route('users.index');
    }

   

    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        Session::flash('notify', ['type'=>'success','message' => 'Data Deleted successfully']);
         return redirect()->route('users.index');
    }

    public function change_pass(){
        return view('user.changpassword');
    }

    public function update_password(Request $request, $id){

        $this->validate($request,[
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ]);


        $user = User::find($id);

        $user->password = Hash::make($request['password']);

        $user->save();

        Session::flash('notify', ['type'=>'warning','message' => 'Password Updated, Login With New Password!..']);

        //return view('auth.login');

        return redirect('login')->with(\Auth::logout());
    }
}

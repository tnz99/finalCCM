<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
// use App\Models\AdminRegister;
use App\Http\Controllers\Controller; // Import the Controller class from Laravel

use Illuminate\Http\Request;

class adminRegisterController extends Controller
{
    public function index()
    {
        $alladmin = User::all();
        return view('admin.admin')
            ->with('admin',$alladmin)
        ;
    }

    public function store(Request $request)
    {

        $adminregister = new User;

        $adminregister->name = $request->input('name');
        $adminregister->country = $request->input('country');
        $adminregister->email = $request->input('email');
        $adminregister->usertype = 'admin';
        $adminregister->password = $request->input('password');

        $adminregister->save();

        return redirect('/admin-register')->with('status', 'New Admin is successfully registered!!');
    }
}

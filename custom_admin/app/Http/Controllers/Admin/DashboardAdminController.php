<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\AdminRegister;

class DashboardAdminController extends Controller
{
    public function registeredAdmins()
    {
        $users = User::where('usertype', 'admin')->get();
        $alladmin = User::where('usertype', 'admin')->get();

        $alladmin = $users->merge($alladmin);

        return view('admin.admin', compact('alladmin'));
    }
    public function registerededit(Request $request, $id)
    {
        $alladmin = User::findOrFail($id);
        return view('admin.register-edit', compact('alladmin'));

    }
    public function registeredupdate(Request $request, $id)
    {
        $alladmin = User::find($id);
        $alladmin->name = $request->input('username');
        $alladmin->usertype = $request->input('usertype');
        $alladmin->update();

        return redirect('/admin-register')->with('status', 'Your Data is Updated');
    }

    public function registerdelete($id)
    {
        $alladmin = User::findOrFail($id);
        $alladmin->delete();
        return redirect('/admin-register')->with('status', 'Your Data is Deleted');
    }
}

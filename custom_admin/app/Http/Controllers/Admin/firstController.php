<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class firstController extends Controller
{
    public function dashboard()
    {
        $adminCount = User::where('usertype', 'admin')->count();
        $userCount = User::whereNull('usertype')->count();

        return view('admin.dashboard', compact('adminCount', 'userCount'));

    }

}

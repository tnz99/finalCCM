<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class newAdminController extends Controller
{
    public function registered()
    {
        $alladmin = User::where('usertype', 'admin')->get();
        // Correct variable name here
        $alladmin = $alladmin->merge($alladmin);

        return view('admin.main-admin', compact('alladmin'));
    }
}

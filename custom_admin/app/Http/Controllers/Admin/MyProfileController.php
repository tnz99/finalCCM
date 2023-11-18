<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use App\Models\User;

class MyProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // Get the authenticated user

        return view('admin.show', compact('user'));
    }
}

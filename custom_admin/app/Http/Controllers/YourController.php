<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User; // Adjust the namespace based on your User model namespace

class YourController extends Controller
{
    // Other methods in your controller...

    // Example method in a controller
    public function checkEmailExists(Request $request)
    {
        // Get the email from the request
        $email = $request->input('email');

        // Perform the check logic (query the database, etc.)
        $exists = User::where('email', $email)->exists();

        // Return a JSON response indicating whether the email exists
        return response()->json(['exists' => $exists]);
    }
}

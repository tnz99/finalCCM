<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'country' => $data['country'],
            'email' => $data['email'],
        
        ]);
    }

    public function showRegisterForm()
    {
        // Example logic: Set $darkThemeFlag based on a session variable
        $darkThemeFlag = session('dark_theme_enabled', false);

        return view('auth.register')->with("darkThemeFlag",$darkThemeFlag);
    }
}

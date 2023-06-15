<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }  
      
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully'
            ], 200);

        }else{

            return response()->json([
                'status' => false,
                'message' => 'Email & Password does not match with our record.',
            ], 401);
        }

        
  
        // return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('register');
    }
      
    public function register(Request $request)
    {  
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return response()->json($user, 201);

        // return redirect("dashboard")->withSuccess('You have signed-in');
    }

 
    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('dashboard');
    //     }
  
    //     return redirect("login")->withSuccess('You are not allowed to access');
    // }
    
    // public function signOut() {
    //     Session::flush();
    //     Auth::logout();
  
    //     return Redirect('login');
    // }
}

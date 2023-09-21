<?php

namespace App\Http\Controllers\AuthController;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed
            return response()->json([
                "status" => true,
                "message" => "Successfully logged in."
            ]);
        }
        // Authentication failed
        return response()->json([
            "status" => false,
            "message" => "Something went wrong please check ur credentials."
        ]);
    }

    public function logout()
    {
        Auth::logout(); // Logout the currently authenticated user
        return redirect()->route('Home_FM'); // Redirect to your desired page after logout
    }

    public function dashboard(Request $request)
    {
        return view('Protected.dashboard');
    }
}

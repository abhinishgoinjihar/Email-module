<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobs\SendEmailViaSendGrid;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /**
     * Handle a login request to the application.
     */
    public function login(Request $request)
    {
        // Validate login credentials
        $credentials = $request->only('email', 'password');

        // Attempt login
        if (Auth::attempt($credentials)) {
            // Log login success
            Log::info('Login successful for user: ' . $request->email);

            // Dispatch the login email job to the queue
            dispatch(new SendEmailViaSendGrid(
                $request->email,  // Receiver's email
                'Login Successful', // Subject of email
                'You have successfully logged in to your account.', // Body of email
                'User' // Name (optional, can be dynamic)
            ));

            // Return successful login response
            return response()->json([
                'message' => 'Login successful',
                'user' => Auth::user()
            ]);
        }

        // Return error response if credentials are invalid
        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);
    }
}

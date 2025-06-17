<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Jobs\SendEmailViaSendGrid;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Handle a registration request to the application.
     */
    public function register(Request $request)
    {
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log user registration
        Log::info('New user registered:', ['email' => $user->email]);

        // Dispatch the job to send a welcome email
        SendEmailViaSendGrid::dispatch(
            $user->email,  // User's email
            'Welcome to Our Platform', // Subject of email
            'You have successfully registered on our platform.', // Body of email
            $user->name // User's name
        );

        // Log the email job dispatch
        Log::info('Welcome email job dispatched for: ' . $user->email);

        // Return success response
        return response()->json(['message' => 'Registration successful, welcome email sent!'], 201);
    }
}

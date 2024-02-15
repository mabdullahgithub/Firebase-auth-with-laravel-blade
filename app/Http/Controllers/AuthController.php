<?php

namespace App\Http\Controllers;
use App\Services\FirebaseService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Kreait\Firebase\ServiceAccount;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showForm()
    {
        return view('auth');
    }

    protected $database;

    public function __construct()
    {
        $this->database = FirebaseService::connect();
    }

    public function register(Request $request)
    {
        $this->database
            ->getReference('larafire/user ' . $request['name'])
            ->set([
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
            ]);

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'User has been registered'
        ], 200);
    }

    public function login(Request $request)
    {
        $reference = $this->database->getReference('larafire');
        $snapshot = $reference->getSnapshot()->getValue();

        foreach ($snapshot as $user) {
            if ($user['email'] === $request['email'] && Hash::check($request['password'], $user['password'])) {
                // Store user's authentication state in the session
                $request->session()->put('authenticated', true);

                return response()->json([
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'User has been logged in'
                ], 200);
            }
        }

        return response()->json([
            'status' => 'error',
            'code' => 401,
            'message' => 'Invalid credentials'
        ], 401);
    }

    public function logout(Request $request)
    {
        // Remove user's authentication state from the session
        $request->session()->forget('authenticated');

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'User has been logged out'
        ], 200);
    }

    
}

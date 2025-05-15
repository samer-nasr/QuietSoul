<?php

namespace App\Http\Controllers;

use App\Models\feelingUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function register_user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            // 'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'job' => $request->job,
            'address' => $request->address,
            'education' => $request->education,
            'nationality' => $request->gender,
            'nb_children' => $request->nb_children,
            'marital_status' => $request->marital_status,
            'dob' => $request->dob
        ]);
        return view('login');
    }

    public function login_user(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

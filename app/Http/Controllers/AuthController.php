<?php

namespace App\Http\Controllers;

use App\Models\feelingUser;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;


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

    public function forgetpassword(Request $request)
    {
        return view('forgetpassword');
    }

    public function register_user(Request $request)
    {
       $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => [
            'required',
            'string',
            'min:8',               // Minimum length
            'regex:/[A-Z]/',       // Must contain at least one uppercase letter
            'regex:/[0-9]/',       // Must contain at least one digit
            'confirmed'            // Matches password_confirmation
        ],
    ], [
        'password.regex' => 'Password must contain at least one uppercase letter and one number.',
    ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'job' => $request->job,
            'address' => $request->address,
            'education' => $request->education,
            'nationality' => $request->nationality,
            'nb_children' => $request->nb_children,
            'marital_status' => $request->marital_status,
            'dob' => $request->dob
        ]);
        auth()->login($user);

                    return redirect()->route('home');

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

    public function emailsend(Request $request)
    {
        return view('emailsend');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($request->all());    
        return view('resetpasswordform' , compact('request'));
    }

    public function reset(Request $request)
    {
         $request->validate([
        'email' => 'required|string|email',
        'password' => [
            'required',
            'string',
            'min:8',               // Minimum length
            'regex:/[A-Z]/',       // Must contain at least one uppercase letter
            'regex:/[0-9]/',       // Must contain at least one digit
            'confirmed'            // Matches password_confirmation
        ],
    ], [
        'password.regex' => 'Password must contain at least one uppercase letter and one number.',
    ]);
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('status', 'Password reset successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request): RedirectResponse
    {
       $request->validate([
    'email' => ['required', 'email', 'exists:users,email'],
        ]);
        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );


        // return $status == Password::RESET_LINK_SENT
        //             ? back()->with('status', __($status))
        //             : back()->withInput($request->only('email'))
        //                     ->withErrors(['email' => __($status)]);
        //  dd('here');

                           
        return redirect()->route('emailsend');

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

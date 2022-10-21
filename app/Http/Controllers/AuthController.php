<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Welcome;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function signout() {
        Auth::logout();

        return view('home');
    }

    public function signinForm() {
        return view('auth.signin');
    }

    public function signin(Request $request)
    {   
        $loginPass = $request->validate([
                        'email' => 'required',
                        'password' => 'required'
                    ]);
        
        if(Auth::attempt($loginPass)) {
            $request->session()->regenerate();
            
            return redirect()->to('/home');
        }

        return view('fail');
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::create([
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);

        Auth::login($user);

        Mail::to($user->email)->send(new Welcome());

        return redirect()->to('/home');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

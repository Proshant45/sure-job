<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Employer;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $user_attributes = $request->validate([
        "name" => ['required'],
        "email" =>['required','email','unique:users,email'],
        "password" =>['required','confirmed',Password::min(5)],
       ]);
       $employer_attributes = $request->validate([
        "employer"=> ['required'],
        "logo"=> ['required',File::types(['png','jpg','webp'])],
       ]);
       $user = User::create($user_attributes);
       $logo_path = $request->logo->store('logos');

       $user->employer()->create([
        "name"=>$employer_attributes['employer'],
        "logo"=>$logo_path
       ]);

       Auth::login($user);

       return redirect('/');

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

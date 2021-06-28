<?php

namespace App\Http\Controllers;


use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
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


    /**
     * Display the specified resource.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        return view('user.edit', compact('user'));
    }

    public function editPassWord(User $user)
    {

        return View('user.passwordedit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'pseudo' => ['required', 'string', 'max:20'],
            'prenom' => ['required', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],

            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user->pseudo = $request->input('pseudo');
        $user->prenom = $request->input('prenom');
        $user->nom = $request->input('nom');

        if(!Hash::check($request->input('password'), Auth::user()->password)){

        }else{
            return back()->withErrors('errors', 'ancien mot de passe identique');
        }



        $user->save();

        return redirect()->route('user_show', Auth::user());

    }

}

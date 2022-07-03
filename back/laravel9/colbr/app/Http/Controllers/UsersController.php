<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return users::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(users::create($request->all())) {
            return response()->json([
                'success' => 'User create with sucess' 
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(users $users)
    {
        //
    }

    public function login(Request $request)
    {
        $email = implode("", $request->only('email'));
        $password = implode("", $request->only('password'));

        $database_email = users::where('email', $email)->get('email');
        if (!count($database_email)) {
            return response()->json([
                'error' => 'No user existing with this email' 
            ], 400);
        } else {
            $database_password = users::where('email', $email)->value('password');
            $verify = password_verify($password, $database_password);
            
            if ($verify) {
                return response()->json([
                    'success' => 'User logged in' 
                ], 200);
            } else {
                return response()->json([
                    'error' => 'Wrong password' 
                ], 400);
            }
    }
}
}
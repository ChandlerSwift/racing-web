<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function __construct() {
        $this->middleware('admin')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $page_title = "Users";
        return view('user.list', compact('users', 'page_title'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Find a user by name.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function search($query)
    {
        $users = User::where('name', 'like', '%'.$query.'%')->get();
        $page_title = "Search: $query";
        return view('user.list', compact('users', 'page_title'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    }
}

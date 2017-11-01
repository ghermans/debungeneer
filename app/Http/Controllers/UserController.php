<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the users dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$data['users'] = User::All();
        return view('users.index', $data);
    }

    /**
     * Register a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('users.register');
    }    
}

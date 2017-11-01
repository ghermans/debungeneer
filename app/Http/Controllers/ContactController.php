<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  /**
   * Show the users dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('contact.formulier');
  }

  /**
   * Register a new user.
   *
   * @return \Illuminate\Http\Response
   */
  public function register()
  {
      return view('contact.bevestiging');
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Bookings;

class BookingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the users dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$data['users'] = User::All();
        return view('bookings.list', $data);
    }

    /**
     * Show the kalender.
     *
     * @return \Illuminate\Http\Response
     */
    public function kalender()
    {
      $event = \Calendar::event(
        "Valentine's Day", //event title
        true, //full day event?
        '2015-02-14', //start time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg)
          '2015-02-14', //end time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg),
            1, //optional event ID
            [
              'url' => 'http://full-calendar.io',
              //any other full-calendar supported parameters
            ]
          );
      return view('bookings.kalender');
    }


    /**
     * Show the kalender.
     *
     * @return \Illuminate\Http\Response
     */
    public function kalenderData()
    {
      $bookings = DB::table('bookings')->select('title', 'start', 'color')->get();
      return $bookings;
    }

    /**
     * Register a new booking.
     *
     * @return \Illuminate\Http\Response
     */
    public function register($id)
    {
        return view('bookings.register');
    }

    /**
     * Register a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function save()
    {
        return view('users.register');
    }
}

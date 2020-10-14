<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Session;
use App\Schedule;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $schedules = DB::table('schedules')->orderBy('id', 'desc')->where('user_id', Auth::user()->id)->paginate(15);
        $delivery_schedules = DB::table('schedules')->orderBy('id', 'desc')->where('delivery_man', Auth::user()->id)->where('status', 'delivered')->paginate(15);
        $admin_schedules = DB::table('schedules')->get();
        $users = DB::table('users')->get();
        return view('home')->with(array('schedules'=>$schedules, 'users'=>$users, 'admin_schedules'=>$admin_schedules, 'delivery_schedules' => $delivery_schedules));
    }
}

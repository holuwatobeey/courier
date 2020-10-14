<?php

namespace App\Http\Controllers;
use App\Schedule;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\Request;

class DmController extends Controller
{
    public function request(){
        $schedules = DB::table('schedules')->orderBy('id', 'desc')->where('is_accepted', 0)->paginate(15);
        return view('requests')->with(array('schedules'=>$schedules));
    }
    public function acceptreq(Request $request){
        $id = $request->get('id');
        $schedule = Schedule::where('id',$id)->first();
        $schedule->is_accepted = 1;
        $schedule->delivery_man = Auth::user()->id;
        if($schedule->save()){
            return redirect('/delivery-requests')->with('status', 'Delivery request accepted succesfully!');
        }

    }
    public function manage(){
        $schedules = DB::table('schedules')->orderBy('id', 'desc')->where('is_accepted', 1)->where('delivery_man', Auth::user()->id)->paginate(5);
        return view('manage')->with(array('schedules'=>$schedules));
    }
    public function manageupdate(Request $request){
        $id = $request->get('id');
        $schedule = Schedule::where('id',$id)->first();
        $schedule->status = $request->get('form_select');
        if($schedule->save()){
            return redirect('/manage-deliveries')->with('status', 'Delivery status updated succesfully!');
        }
    }
}

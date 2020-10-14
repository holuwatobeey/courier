<?php

namespace App\Http\Controllers;
use DB;
use Mail;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    public function users()
    {
        $users = DB::table('users')->orderBy('id', 'desc')->paginate(15);
        return view('see-users')->with(array('users'=>$users));
    }
    public function deliveries()
    {
        $admin_schedules = DB::table('schedules')->orderBy('id', 'desc')->paginate(15);
        return view('see-deliveries')->with(array('admin_schedules'=>$admin_schedules));
    }
    public function add_user(Request $request){
        $validate = $request -> validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
        ]);
        $user = new User([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => '2',
            ]);
            if($user->save()){
                \Mail::send('gen_password',
             array(
                 'name' => $request->get('first_name'),
                 'email' => $request->get('email'),
                 'subject' => 'Your Login Details(POINTOUT COURIER)',
                 'bodyMessage' => $request->get('password'),
             ), function($message) use ($request)
               {
                  $message->from('horluwatowbeey@gmail.com');
                  $message->to($request->email);
                  $message->subject('Your Login Details(POINTOUT COURIER)');
               });

                return redirect('/see-users')->with('status', 'Delivery Master Added Successfully!');
            }

    }
            
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Session;
use Paystack;
use DB;
use App\Schedule;


class ScheduleController extends Controller
{
    // public function schedule(Request $request){
    //     if(!(Auth::check())){
    //         // return session('link');
    //     // return redirect('register');
    //     return redirect()->action('Auth\RegisterController@showRegistrationForm');

    //     }
    //     if(Input::has('address1')){
    //         return $request->cookie('INs_NU');
    //     }

    // }

    public function redirectToGateway(Request $request)
    {
        if(!(Auth::check())){
            // return session('link');
        // return redirect('register');
        return redirect()->action('Auth\RegisterController@showRegistrationForm');

        }
        
        if(Input::has('peno')){

            $request->validate([
                'name1'=>'required|string',
                'email1'=>'required|string',
                'phone1'=>'required|string',
                'pkg_value1'=>'required|string',
                'pkg_size1'=>'required|string',
                'date1'=>'required|string',
                'time1'=>'required|string',
                'd_loc1'=>'required|string',
                'dev_opt1'=>'required|string',
                'address1'=>'required|string',            
              ]);
        $cookie = $request->cookie('INs_NU');
        $amountt = $cookie;

       
        if( $amountt <= 0 || $amountt == "" ||  $amountt < 700){
            return redirect('/schedule')->with('failure','Something, went wrong');
        }
        try
        {
            $amount = $amountt * 100;
            $request->merge(['amount' => $amount, 'quantity' => 1, 'email' => $request->email1]);
            return Paystack::getAuthorizationUrl()->redirectNow();
        }
        catch(\Exception $e)
        {
            // dd($e->getMessage());
            return redirect('/schedule')->with('failure', 'Something went wrong, Please try again.');
        }
    }


    if(Input::has('powt')){
        $cookie = $request->cookie('INs_NU');
        $amountt = $cookie;

        $request->validate([
            'name2'=>'required|string',
            'email2'=>'required|string',
            'phone2'=>'required|string',
            'pkg_value2'=>'required|string',
            'pkg_size2'=>'required|string',
            'date2'=>'required|string',
            'time2'=>'required|string',
            'd_loc2'=>'required|string',
            'dev_opt2'=>'required|string',
            'address2'=>'required|string',            
          ]);
       
        if( $amountt <= 0 || $amountt == "" ||  $amountt < 700){
            return redirect('/schedule')->with('failure','Something, went wrong');
        }
        try
        {
            $amount = $amountt * 100;
            $request->merge(['amount' => $amount, 'quantity' => 1, 'email' => $request->email2]);
            return Paystack::getAuthorizationUrl()->redirectNow();
        }
        catch(\Exception $e)
        {
            // dd($e->getMessage());
            return redirect('/schedule')->with('failure', 'Something went wrong, Please try again.');
        }
    }
        
    }

    
    public function callback(Request $request)
    {
        $paymentDetails = Paystack::getPaymentData();
        // dd($paymentDetails); 
        
        if ($paymentDetails['data']['status'] == 'success') { 
            $meta = json_decode($paymentDetails['data']['metadata'][0]);
            $user = Auth::user();
            // dd($meta->{'desc'});
           if($meta->{'btn'} == 'peno'){
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $tnumber = 'TN-'.substr(str_shuffle($permitted_chars), 0, 8);
                $schedule = new Schedule([
                'payment_reference' => $paymentDetails['data']['reference'],
                'name' => $meta->{'name'},
                'email' => $meta->{'email'},
                'user_id' => $user->id,
                'amount' => ($paymentDetails['data']['amount']/100),
                'tracking_number'=> $tnumber ,
                'phone' =>$meta->{'phone'}, 
                'desc' => $meta->{'desc'},
                'package_value' => $meta->{'package_value'},
                'package_size' =>$meta->{'package_size'},
                'pickup_date' => $meta->{'pickup_date'},
                    'pickup_time' =>  $meta->{'pickup_time'}, 
                    // 'pickup_loc' => $paymentDetails['data'] ['metadata']['pickup_loc'],
                    // 'pickup_addr' => $paymentDetails['data'] ['metadata']['pickup_addr'],
                    'dropoff_loc' =>  $meta->{'dropoff_loc'},
                    'dropoff_addr' => $meta->{'dropoff_addr'},
                    'delivery_opt' => $meta->{'delivery_option'},
                    'status' => "Pending",
                
                
                ]);
                if($schedule->save()){
                    $users = DB::table('users')->where('role', 2)->get();
                    foreach ($users as $user) {
                        \Mail::send('new_delivery', ['user' => $user], function ($m) use ($user) {
                                $m->from('horluwatowbeey@gmail.com', 'POINTOUT COURIER');
                                $m->to($user->email, $user->username)->subject('New Delivery Schedule');
                          });
                    }
                    \Mail::send('thanks',
                    array(
                        'name' =>$meta->{'name'},
                        'email' => $meta->{'email'},
                        'tnumber' => $tnumber,
                    ), function($message) use ($meta)
                      {
                         $message->from('horluwatowbeey@gmail.com');
                         $message->to($meta->{'email'});
                         $message->subject('Delivery Schedule Received');
                      });
                    // \Mail::send('schedule_email',
                    // array(
                    //     'name' => $user->name,
                    //     'email' => $user->email,
                    //     'amount' => ($paymentDetails['data']['amount']/100),
                        
                    // ), function($message) use ($user)
                    // {
                    //     $message->from('horluwatowbeey@gmail.com');
                    //     $message->subject('Deposit Successful');
                    //     $message->to($user->email);
                    // });
                }
                
                return redirect('/dashboard')->with('status', 'Schedule successful!');
                
                    // return redirect('/deposit')->with('failure', $e->getMessage());
                    // return redirect('/deposit')->with('failure', 'Something went wrong, Please try again.');
                
            }


            
           if($meta->{'btn'} == 'powt'){
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $tnumber = 'TN-'.substr(str_shuffle($permitted_chars), 0, 8);
                $schedule = new Schedule([
                'payment_reference' => $paymentDetails['data']['reference'],
                'name' => $meta->{'name'},
                'email' => $meta->{'email'},
                'user_id' => $user->id,
                'amount' => ($paymentDetails['data']['amount']/100),
                'tracking_number'=> $tnumber ,
                'phone' =>$meta->{'phone'}, 
                'desc' => $meta->{'desc'},
                'package_value' => $meta->{'package_value'},
                'package_size' =>$meta->{'package_size'},
                'pickup_date' => $meta->{'pickup_date'},
                    'pickup_time' =>  $meta->{'pickup_time'}, 
                    'pickup_loc' => $meta->{'pickup_loc'},
                    'pickup_addr' => $meta->{'pickup_addr'},
                    'dropoff_loc' =>  $meta->{'dropoff_loc'},
                    'dropoff_addr' => $meta->{'dropoff_addr'},
                    'delivery_opt' => $meta->{'delivery_option'},
                    'status' => "Pending",
                
                
                ]);
                if($schedule->save()){
                    $users = DB::table('users')->where('role', 2)->get();
                    foreach ($users as $user) {
                        \Mail::send('new_delivery', ['user' => $user], function ($m) use ($user) {
                                $m->from('horluwatowbeey@gmail.com', 'POINTOUT COURIER');
                                $m->to($user->email, $user->username)->subject('New Delivery Schedule');
                          });
                    }

                    \Mail::send('thanks',
                    array(
                        'name' => $meta->{'name'},
                        'email' => $meta->{'email'},
                        'tnumber' => $tnumber,
                    ), function($message) use ($meta)
                      {
                         $message->from('horluwatowbeey@gmail.com');
                         $message->to($meta->{'email'});
                         $message->subject('Delivery Schedule Received');
                      });

                      
                    
                    // \Mail::send('schedule_email',
                    // array(
                    //     'name' => $user->name,
                    //     'email' => $user->email,
                    //     'amount' => ($paymentDetails['data']['amount']/100),
                        
                    // ), function($message) use ($user)
                    // {
                    //     $message->from('horluwatowbeey@gmail.com');
                    //     $message->subject('Deposit Successful');
                    //     $message->to($user->email);
                    // });
                }
                
                return redirect('/dashboard')->with('status', 'Schedule successful!');
                
                    // return redirect('/deposit')->with('failure', $e->getMessage());
                    // return redirect('/deposit')->with('failure', 'Something went wrong, Please try again.');
                
            }



        }
        else
        {
            return redirect('/deposit')->with('failure', 'Schedule not successful!');

        }
    }
}

<?php

namespace App\Http\Controllers;
use App\Contact; 
use Mail;
use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('about');
    }
    public function who(){
        return view('who');
    }
    public function careers(){
        return view('careers');
    }
    public function schedule(){
        return view('schedule');
    }
    public function contact(){
        return view('contact');
    }
    public function terms(){
        return view('terms');
    }
    public function pricing(){
        return view('pricing');
    }
    public function saveContact(Request $request) { 
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'msg_subject' => 'required',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->msg_subject;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;

        $contact->save();

        \Mail::send('contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('msg_subject'),
                 'phone_number' => $request->get('phone'),
                 'bodyMessage' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('horluwatowbeey@gmail.com');
                  $message->subject($request->msg_subject);
               });

          return back()->with('status', 'Thank you for contacting us! We will get in touch very soon.');

    }
    public function track(Request $request){
        $tnumber = $request->get('track');
        $track = DB::table('schedules')->where('tracking_number', $tnumber)->get();
        if(count($track) == 1){
            return view('track')->with(array('track'=>$track));

        }
        else{
            return back()->with('failure', 'Sorry, the tracking number provided does not match any of our record..');
        }
        // dd($getresult);
        // $getfinal = (object) $getresult;
        // $track = json_decode($getfinal, true);
    }
    public function viewtrack(){
        return view('track');
    }
}

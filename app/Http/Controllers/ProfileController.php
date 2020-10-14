<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        if (Input::has('f_name'))
        {
          $user = Auth::user();
          $validate = $request -> validate([
            'username' => 'required|unique:users,username,'.$user->id.',id',
            'email' => 'required|unique:users,email,'.$user->id,

            'f_name' => 'required',
            'l_name' => 'required',
            'mobile' => 'required',
           
          ]);
          $id = $user->id;
          $userr = User::find($id);
          $userr->first_name = $request->get('f_name');
          $userr->last_name = $request->get('l_name');
          $userr->email = $request->get('email');
          $userr->username = $request->get('username');
          $userr->mobile = $request->get('mobile');
          if($userr->update()){
            return redirect('/profile')->with('status', 'Profile Updated!');
          }
        }
        if (Input::has('current-password'))
        {
            if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
                // The passwords matches
                return redirect()->back()->with("error","Your current password does not match with the password you provided. Please try again.");
            }

            if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
                //Current password and new password are same
                return redirect()->back()->with("error","New Password cannot be the same as your current password. Please choose a different password.");
            }

            $validatedData = $request->validate([
                'current-password' => 'required',
                'new-password' => 'required|string|min:6|confirmed',
            ]);

            //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->get('new-password'));
            $user->save();

            return redirect()->back()->with("status","Password changed successfully !");
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

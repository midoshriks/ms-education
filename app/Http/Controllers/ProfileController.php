<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function condition(){
        return view('auth.condition');
    }

    public function accept_condition(Request $request, $id){
        $accept_condition = User::find($id);
        $accept_condition->rights =  $request->rights;
        $accept_condition->save();
        // dd($accept_condition);

        return redirect()->route('home')->with('success','Register successfully');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.profile');
    }

    public function updata_user(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->squad = $request->squad;
        if($request->hasFile('img')){
            $request->file('img')->move('img_user/',$request->file('img')->getClientOriginalName());
            $user->img  = $request->file('img')->getClientOriginalName();
            // $user->save();
            // $user->update();
        } else {
            $img = 'noimage.jpg';
            // $user->update(['img' => $img]);
        }
        $user->password = bcrypt($request->password);

        // dd($user);

        $user->update();
        return redirect()->route('home')->with('success','Data has been Update product successfully');


        // var_dump($user->name);
        // exit;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(profile $profile)
    {
        //
    }
}

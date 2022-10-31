<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserInfo;
use App\Models\District;
use App\Models\Usersinfo;

class UserInfo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $distircts = District::all();
        return view('userinfo.createUserInfo',[
            'districts'=> $distircts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserInfo $request)
    {
        //
        $user = Auth::user();
        $user->userinfo()->create([
            'name' => $request->name,
            'nric' => $request->nric,
            'contact' => $request->contact,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'postcode' => $request->postcode,
            'district' => $request->district,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'agent' => $request->agent,
            'application_number' => $request->application_number,
        ]);
        
        return view('userInfo.storeUserInfo');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

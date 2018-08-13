<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Userdata;
use App\User;
use Illuminate\Http\Request;

class UserdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Userdata::all();
        return view('userdata.index',compact('users'));
    }
    public function login()
    {
        return view('userdata.login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userdata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        //dd($request);
        $request->validated();
      //  dd($request);
        $userData = new Userdata();
        $userData->saveUser($request);

        return redirect()->route('userdata.index')->with('success','the wallet is created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function show(Userdata $userData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function edit(Userdata $userData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Userdata  $userData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userdata $userData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Userdata  $userData
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userdata $userData)
    {
        //
    }
}

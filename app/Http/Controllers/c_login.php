<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use App\Models\customer;

use App\traits\my_trait;


class c_login extends Controller
{use my_trait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return login::all();
    }
    public function log_out()
    {
        //
        session_start();
        session_destroy();
        return redirect('sign_up');
       
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
        $login=new login;
        $login->user_name=$request->user_name;
        $login->password=$request->password;
        $login->is_admin=$request->is_admin;

        $check=$login->save();
        if($check)
       { $customer=new customer;
        $customer->id=$login->id;
        $customer->first_name=$request->first_name;
        $customer->last_name=$request->last_name;
        $customer->Email=$request->Email;
        $customer->phone=$request->phone;
        $customer->address=$request->address;
        $file_name=$this->uploud_image($request->photo,'img/customer');
        $customer->photo=$file_name;
        $check=$customer->save();
        if($check)
        return view('home');
        else
        return 0;
       }
        else
        return 0;
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(login $login)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $find= login::find($request->id);
        $find->user_name=$request->user_name;
        $find->password=$request->password;
        $find->is_admin=$request->is_admin;
        $check=$find->save();
        if($check)
        return 1;
        else
        return 0;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(login $login)
    {
        //
       $check=$login->delete();
       if($check)
       return 1;
       else
       return 0;
    }
}

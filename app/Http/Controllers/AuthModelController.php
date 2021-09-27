<?php

namespace App\Http\Controllers;

use App\Models\AuthModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Events\welcome;
use Event;
class AuthModelController extends Controller
{
    public function __construct(){
        $this->middleware('determine_role',['only'=>['stores']]);
    }
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        DB:: table('auth_models')->insert([
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>$request->role,
        ]);
        Session::flash('msg', "Account Created Successfully.");
        return redirect('/');
    }
    public function stores(Request $request)
    {
        
        $user = AuthModel:: where('email','=',$request->email)->first();
        dd($user);
        if ($user)
        {
            if($request->password == $user->password)
           {

            }   
        else{
            Session::flash('msg', "Password Invalid");
            return redirect('/');
        }
        }else{
            Session::flash('msg', "Emial not exist");
            return redirect('/');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthModel  $authModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthModel $authModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuthModel  $authModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthModel $authModel)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthModel  $authModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthModel $authModel)
    {
        //
    }
}

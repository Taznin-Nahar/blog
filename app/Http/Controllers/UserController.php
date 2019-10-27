<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use DB;
use file;
session_start();


class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $this->userAuthCheck();
       return view('auth.login');
   }



   public function userlogin(Request $request){
        // $login=view('auth.login');
        //  return view('home')
        //             ->with('main_content',$login);
       $email=$request->user_mail;
       $password=$request->psw;
       $result = DB::table('tbl_user')
       ->where('user_email', $email)
       ->where('password',md5($password))
       ->first();



                // 
       if ($result) {
                    # code...
        Session::put('user_name',$result->user_name);
        Session::put('user_id',$result->user_id);
                    // return view('admin.admin_master');
        return Redirect::to('/');
    }else{
        Session::put('exception','User ID or password invalid!');
        return Redirect::to('/login');
    }

} 


public function userAuthCheck(){
    $user_id=Session::get('user_id');

    if ($user_id) {
       return Redirect::to('/')->send();
   }else{

    return;
}
}



public function userRegistration(){
    $register=view('auth.registration');
    return view('home')
    ->with('main_content',$register);

}

public function saveData(Request $request){
    $data=array();

    $data['user_name']=$request->user_name;
    $data['user_contact']=$request->user_contact;
    $data['user_email']=$request->user_email;
    $data['password']=$request->pass;
        // echo "<pre>";
        //  print_r($data);
        // exit();

    DB::table('tbl_user')->insert($data);
    Session::put('message',"Successfully Registered!!");
    return Redirect::to('/'); 
}

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

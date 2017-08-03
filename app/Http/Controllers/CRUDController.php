<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
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
         $user = new User([
          'name' => $request->get('name'),
          'email' => $request->get('email'),
          'password' => $request->get('password'),
          'remember_token' => $request->get('remember_token'),
          'post' => $request->get('post')
        ]);

        $user->save();
        return redirect('/login');
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
    public function isauth(Request $request)
    {   
        // $users = User::all();
        // foreach ($users as $user){
        //    if( ( $user->email == $request->get('email') ) &&  ( $user->password == $request->get('password'))){
        //         return redirect('/home');
        //    }
        // }
        $credentials = [
            'email' => $request->get('email'),
            'password' =>  $request->get('password'),
        ];
        $valid = Auth::validate($credentials);
        if ( ! $valid)
        {
            //  return redirect('/login');
        }
        else {
            return redirect('/home');
        }
        
     
    }
}

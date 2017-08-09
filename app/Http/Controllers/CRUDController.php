<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


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
         $users = User::all();
         foreach ($users as $user){
            if( ( $user->email == $request->get('email') ) &&  ( $user->password == $request->get('password'))){
                 return redirect('/home');
            }
            else {
               
            }
         }
          return view('login')
                ->with('login_errors', "Invalid username or password");
    }
    // protected function getFailedLoginMessage()
    //     {
    //         return 'These credentials do not match our records.';
    //     }


        
        // $credentials = [
        //     'email' => $request->get('email'),
        //     'password' =>  $request->get('password'),
        // ];
        // $valid = Auth::validate($credentials);
        // return (string) $valid;
        // if ($valid)
        // {
        //     return ( $request->get('email'));
        //    // return redirect('/login');
        // }
        // else {
        //      return ( $request->get('password'));
        //   //  return redirect('/home');
        // }
        
     
    
}

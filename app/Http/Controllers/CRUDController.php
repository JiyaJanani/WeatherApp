<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;


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

    public function invalid(Request $request)
    {   

        $user = new Client([
            'base_uri' => 'http://devapi.talentaccurate.com', 
                'timeout'  => 2.0,
            ]);
            $email = $request->get('email');
            $password = $request->get('password');
            $error = 'Invalid username or password';
            $url = 'http://devapi.talentaccurate.com/cview/login/json?username='.$email.'&password='.$password.'&apikey=wf2537572d6f7b795a713c5e6w';
            $response = $user->request('POST', $url, [
            ]);
            $apiBody = json_decode($response->getBody()->getContents(), true);
            if ($apiBody['apiresult'] == 0) {
                return redirect('/home');
            } 
            else{
               return view ('/login')->with(compact('error')); 
            } 

        }
    }
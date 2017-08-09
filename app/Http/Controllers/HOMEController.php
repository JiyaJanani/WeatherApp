<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class HOMEController extends Controller
{
  
    public function index()
    {   
         return view('pages.home');
          
    }
    public function getWeatherByCityName( Request $request ){
        $client = new Client([            
        // Base URI is used with relative requests
        'base_uri' => 'http://openweathermap.org',
        // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);

        $city = $request->get('city');

        // Send a request to https://foo.com/api/test
        $weather = $client->request('GET', '/data/2.5/find?q='.$city.'&appid=b1b15e88fa797225412429c1c50c122a1&_=1502213875193');
        $content = json_decode( $weather->getBody()->getContents(), true )['list'][0];
       // return view('pages.home', ['weather' => $weather]);
       return view ('pages.home')->with(compact('content')); 
       
    }


}

   


<?php

namespace App\Http\Controllers;

use App\User;
use App\Vehicle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function alluser(){
        
        $user = Vehicle::all();
        
        return $user;
        
    }
    
    public function storecare(Request $request){
        
            $data = new Vehicle;
            
            $data->name = $request->name;
            
            $data->capacity = $request->capacity;
            
            $data->no_plate = $request->no_plate;
            
            $data->save ();
            
            return $data;
        

    }
}

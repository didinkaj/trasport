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
        
        $user = Vehicle::latest()->get();
        
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
    
    public function deleteVehicle($id){
        
        $value = Vehicle::find($id);
        $value->delete();
        
    }
    
    public function editVihecle($id,Request $request){
        $vehicle = Vehicle::find($id);
    
        $vehicle->name = $request->name;
    
        $vehicle->capacity = $request->capacity;
    
        $vehicle->no_plate = $request->no_plate;
    
        $vehicle->save ();
        
        return $vehicle;
        
    }
}

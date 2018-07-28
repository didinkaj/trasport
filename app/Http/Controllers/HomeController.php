<?php

namespace App\Http\Controllers;

use App\User;
use App\Vehicle;
use Illuminate\Http\Request;
use PDF;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
  
       $this->middleware('isAdmin',['only' => [ 'storecare','index']]);
       
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
    
    public function indexUser()
    {
        return view('user');
    }
    
    public function indexDriver()
    {
        return view('driver');
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
    
    public function editVihecle($id,Request $request){
        
        $vehicle = Vehicle::find($id);
    
        $vehicle->name = $request->name;
    
        $vehicle->capacity = $request->capacity;
    
        $vehicle->no_plate = $request->no_plate;
    
        $vehicle->save ();
        
        
    }
    
    public function deleteVehicle($id){
        
        $value = Vehicle::find($id);
        $value->delete();
        
    }
    
    public function generateTripHistoryPDF(){
        
        $users = User::all();
    
        view()->share(compact('users'));
    
        $pdf = App::make('dompdf.wrapper');
        
        $pdf->loadView('reports.sample');
        
        return $pdf->stream();
    }
    
}

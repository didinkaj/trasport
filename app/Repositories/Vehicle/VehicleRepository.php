<?php

namespace App\Repositories\Vehicle;

use App\Vehicle;
use Auth;

class VehicleRepository
{
    public $vehicle;
    
    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }
    
    public function getAllVehicles()
    {
        return $this->vehicle->latest()->get();
    }
    
    public function getVihecle($id)
    {
        return $this->vehicle->find($id)->first();
        
    }
    
    public function saveVehicles($request)
    {
        $this->vehicle->name = $request->name;
    
        $this->vehicle->capacity = $request->capacity;
    
        $this->vehicle->no_plate = $request->no_plate;
        
        $this->vehicle->users_id = Auth::id();
    
        return $this->vehicle->save ();
    
    }
    
    public function updateVehicle($request, $id){
        
        $vehicle = $this->vehicle->find($id);
        
        $vehicle->name  = $request->name;;
        
        $vehicle->capacity  = $request->capacity;
    
        $this->vehicle->users_id = Auth::id();
        
        $vehicle->no_plate  = $request->no_plate;;
    
        $vehicle->save();
    
      
    }
    
    public function deleteVehicle($id){
        
        $res = $this->vehicle->find($id);
        
        return $res->delete();
        
    }
    
}
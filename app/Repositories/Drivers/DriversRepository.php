<?php

namespace App\Repositories\Drivers;

use App\User;
use Illuminate\Support\Facades\Hash;

class DriversRepository
{
    public $driver;
    
    public function __construct(User $user)
    {
        $this->driver = $user;
    }
    
    public function getAllDrivers()
    {
        return $this->driver->drivers()->latest()->get();
    }
    
    public function getDriver($id)
    {
        return $this->driver->find($id)->first();
        
    }
    
    public function saveDriver($request)
    {
        $password = "abcd1234";
        
        $this->driver->name = $request->name;
    
        $this->driver->email = $request->email;
    
        $this->driver->role = 2;
        
        $this->driver->role_description = 'driver';
        
        $this->driver->password = Hash::make($password);
    
        return $this->driver->save ();
        
    }
    
    public function updateDriver($request, $id){
        
        $vehicle = $this->driver->find($id);
        
        $vehicle->name  = $request->name;;
        
        $vehicle->capacity  = $request->capacity;;
        
        $vehicle->no_plate  = $request->no_plate;;
    
        $vehicle->save();
    
        return $vehicle;
    }
    
    public function deleteDriver($id){
        
        $res = $this->driver->find($id);
        
         $res->delete();
        
    }
    
}
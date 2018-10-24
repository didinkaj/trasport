<?php

namespace App\Repositories\Drivers;

use App\Events\DriverRegistered;
use App\User;
use Auth;
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
        
        $this->driver->phone = $request->phone;
    
        $this->driver->role = 2;
        
        $this->driver->role_description = 'driver';
        
        $this->driver->password = Hash::make($password);
        
        $response = $this->driver->save ();
    
        event(new DriverRegistered( $this->driver));
    
        return $response;
        
    }
    
    public function updateDriver($request, $id){
        
        $vehicle = $this->driver->find($id);
        
        $vehicle->name  = $request->name;
    
        $this->driver->phone = $request->phone;
        
        $vehicle->capacity  = $request->capacity;
        
        $vehicle->no_plate  = $request->no_plate;
    
        $vehicle->save();
    
        return $vehicle;
    }
    
    public function deleteDriver($id){
        
        $res = $this->driver->find($id);
        
        return $res->delete();
        
    }
    
    public function loggedInDriver()
    {
        return Auth::user();
    }
    
}
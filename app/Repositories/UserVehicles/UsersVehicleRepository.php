<?php

namespace App\Repositories\UserVehicles;

use App\User_Vehicle;
use Illuminate\Support\Facades\Auth;

class UsersVehicleRepository
{
    public $userVehicles;
    
    public function __construct(User_Vehicle $user_Vehicles)
    {
        $this->userVehicles = $user_Vehicles;
    }
    
    public function getAllUserVehicles()
    {
        return $this->userVehicles->latest()->get();
    }
    
    
    public function countAllUserVehicles()
    {
        return $this->userVehicles->all()->count();
    }
    
    public function getUserVehicle($id)
    {
        return $this->userVehicles->user()->with('name')->find($id)->first();
        
    }
    
    public function saveUserVehicle($request)
    {
    
        $this->userVehicles->users_id = $request->users_id;
    
        $this->userVehicles->vehicles_id = $request->vehicles_id;
    
        return $this->userVehicles->save ();
    
    }
    
    public function updateUserVehicle($request, $id)
    {
    
    
    }
    
    public function deleteUserVehicles($id)
    {
    
    
        
    }
    
    public function getVehiclesAssigned(){
    
        return $this->userVehicles->all();
    
    }
    
}
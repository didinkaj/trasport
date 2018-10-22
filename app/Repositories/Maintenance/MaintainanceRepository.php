<?php

namespace App\Repositories\Maintenance;

use App\Maintainance;
use Illuminate\Support\Facades\Auth;

class MaintainanceRepository
{
    public $maintainance;
    
    public function __construct(Maintainance $maintenance)
    {
        $this->maintainance = $maintenance;
    }
    
    public function getAllMaintainance()
    {
        return $this->maintainance->latest()->get();
    }
    
    
    public function countAllMaintainance()
    {
        return $this->maintainance->all()->count();
    }
    
    public function getMaintainance($id)
    {
        return $this->maintainance->find($id)->first();
        
    }
    
    public function saveMaintainance($request)
    {
    
    
    
    }
    
    public function updateMaintainance($request, $id){
    
    
    }
    
    public function deleteMaintainance($id){
    
    
        
    }
    
}
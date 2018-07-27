<?php

namespace App\Repositories\Reports;

use App\Vehicle;
use App;
use PDF;

class ReportsRepository
{
    public $vehicle;
    
    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }
    
    public function getAllVehiclesInPdf()
    {
    
        $vehicles =  $this->vehicle->latest()->get();
    
        return $vehicles;
    }
    
    
}
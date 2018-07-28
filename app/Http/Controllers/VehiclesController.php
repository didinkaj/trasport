<?php

namespace App\Http\Controllers;

use App\Repositories\Vehicle\VehicleRepository;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    private $vehicleRepo;
    
    function __construct(VehicleRepository $vehicleRepository)
    {
        $this->vehicleRepo = $vehicleRepository;
    
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $this->vehicleRepo->getAllVehicles();
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'capacity' => 'required',
            'no_plate' => 'required',
        ]);
        
         if($this->vehicleRepo->saveVehicles($request))
         {
             return $request;
         }
        
         return  $request;
        
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return $this->vehicleRepo->getVihecle($id);
        
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'capacity' => 'required',
            'no_plate' => 'required',
        ]);
    
        $this->vehicleRepo->updateVehicle($request,$id);
       
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->vehicleRepo->deleteVehicle($id);
    }
}

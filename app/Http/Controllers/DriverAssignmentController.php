<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserVehicles\UsersVehicleRepository;

class DriverAssignmentController extends Controller
{
    private $userVehicleRepo;
    
    function __construct(UsersVehicleRepository $vehicleRepository)
    {
        $this->userVehicleRepo = $vehicleRepository;
        
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
        return $this->userVehicleRepo->getVehiclesAssigned();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'users_id' => 'required',
            'vehicles_id' => 'required',
        ]);
    
        if($this->userVehicleRepo->saveUserVehicle($request))
        {
            return response()->json(['success'=>'Data save Successfully','data'=>$request]);
        }else{
            return response()->json(['status'=>'An error occured']);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return $this->userVehicleRepo->getUserVehicle($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

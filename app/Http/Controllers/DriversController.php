<?php

namespace App\Http\Controllers;

use App\Mail\DriverRegistered;
use Illuminate\Http\Request;
use App\Repositories\Drivers\DriversRepository;
use Illuminate\Support\Facades\Mail;

class DriversController extends Controller
{
    private $driverRepo;
    
    function __construct(DriversRepository $driversRepository)
    {
        $this->middleware('auth');
        
        $this->driverRepo = $driversRepository;
        
       // $this->middleware('isAdmin',['only' => [ 'store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $this->driverRepo->getAllDrivers();
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);
    
         if($this->driverRepo->saveDriver($request))
         {
             $message = array('test' => 'Welcome to Cytonn TRSM');
             
             Mail::to($request->email)->send(new DriverRegistered($message));
             
             return $request;
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
        $this->driverRepo->deleteDriver($id);
    }
}

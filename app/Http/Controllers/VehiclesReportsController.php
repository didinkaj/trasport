<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Reports\ReportsRepository;
use App;
use PDF;

class VehiclesReportsController extends Controller
{
    private $reportRepo;
    
    function __construct(ReportsRepository $reportsRepository)
    {
        $this->reportRepo = $reportsRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $vehicles =  $this->reportRepo->getAllVehiclesInPdf();
        
        view()->share(compact('vehicles'));
    
        $pdf = App::make('dompdf.wrapper');
    
        $pdf->loadView('reports.vehicles.vehicleslist');
    
        return $pdf->stream();
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
    }
}

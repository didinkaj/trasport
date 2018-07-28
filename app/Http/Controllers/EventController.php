<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Repositories\Events\EventsRepository;

class EventController extends Controller
{
    
    private $eventRepo;
    
    function __construct(EventsRepository $eventsRepository)
    {
        $this->eventRepo = $eventsRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       return $this->eventRepo->getAllEvents();
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
            'name' => 'required',
            'description' => 'required',
            'created_at' => date('Y-m-d h:i:s')
        ]);
        
    
        if($this->eventRepo->saveEvent($request))
        {
            return $request;
        }
    
        return  $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->eventRepo->deleteEvent($id);
    }


    public function countEvents()
    {
        
        return $this->eventRepo->countAllEvents();
        
    }
}

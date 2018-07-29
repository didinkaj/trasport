<?php

namespace App\Repositories\Events;

use App\Event;
use Illuminate\Support\Facades\Auth;

class EventsRepository
{
    public $event;
    
    public function __construct(Event $event)
    {
        $this->event = $event;
    }
    
    public function getAllEvents()
    {
        return $this->event->latest()->get();
    }
    
    
    public function countAllEvents()
    {
        return $this->event->all()->count();
    }
    
    public function getEvent($id)
    {
        return $this->event->find($id)->first();
        
    }
    
    public function saveEvent($request)
    {
        
        $this->event->name = $request->name;
        
        $this->event->description = $request->description;
        
        $this->event->users_id = Auth::id();
    
        return $this->event->save ();
        
    }
    
    public function updateEvent($request, $id){
        
        $event = $this->event->find($id);
    
        $event->name  = $request->name;;
    
        $event->sdate  = $request->sdate;;
    
        $event->description  = $request->description;;
    
        $event->save();
    
        return $event;
    }
    
    public function deleteEvent($id){
        
        $res = $this->event->find($id);
        
         $res->delete();
        
    }
    
}
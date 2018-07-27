<?php

namespace App\Repositories\Reservations;

use App\Reserve;
use App\Vehicle;
use Illuminate\Support\Facades\Hash;

class ReservationRepository
{
    public $booking;
    
    public function __construct(Reserve $reserve)
    {
        $this->booking = $reserve;
    }
    
    public function getAllBookings()
    {
        //return $this->booking->latest()->get();
        return Vehicle::all();
    }
    
    public function getBooking($id)
    {
        return $this->booking->find($id)->first();
        
    }
    
    public function saveBooking($request)
    {
        $password = "123456";
        
        $this->booking->name = $request->name;
    
        $this->booking->email = $request->email;
    
        $this->booking->role = 2;
        
        $this->booking->role_description = 'driver';
        
        $this->booking->password = Hash::make($password);
    
        return $this->booking->save ();
        
    }
    
    public function updateBooking($request, $id){
        
        $book = $this->booking->find($id);
        
        $book->name  = $request->name;;
        
        $book->capacity  = $request->capacity;;
        
        $book->no_plate  = $request->no_plate;;
    
        $book->save();
    
        return $book;
    }
    
    public function deleteBooking($id){
        
        $res = $this->booking->find($id);
        
        return $res->delete();
        
    }
    
}
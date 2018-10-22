<?php

namespace App\Repositories\SeatReservastion;

use App\Seat_reservation;
use Illuminate\Support\Facades\Auth;

class SeatResrvationRepository
{
    public $seatReservation;
    
    public function __construct(Seat_reservation $reservation)
    {
        $this->seatReservation = $reservation;
    }
    
    public function getAllSeatResrvations()
    {
        return $this->seatReservation->latest()->get();
    }
    
    
    public function countAllSeatResrvations()
    {
        return $this->seatReservation->all()->count();
    }
    
    public function getSeatResrvation($id)
    {
        return $this->seatReservation->find($id)->first();
        
    }
    
    public function saveSeatResrvation($request)
    {
    
    
    
    }
    
    public function updateSeatResrvation($request, $id){
    
    
    }
    
    public function deleteSeatResrvation($id){
    
    
        
    }
    
}
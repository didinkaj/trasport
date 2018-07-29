<?php

namespace App\Repositories\Users;

use App\User;
use Illuminate\Support\Facades\Auth;

class UsersRepository
{
    public $user;
    
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    public function getAllUsers()
    {
        return $this->user->latest()->get();
    }
    
    
    public function countAllUsers()
    {
        return $this->user->all()->count();
    }
    
    public function getUser($id)
    {
        return $this->user->find($id)->first();
        
    }
    
    public function saveUser($request)
    {
        
        $this->user->name = $request->name;
        
        $this->user->phone = $request->phone;
        
        $this->user->email = Auth::id();
    
        return $this->user->save ();
        
    }
    
    public function updateUser($request, $id){
        
        $User = $this->user->find($id);
    
        $User->name  = $request->name;;
    
        $User->sdate  = $request->sdate;;
    
        $User->description  = $request->description;;
    
        $User->save();
    
        return $User;
    }
    
    public function deleteUser($id){
        
        $res = $this->User->find($id);
        
         $res->delete();
        
    }
    
}
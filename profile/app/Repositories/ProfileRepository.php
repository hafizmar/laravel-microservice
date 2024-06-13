<?php

namespace App\Repositories;
use App\Models\User;
use App\Interfaces\ProfileInterface;

class ProfileRepository implements ProfileInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function index(){
        return User::all();
    }
}

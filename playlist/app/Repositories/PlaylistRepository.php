<?php

namespace App\Repositories;
use App\Models\Playlist;
use App\Interfaces\PlaylistRepositoryInterface;

class PlaylistRepository implements PlaylistRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function index(){
        return Playlist::all();
    }
}

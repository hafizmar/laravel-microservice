<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlaylistRequest;
use App\Http\Requests\UpdatePlaylistRequest;
use App\Models\Playlist;
use App\Interfaces\PlaylistRepositoryInterface;
use App\Classes\ApiResponseClass;
use App\Http\Resources\PlaylistResource;
use Illuminate\Support\Facades\DB;

class PlaylistController extends Controller
{
    private PlaylistRepositoryInterface $playlistRepositoryInterface;
    
    public function __construct(PlaylistRepositoryInterface $playlistRepositoryInterface)
    {
        $this->playlistRepositoryInterface = $playlistRepositoryInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $data = $this->playlistRepositoryInterface->index();

        return ApiResponseClass::sendResponse(PlaylistResource::collection($data),'',200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlaylistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Playlist $playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlaylistRequest $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Playlist $playlist)
    {
        //
    }
}
